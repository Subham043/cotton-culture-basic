<?php

namespace App\Modules\Products\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Products\Services\ProductService;
use Illuminate\Http\Request;

class ProductPaginateController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function get(Request $request){
        $data = $this->productService->paginate($request, 10);
        return view('admin.pages.product.paginate')->with(
            [
                'data' => $data
            ]
        );
    }
}
