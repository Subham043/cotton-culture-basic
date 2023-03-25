<?php

namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;
use App\Modules\Products\Services\ProductService;

class ProductController extends Controller
{
    private $productService;
    private $categoryService;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function get(String $product_id){
        $categories = $this->categoryService->allActive();
        $product = $this->productService->getActiveDataById($product_id);
        $popular_products = $this->productService->getActivePopularData();
        return view('main.pages.product')->with([
            'categories' => $categories,
            'product' => $product,
            'popular_products' => $popular_products,
        ]);
    }
}
