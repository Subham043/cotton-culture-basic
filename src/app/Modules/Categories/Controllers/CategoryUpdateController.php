<?php

namespace App\Modules\Categories\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Requests\CategoryRequest;
use App\Modules\Categories\Services\CategoryService;

class CategoryUpdateController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function get(Int $id){
        $data = $this->categoryService->getById($id);
        return view('admin.pages.category.update')->with(
            [
                'data' => $data
            ]
        );
    }

    public function post(CategoryRequest $request, Int $id){
        $data = $this->categoryService->getById($id);
        try {
            //code...
            $this->categoryService->update($request, $data);
            return redirect()->intended(route('category_update.get', $id))->with('success_status', 'Category updated successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect(route('category_update.get', $id))->with('error_status', 'Oops! Something went wrong. Please try again!');
        }

    }
}
