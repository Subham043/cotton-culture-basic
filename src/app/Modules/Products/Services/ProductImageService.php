<?php

namespace App\Modules\Products\Services;

use App\Http\Services\FileService;
use App\Modules\Products\Models\ProductImage;
use App\Modules\Products\Requests\ProductImageRequest;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ProductImageService
{
    private $productImageModel;
    private $path = 'public/upload/products/image';

    public function __construct(ProductImage $productImageModel)
    {
        $this->productImageModel = $productImageModel;
    }

    public function getById(Int $id): ProductImage
    {
        return $this->productImageModel->findOrFail($id);
    }

    public function paginate(Int $limit = 10, Int $product_id): LengthAwarePaginator
    {
        return $this->productImageModel->where('product_id', $product_id)->orderBy('id', 'DESC')->paginate($limit);
    }

    public function create(ProductImageRequest $request, Int $product_id): void
    {
        $image = (new FileService)->save_file($request, 'image', $this->path);
        $this->productImageModel->create([
            'image' => $image,
            'product_id' => $product_id,
        ]);
    }

    public function delete(ProductImage $data): void
    {
        (new FileService)->delete_file('app/'.$this->path.'/'.$data->image);
        $data->delete();
    }

}
