<?php

namespace App\Modules\Categories\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Requests\CategoryRequest;
use App\Modules\Categories\Services\CategoryService;

class CategoryCreateController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function get(){
        return view('admin.pages.category.create');
    }

    public function post(CategoryRequest $request){
        try {
            //code...
            $this->categoryService->create($request);
            return redirect()->intended(route('category_create.get'))->with('success_status', 'Category created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect(route('category_create.get'))->with('error_status', 'Oops! Something went wrong. Please try again!');
        }

    }
}
