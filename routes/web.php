<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/about', function () {
    return view('site.about');
});

Route::get('/contact', function () {
    return view('site.contact');
});

Route::get('/products', function () {
    return view('site.products');
});

Route::get('/career', function () {
    return view('site.career');
});

Route::post('/register', [AuthController::class, 'new_registration'])->name('auth.register');
Route::post('/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', [HomeController::class,'index']);
Route::get('/products/{id}', [HomeController::class, 'product_by_category']);
Route::get('/products', [ProductController::class,'products']);

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/product-list', [ProductController::class,'product_list'])->name('admin.product-list');
    Route::get('/product-add', [ProductController::class,'product_add']);
    Route::post('/product-add', [ProductController::class, 'new_product'])->name('product.upload');
    Route::get('/product-update/{id}', [ProductController::class,'product_update']);
    Route::post('/product-update/{id}', [ProductController::class,'product_modify']);
    Route::post('/product-delete/{id}', [ProductController::class,'product_destroy']);

    Route::get('/category-list', [CategoryController::class,'category_list'])->name('admin.category-list');
    Route::get('/category-add', [CategoryController::class,'category_add']);
    Route::post('/category-add', [CategoryController::class, 'new_category'])->name('category.upload');
    Route::post('/category-delete/{id}', [CategoryController::class,'category_destroy']);
    Route::get('/category-update/{id}', [CategoryController::class,'category_update']);
    Route::post('/category-update/{id}', [CategoryController::class,'category_modify']);

    Route::get('/user-list', [UserController::class,'user_list'])->name('admin.user-list');
    Route::get('/user-update/{id}', [UserController::class,'user_update']);
    Route::post('/user-update/{id}', [UserController::class,'user_modify']);
    Route::get('/user-add', [UserController::class,'user_add']);
    Route::post('/user-add', [UserController::class, 'new_user'])->name('user.upload');
    Route::post('/user-delete/{id}', [UserController::class,'user_destroy']);
    Route::get('/user-request', [UserController::class,'user_request'])->name('admin.user-request');
    Route::get('/user-request-update/{id}', [UserController::class,'user_request_update']);
    Route::post('/user-request-update/{id}', [UserController::class,'user_request_modify']);
    Route::post('/user-request-delete/{id}', [UserController::class,'user_request_destroy']);
    Route::get('/profile', [AdminController::class,'profile'])->name('admin.profile');
    Route::post('/profile/{id}', [AdminController::class,'profile_modify']);
    Route::get('/change-password', [AdminController::class,'change_password'])->name('admin.change-password');
    Route::post('/change-password/{id}', [AdminController::class,'change_password_modify']);
});