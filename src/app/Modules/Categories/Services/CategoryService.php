<?php

namespace App\Modules\Categories\Services;

use App\Enums\PublishStatusEnum;
use App\Modules\Categories\Models\Category;
use App\Modules\Categories\Requests\CategoryRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryService
{
    private $categoryModel;

    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    public function all(): Collection
    {
        return $this->categoryModel->orderBy('id', 'DESC')->get();
    }

    public function allActive(): Collection
    {
        return $this->categoryModel->where('publish_status', PublishStatusEnum::ACTIVE->label())->orderBy('id', 'DESC')->get();
    }

    public function paginate(Request $request, Int $limit = 10): LengthAwarePaginator
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            return $this->categoryModel->where('name', 'like', '%' . $search . '%')->orderBy('id', 'DESC')->paginate($limit);
        }
        return $this->categoryModel->orderBy('id', 'DESC')->paginate($limit);
    }

    public function getById(Int $id): Category
    {
        return $this->categoryModel->findOrFail($id);
    }

    public function getActiveDataById(Int $id): Category
    {
        return $this->categoryModel->where('publish_status', PublishStatusEnum::ACTIVE->label())->findOrFail($id);
    }

    public function create(CategoryRequest $request): void
    {
        $this->categoryModel->create([
            ...$request->all(),
        ]);
    }

    public function update(CategoryRequest $request, Category $data) : void
    {
        $data->update([
            ...$request->all(),
        ]);
    }

    public function delete(Category $data): void
    {
        $data->delete();
    }
}
