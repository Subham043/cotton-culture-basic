<?php

use App\Modules\Authentication\Controllers\PasswordUpdateController;
use App\Modules\Authentication\Controllers\ForgotPasswordController;
use App\Modules\Authentication\Controllers\LoginController;
use App\Modules\Authentication\Controllers\LogoutController;
use App\Modules\Authentication\Controllers\ProfileController;
use App\Modules\Authentication\Controllers\ResetPasswordController;
use App\Modules\Categories\Controllers\CategoryCreateController;
use App\Modules\Categories\Controllers\CategoryDeleteController;
use App\Modules\Categories\Controllers\CategoryPaginateController;
use App\Modules\Categories\Controllers\CategoryUpdateController;
use App\Modules\Enquiries\Controllers\EnquiryDeleteController;
use App\Modules\Enquiries\Controllers\EnquiryPaginateController;
use App\Modules\Products\Controllers\ProductCreateController;
use App\Modules\Products\Controllers\ProductDeleteController;
use App\Modules\Products\Controllers\ProductExcelController;
use App\Modules\Products\Controllers\ProductImageCreateController;
use App\Modules\Products\Controllers\ProductImageDeleteController;
use App\Modules\Products\Controllers\ProductImagePaginateController;
use App\Modules\Products\Controllers\ProductPaginateController;
use App\Modules\Products\Controllers\ProductUpdateController;
use App\Modules\Projects\Controllers\ProjectAboutController;
use App\Modules\Projects\Controllers\ProjectAmenitiesCreateController;
use App\Modules\Projects\Controllers\ProjectAmenitiesDeleteController;
use App\Modules\Projects\Controllers\ProjectAmenitiesPaginateController;
use App\Modules\Projects\Controllers\ProjectAmenitiesUpdateController;
use App\Modules\Projects\Controllers\ProjectBannerController;
use App\Modules\Projects\Controllers\ProjectConnectivityCreateController;
use App\Modules\Projects\Controllers\ProjectConnectivityDeleteController;
use App\Modules\Projects\Controllers\ProjectConnectivityPaginateController;
use App\Modules\Projects\Controllers\ProjectConnectivityUpdateController;
use App\Modules\Projects\Controllers\ProjectCreateController;
use App\Modules\Projects\Controllers\ProjectDeleteController;
use App\Modules\Projects\Controllers\ProjectGalleryCreateController;
use App\Modules\Projects\Controllers\ProjectgalleryDeleteController;
use App\Modules\Projects\Controllers\ProjectGalleryPaginateController;
use App\Modules\Projects\Controllers\ProjectLocationController;
use App\Modules\Projects\Controllers\ProjectPaginateController;
use App\Modules\Projects\Controllers\ProjectPlanCategoryCreateController;
use App\Modules\Projects\Controllers\ProjectPlanCategoryDeleteController;
use App\Modules\Projects\Controllers\ProjectPlanCategoryPaginateController;
use App\Modules\Projects\Controllers\ProjectPlanCategoryUpdateController;
use App\Modules\Projects\Controllers\ProjectPlanImageCreateController;
use App\Modules\Projects\Controllers\ProjectPlanImageDeleteController;
use App\Modules\Projects\Controllers\ProjectPlanImagePaginateController;
use App\Modules\Projects\Controllers\ProjectSectionHeadingController;
use App\Modules\Projects\Controllers\ProjectSpecificationCreateController;
use App\Modules\Projects\Controllers\ProjectSpecificationDeleteController;
use App\Modules\Projects\Controllers\ProjectSpecificationPaginateController;
use App\Modules\Projects\Controllers\ProjectSpecificationUpdateController;
use App\Modules\Projects\Controllers\ProjectTableCreateController;
use App\Modules\Projects\Controllers\ProjectTableDeleteController;
use App\Modules\Projects\Controllers\ProjectTablePaginateController;
use App\Modules\Projects\Controllers\ProjectTableUpdateController;
use App\Modules\Projects\Controllers\ProjectUpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'get', 'as' => 'login.get'])->name('login.get');
    Route::post('/authenticate', [LoginController::class, 'post', 'as' => 'login.post'])->name('login.post');
    Route::get('/forgot-password', [ForgotPasswordController::class, 'get', 'as' => 'forgot_password.get'])->name('forgot_password.get');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'post', 'as' => 'forgot_password.post'])->name('forgot_password.post');
    Route::get('/reset-password/{user_id}', [ResetPasswordController::class, 'get', 'as' => 'reset_password.get'])->name('reset_password.get');
    Route::post('/reset-password/{user_id}', [ResetPasswordController::class, 'post', 'as' => 'reset_password.post'])->name('reset_password.post');
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'get', 'as' => 'profile.get'])->name('profile.get');
        Route::post('/update', [ProfileController::class, 'post', 'as' => 'profile.post'])->name('profile.post');
        Route::post('/profile-password-update', [PasswordUpdateController::class, 'post', 'as' => 'password.post'])->name('password.post');
    });

    Route::prefix('/category')->group(function () {
        Route::get('/create', [CategoryCreateController::class, 'get', 'as' => 'category_create.get'])->name('category_create.get');
        Route::post('/create-post', [CategoryCreateController::class, 'post', 'as' => 'category_create.post'])->name('category_create.post');
        Route::get('/', [CategoryPaginateController::class, 'get', 'as' => 'category_list.get'])->name('category_list.get');
        Route::get('/delete/{id}', [CategoryDeleteController::class, 'get', 'as' => 'category_delete.get'])->name('category_delete.get');
        Route::get('/update/{id}', [CategoryUpdateController::class, 'get', 'as' => 'category_update.get'])->name('category_update.get');
        Route::post('/update-post/{id}', [CategoryUpdateController::class, 'post', 'as' => 'category_update.post'])->name('category_update.post');
    });

    Route::prefix('/enquiry')->group(function () {
        Route::get('/', [EnquiryPaginateController::class, 'get', 'as' => 'enquiry_list.get'])->name('enquiry_list.get');
        Route::get('/delete/{id}', [EnquiryDeleteController::class, 'get', 'as' => 'enquiry_delete.get'])->name('enquiry_delete.get');
    });

    Route::prefix('/product')->group(function () {
        Route::get('/create', [ProductCreateController::class, 'get', 'as' => 'product_create.get'])->name('product_create.get');
        Route::post('/create-post', [ProductCreateController::class, 'post', 'as' => 'product_create.post'])->name('product_create.post');
        Route::get('/excel', [ProductExcelController::class, 'get', 'as' => 'product_excel.get'])->name('product_excel.get');
        Route::post('/excel-post', [ProductExcelController::class, 'post', 'as' => 'product_excel.post'])->name('product_excel.post');
        Route::get('/', [ProductPaginateController::class, 'get', 'as' => 'product_list.get'])->name('product_list.get');
        Route::get('/delete/{id}', [ProductDeleteController::class, 'get', 'as' => 'product_delete.get'])->name('product_delete.get');
        Route::get('/update/{id}', [ProductUpdateController::class, 'get', 'as' => 'product_update.get'])->name('product_update.get');
        Route::post('/update-post/{id}', [ProductUpdateController::class, 'post', 'as' => 'product_update.post'])->name('product_update.post');

        Route::prefix('/image/{product_id}')->group(function () {
            Route::get('/create', [ProductImageCreateController::class, 'get', 'as' => 'product_image_create.get'])->name('product_image_create.get');
            Route::post('/create-post', [ProductImageCreateController::class, 'post', 'as' => 'product_image_create.post'])->name('product_image_create.post');
            Route::get('/', [ProductImagePaginateController::class, 'get', 'as' => 'product_image_list.get'])->name('product_image_list.get');
            Route::get('/delete/{id}', [ProductImageDeleteController::class, 'get', 'as' => 'product_image_delete.get'])->name('product_image_delete.get');

        });
    });

    Route::get('/logout', [LogoutController::class, 'get', 'as' => 'logout.get'])->name('logout.get');

});
