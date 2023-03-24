<?php

namespace App\Modules\Products\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Products\Services\ProductImageService;

class ProductImageDeleteController extends Controller
{
    private $productImageService;

    public function __construct(ProductImageService $productImageService)
    {
        $this->productImageService = $productImageService;
    }

    public function get(Int $project_id, Int $id){
        $data = $this->productImageService->getById($id);
        try {
            //code...
            $this->productImageService->delete($data);
            return redirect()->intended(route('product_image_list.get', $project_id))->with('success_status', 'Product Image deleted successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return redirect(route('product_image_list.get', $project_id))->with('error_status', 'Oops! Something went wrong. Please try again!');
        }
    }
}
