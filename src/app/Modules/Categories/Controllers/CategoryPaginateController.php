<?php

namespace App\Modules\Categories\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryPaginateController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function get(Request $request){
        $data = $this->categoryService->paginate($request, 10);
        return view('admin.pages.category.paginate')->with(
            [
                'data' => $data
            ]
        );
    }
}
