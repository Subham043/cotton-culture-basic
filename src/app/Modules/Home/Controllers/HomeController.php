<?php

namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;
use App\Modules\Products\Services\ProductService;

class HomeController extends Controller
{
    private $categoryService;
    private $productService;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function get(){
        $categories = $this->categoryService->allActive();
        $popular_products = $this->productService->getActivePopularData();
        return view('main.pages.home')->with([
            'categories' => $categories,
            'popular_products' => $popular_products,
        ]);
    }
}
