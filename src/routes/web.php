<?php

use App\Modules\Home\Controllers\AboutController;
use App\Modules\Home\Controllers\ContactController;
use App\Modules\Home\Controllers\HomeController;
use App\Modules\Home\Controllers\ProductController;
use App\Modules\Home\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'get', 'as' => 'home.get'])->name('home.get');
Route::get('/about', [AboutController::class, 'get', 'as' => 'about.get'])->name('about.get');
Route::get('/contact', [ContactController::class, 'get', 'as' => 'contact.get'])->name('contact.get');
Route::get('/product/{product_id}', [ProductController::class, 'get', 'as' => 'prodcuct_detail.get'])->where('product_id', '[0-9]+')->name('prodcuct_detail.get');

Route::prefix('/{category_id}')->group(function () {
    Route::get('/', [ProductsController::class, 'get', 'as' => 'prodcucts.get'])->where('category_id', '[0-9]+')->name('prodcucts.get');
});
