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
Route::get('/best_fashion', [App\Http\Controllers\BestFashionController::class, 'best_fashion'])->name('best_fashion');
Route::get('/show_more', [App\Http\Controllers\ShowMoreController::class, 'show_more'])->name('show_more');

// Stripe
Route::post('/session', [App\Http\Controllers\StripeController::class, 'session'])->name('session');
Route::get('/success', [App\Http\Controllers\StripeController::class, 'success'])->name('success');
Route::get('/cancel', [App\Http\Controllers\StripeController::class, 'cancel'])->name('cancel');
// Product

Route::get('/', [App\Http\Controllers\ProductsController::class, 'index']);
Route::get('cart', [App\Http\Controllers\ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [App\Http\Controllers\ProductsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [App\Http\Controllers\ProductsController::class, 'remove'])->name('remove_from_cart');

// Route Checkout
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->middleware('auth')->name('index');
Route::get('/checkout/process', [App\Http\Controllers\CheckoutController::class, 'processCheckout'])->middleware('auth')->name('process');
Route::get('/checkout/success', [App\Http\Controllers\CheckoutController::class, 'success'])->middleware('auth')->name('success');

// About
Route::get('/about', function () {
    return view('about');
})->name('about');



