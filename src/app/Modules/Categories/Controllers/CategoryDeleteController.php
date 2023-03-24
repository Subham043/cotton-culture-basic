<?php

namespace App\Modules\Categories\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;

class CategoryDeleteController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function get(Int $id){
        $data = $this->categoryService->getById($id);
        try {
            //code...
            $this->categoryService->delete($data);
            return redirect()->intended(route('catgeory_list.get'))->with('success_status', 'Category deleted successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return redirect(route('catgeory_list.get'))->with('error_status', 'Oops! Something went wrong. Please try again!');
        }
    }
}
