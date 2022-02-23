<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/product', [ProductsController::class, 'createProduct']);
Route::get('/products', [ProductsController::class, 'readAllProducts']);
Route::get('/product/{id}', [ProductsController::class, 'readProduct']);
Route::put('/product/{id}', [ProductsController::class, 'updateProduct']);
Route::delete('/product/{id}', [ProductsController::class, 'deleteProduct']);