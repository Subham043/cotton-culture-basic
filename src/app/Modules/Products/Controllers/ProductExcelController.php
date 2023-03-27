<?php

namespace App\Modules\Products\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;
use App\Modules\Products\Imports\ProductImport;
use App\Modules\Products\Requests\ProductExcelRequest;
use App\Modules\Products\Services\ProductService;
use Maatwebsite\Excel\Facades\Excel;

class ProductExcelController extends Controller
{
    private $productService;
    private $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function get(){
        return view('admin.pages.product.excel');
    }

    public function post(ProductExcelRequest $request){

        Excel::import(new ProductImport, request()->file('excel'));
        return "yes";
        if($data->count() == 0)
        {
            return redirect(route('product_excel.get'))->with('error_status', 'Please enter atleast one row of data in the excel.');
        }
        dd($data);
        try {
            //code...
            $this->productService->create($request);
            return redirect()->intended(route('product_excel.get'))->with('success_status', 'Product created successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return redirect(route('product_excel.get'))->with('error_status', 'Oops! Something went wrong. Please try again!');
        }

    }
}
