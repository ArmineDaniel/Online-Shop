<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OrderController;

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


require __DIR__.'/auth.php';


Route::get('/',[ShopController::class, 'index'])->name('home');
Route::group(['prefix' => 'menu'], function () {
    Route::get('/', [ShopController::class, 'menu'])->name('menu');
    Route::get('/{category}', [ShopController::class, 'filter'])->name('filter');
});

Route::post('/{product}', [ShopController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [ShopController::class, 'showCart'])->name('cart');
Route::post('/cart/{product}/{coffeeType?}', [ShopController::class, 'deleteFromCart'])->name('deleteFromCart');
Route::post('/cart/confirm/{product}/{coffeeType?}', [ShopController::class, 'confirmQuantity'])->name('confirmQuantity');

Route::middleware('auth')->prefix('order')->group(function (){
    Route::get('/', [OrderController::class, 'order'])->name('order');
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/pay/{order}', [OrderController::class, 'pay'])->name('pay');
    Route::post('/cancel/{order}', [OrderController::class, 'cancel'])->name('cancel');
});
