<?php

namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;
use App\Modules\Products\Services\ProductService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private $categoryService;
    private $productService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function get(Request $request, String $category_id){
        $categories = $this->categoryService->allActive();
        $category = $this->categoryService->getActiveDataById($category_id);
        $products = $this->productService->paginateActiveDataByCategoryId($request, $category_id);
        return view('main.pages.products')->with([
            'categories' => $categories,
            'category' => $category,
            'products' => $products,
        ]);
    }
}
