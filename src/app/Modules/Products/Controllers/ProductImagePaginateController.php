<?php

namespace App\Modules\Products\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Products\Services\ProductImageService;
use App\Modules\Products\Services\ProductService;

class ProductImagePaginateController extends Controller
{
    private $productImageService;
    private $productService;

    public function __construct(ProductImageService $productImageService, ProductService $productService)
    {
        $this->productImageService = $productImageService;
        $this->productService = $productService;
    }

    public function get(Int $product_id){
        $product = $this->productService->getById($product_id);
        $data = $this->productImageService->paginate(10, $product_id);
        return view('admin.pages.product.image.paginate')->with(
            [
                'data' => $data,
                'product' => $product,
                'product_id' => $product_id,
            ]
        );
    }
}
