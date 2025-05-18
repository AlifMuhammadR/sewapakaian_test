<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product_DetailController;
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

Route::get('/', function () {
    return view('perbaikan');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
    Route::post('/login_proses', [\App\Http\Controllers\LoginController::class, 'login_proses'])->name('login_proses');
});

Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::middleware(['level:admin'])->group(function () {
        Route::resource('/admin', \App\Http\Controllers\AdminController::class)->name('index', 'admin');
        Route::resource('/payment_method', \App\Http\Controllers\Payment_MethodController::class)->name('index', 'payment_method');
        Route::resource('/orders', \App\Http\Controllers\OrdersController::class)->name('index', 'orders');
    });

    Route::middleware(['level:admin,owner'])->group(function () {
        Route::resource('/clothes', \App\Http\Controllers\ClothesController::class)->name('index', 'clothes');
    });

    // Owner routes
    Route::middleware(['level:owner'])->group(function () {
        Route::resource('/owner', \App\Http\Controllers\OwnerController::class)->name('index', 'owner');
    });

    // Courier routes
    Route::middleware(['level:kurir'])->group(function () {
        Route::resource('/courier', \App\Http\Controllers\CourierController::class)->name('index', 'courier');
    });
});



Route::resource('/home', \App\Http\Controllers\HomeController::class)->name('index', 'home');
Route::resource('/orders', \App\Http\Controllers\OrdersController::class)->name('index', 'orders');
Route::resource('/shop', \App\Http\Controllers\ShopController::class)->name('index', 'shop');
Route::resource('/product_detail', \App\Http\Controllers\Product_DetailController::class)->name('index', 'product_detail');
Route::resource('/blog', \App\Http\Controllers\BlogController::class)->name('index', 'blog');
Route::resource('/blog_detail', \App\Http\Controllers\Blog_DetailController::class)->name('index', 'blog_detail');
Route::resource('/about', \App\Http\Controllers\AboutController::class)->name('index', 'about');
Route::resource('/contact', \App\Http\Controllers\ContactController::class)->name('index', 'contact');
Route::resource('/cart', \App\Http\Controllers\Shoping_CartController::class)->name('index', 'shoping_cart');
