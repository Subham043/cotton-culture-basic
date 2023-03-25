<?php

namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryService;

class AboutController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function get(){
        $categories = $this->categoryService->allActive();
        return view('main.pages.about')->with([
            'categories' => $categories
        ]);
    }
}
