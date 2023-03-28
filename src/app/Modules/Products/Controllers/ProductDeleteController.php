<?php

namespace App\Modules\Products\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Products\Services\ProductService;

class ProductDeleteController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function get(Int $id){
        $data = $this->productService->getById($id);
        try {
            //code...
            $this->productService->delete($data);
            return redirect()->intended(route('product_list.get'))->with('success_status', 'Product deleted successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect(route('product_list.get'))->with('error_status', 'Oops! Something went wrong. Please try again!');
        }
    }
}
