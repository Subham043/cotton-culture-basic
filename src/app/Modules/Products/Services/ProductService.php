<?php

namespace App\Modules\Products\Services;

use App\Http\Services\FileService;
use App\Modules\Products\Models\Product;
use App\Modules\Products\Requests\ProductRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductService
{
    private $productModel;
    private $path = 'public/upload/products/catalogue';

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function all(): Collection
    {
        return $this->productModel->orderBy('id', 'DESC')->get();
    }

    public function paginate(Request $request, Int $limit = 10): LengthAwarePaginator
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            return $this->productModel->with('Category')
            ->where('name', 'like', '%' . $search . '%')
            ->orWhereHas('Category', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%');
            })
            ->orderBy('id', 'DESC')->paginate($limit);
        }
        return $this->productModel->with('Category')->orderBy('id', 'DESC')->paginate($limit);
    }

    public function getById(Int $id): Product
    {
        return $this->productModel->findOrFail($id);
    }

    public function create(ProductRequest $request): void
    {
        $catalogue = (new FileService)->save_file($request, 'catalogue', $this->path);
        $this->productModel->create([
            ...$request->except('catalogue'),
            'catalogue' => $catalogue,
        ]);
    }

    public function update(ProductRequest $request, Product $data) : void
    {
        $data->update([
            ...$request->except('catalogue'),
        ]);
    }

    public function update_image(ProductRequest $request, Product $data) : void
    {
        if($request->hasFile('catalogue')){
            $catalogue = (new FileService)->save_file($request, 'catalogue', $this->path);
            (new FileService)->delete_file('app/'.$this->path.'/'.$data->catalogue);
            $data->update([
                'catalogue' => $catalogue,
            ]);
        }
    }

    public function delete(Product $data): void
    {
        if(!empty($data->catalogue)){
            (new FileService)->delete_file('app/'.$this->path.'/'.$data->catalogue);
        }
        $data->delete();
    }
}
