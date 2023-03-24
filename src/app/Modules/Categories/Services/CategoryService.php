<?php

namespace App\Modules\Categories\Services;

use App\Modules\Categories\Models\Category;
use App\Modules\Categories\Requests\CategoryRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryService
{
    private $projectModel;
    private $path = 'public/upload/projects';

    public function __construct(Category $projectModel)
    {
        $this->projectModel = $projectModel;
    }

    public function all(): Collection
    {
        return $this->projectModel->orderBy('id', 'DESC')->get();
    }

    public function paginate(Request $request, Int $limit = 10): LengthAwarePaginator
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            return $this->projectModel->where('name', 'like', '%' . $search . '%')->orderBy('id', 'DESC')->paginate($limit);
        }
        return $this->projectModel->orderBy('id', 'DESC')->paginate($limit);
    }

    public function getById(Int $id): Category
    {
        return $this->projectModel->findOrFail($id);
    }

    public function getBySlug(String $slug): Category
    {
        return $this->projectModel->where('slug', $slug)->firstOrFail();
    }

    public function create(CategoryRequest $request): void
    {
        $this->projectModel->create([
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
