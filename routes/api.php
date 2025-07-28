<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CheckoutController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/products', [ProductApiController::class, 'index']);

Route::post('/cart', [CartController::class, 'addToCart']);
Route::get('/cart', [CartController::class, 'index']);
// Route::post('/cart/update', [CartController::class, 'updateQuantity']);
Route::put('/cart/update', [CartController::class, 'updateQuantity']);
Route::post('/cart/remove', [CartController::class, 'remove']);

Route::post('/checkout', [CheckoutController::class, 'checkout']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
