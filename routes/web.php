<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/promo', [App\Http\Controllers\PromoController::class, 'promo'])->name('promo');
// Route::get('/promo', [App\Http\Controllers\PromoController::class, 'login'])->name('login');
Route::get('/buy_now', [App\Http\Controllers\BuyNowController::class, 'buy_now'])->name('buy_now');

// Route Checkout
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->middleware('auth')->name('index');
Route::get('/checkout/process', [App\Http\Controllers\CheckoutController::class, 'processCheckout'])->middleware('auth')->name('process');
Route::get('/checkout/success', [App\Http\Controllers\CheckoutController::class, 'success'])->middleware('auth')->name('success');

// About
Route::get('/about', function () {
    return view('about');
})->name('about');



