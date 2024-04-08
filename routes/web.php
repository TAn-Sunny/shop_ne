<?php

use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\FrontendController;
use App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\orderController;

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


//order
Route::get('/admin/order/list',[orderController::class, 'list_order']);
Route::get('/admin/order/detail/{{order_detail}}', [orderController::class, 'detail_order']);

//upload
Route::post('/upload', [UploadController::class,'uploadImage']);
Route::post('/uploads', [UploadController::class,'uploadImages']);


//frontend
Route::get('/', [FrontendController ::class,'index']);
Route::get('/frontend/product_details/{id}',[FrontendController::class,'show_product']);
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

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/order/confirm', function () {
    return view('order.confirm');
});

Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'SignupController@signup');
Route::get('/validate-email', 'EmailController@validate');
Route::get('/laravel-coding/login/validate-email', 'App\Http\Controllers\EmailController@validateEmail');

//cart
Route::post('/frontend/cart/add',[FrontendController::class,'add_cart']);
Route::get('/frontend/cart', [FrontendController::class,'show_cart']);
Route::get('/frontend/cart/delete/{id}', [FrontendController::class,'delete_cart']);
Route::post('/frontend/checkout/send', [FrontendController::class, 'send_cart']);

//search
Route::get('/frontend/search', [FrontendController::class, 'getSearch']) -> name('search');
//login
Route::get('/home', [FrontendController ::class,'index']);

Route::get('/index', function () {
    return view('login.index');
});

Route::get('/login_signupsuccess', function () {
    return view('login.login');
});
Route::get('/login_onprocess', function () {
    return view('login.login');
});

Route::get('/signup_after', function () {
    return view('login.signnup');
});


Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
Route::get('/signup', 'App\Http\Controllers\SignupController@index');
Route::post('/signup', 'App\Http\Controllers\\LoginController@signup');
Route::get('/laravel-coding/login/validate-email', 'App\Http\Controllers\EmailController@validateEmail');
Route::post('/login/process-signup', 'App\Http\Controllers\SignUpController@signup')->name('login.process-signup');
//frontend
