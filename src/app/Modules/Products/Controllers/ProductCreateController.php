<?php

namespace App\Modules\Products\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;
use App\Modules\Products\Requests\ProductRequest;
use App\Modules\Products\Services\ProductService;

class ProductCreateController extends Controller
{
    private $productService;
    private $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function get(){
        $categories = $this->categoryService->all();
        return view('admin.pages.product.create')->with([
            'categories' => $categories,
        ]);
    }

    public function post(ProductRequest $request){

        try {
            //code...
            $this->productService->create($request);
            return redirect()->intended(route('product_create.get'))->with('success_status', 'Product created successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return redirect(route('product_create.get'))->with('error_status', 'Oops! Something went wrong. Please try again!');
        }

    }
}
