<?php

use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\FrontendController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

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

//Admin
Route::get('/admin', function () {
    return view('admin.home');
});
//product
Route::post('/admin/product/add', [productController::class, 'insert_product']);
Route::get('/admin/product/create', [productController::class, 'add_product']);
Route::get('/admin/product/list', [productController::class, 'list_product']);
Route::get('/admin/product/delete',[productController::class, 'delete_product']);
Route::get('/admin/product/edit/{id}', [productController::class, 'edit_product']);
Route::post('/admin/product/edit/{id}', [productController::class, 'update_product']);



Route::get('/admin/order_list', function () {
    return view('admin.order_list');
});
Route::get('/admin/order_detail', function () {
    return view('admin.order_detail');
});

//upload
Route::post('/upload', [UploadController::class,'uploadImage']);
Route::post('/uploads', [UploadController::class,'uploadImages']);


//frontend
Route::get('/', [FrontendController ::class,'index']);
Route::get('/frontend/product_details/{id}',[FrontendController::class,'show_product']);
Route::get('/frontend/cart', function () {
    return view('frontend.cart');
});
Route::get('/frontend/blog-details', function () {
    return view('frontend.blog-details');
});
Route::get('/frontend/blog', function () {
    return view('frontend.blog');
});
Route::get('/frontend/checkout', function () {
    return view('frontend.checkout');
});
Route::get('/frontend/shop', [FrontendController ::class,'shop']);
Route::get('/frontend/home', [FrontendController ::class,'index']);


