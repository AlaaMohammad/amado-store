<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();



/******* Admin Routes *********/
Route::group(["prefix"=>"admin",'middleware' => 'admin'], function(){
    Route::get('/dashboard',  function (){
        return view('admin.index');
    });
   Route::resource('users', UserController::class);
   Route::resource('products', ProductController::class);
   Route::resource('categories', CategoryController::class);
   Route::get('/orders', [OrderController::class,'index'])->name('orders.view');
});

/******* Public Routes *********/
//shop routes
Route::get('/', [ShopController::class,'index'])->name('index');
Route::get('/home', [ShopController::class,'index']);
Route::get('/shop', [ShopController::class,'productsList']);
Route::get('/shop/category/{category:slug}', [ShopController::class,'productsCategoryList']);
Route::get('/shop/product/{product:slug}', [ShopController::class,'singleProduct']);

//cart routes
Route::get('/cart/view-cart', [CartController::class,'viewCart']);
Route::post('/cart/add-to-cart/{product_id}', [CartController::class,'addToCart'])->name('add-to-cart');
Route::get('/cart/update-cart', [CartController::class,'updateCart']);
Route::get('/cart/remove-item/{item_id}', [CartController::class,'removeItem']);
Route::get('/cart/checkout',[CartController::class,'checkout'])->name('checkout')->middleware('auth');
Route::post('/cart/checkout',[CartController::class,'placeOrder'])->name('place-order')->middleware('auth');
