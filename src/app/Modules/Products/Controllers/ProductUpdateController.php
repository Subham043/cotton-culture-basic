<?php

namespace App\Modules\Products\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;
use App\Modules\Products\Requests\ProductRequest;
use App\Modules\Products\Services\ProductService;

class ProductUpdateController extends Controller
{
    private $productService;
    private $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function get(Int $id){
        $data = $this->productService->getById($id);
        $categories = $this->categoryService->all();
        return view('admin.pages.product.update')->with(
            [
                'data' => $data,
                'categories' => $categories,
            ]
        );
    }

    public function post(ProductRequest $request, Int $id){
        $data = $this->productService->getById($id);
        try {
            //code...
            $this->productService->update_image($request, $data);
            $this->productService->update($request, $data);
            return redirect()->intended(route('product_update.get', $id))->with('success_status', 'Product updated successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return redirect(route('product_update.get', $id))->with('error_status', 'Oops! Something went wrong. Please try again!');
        }

    }
}
