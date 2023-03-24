<?php

namespace App\Modules\Products\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Products\Services\ProductService;
use App\Modules\Products\Requests\ProductImageRequest;
use App\Modules\Products\Services\ProductImageService;

class ProductImageCreateController extends Controller
{
    private $productService;
    private $productImageService;

    public function __construct(ProductImageService $productImageService, ProductService $productService)
    {
        $this->productService = $productService;
        $this->productImageService = $productImageService;
    }

    public function get(Int $product_id){
        $this->productService->getById($product_id);
        return view('admin.pages.product.image.create')->with(
            [
                'product_id' => $product_id
            ]
        );
    }

    public function post(ProductImageRequest $request, Int $product_id){
        $this->productService->getById($product_id);
        try {
            //code...
            $this->productImageService->create($request, $product_id);
            return redirect()->intended(route('product_image_create.get', $product_id))->with('success_status', 'Product Image created successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return redirect(route('product_image_create.get', $product_id))->with('error_status', 'Oops! Something went wrong. Please try again!');
        }

    }
}
