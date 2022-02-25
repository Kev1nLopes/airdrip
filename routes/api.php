<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/api', function (Request $request) {
    return $request->user();
});

Route::post('/product', [ProductsController::class, 'createProduct']);
Route::get('/products', [ProductsController::class, 'readAllProducts']);
Route::get('/product/{id}', [ProductsController::class, 'readProduct'])->middleware('auth');
Route::put('/product/{id}', [ProductsController::class, 'updateProduct'])->middleware('auth');
Route::delete('/product/{id}', [ProductsController::class, 'deleteProduct'])->middleware('auth');

Route::post('/user', [UsersController::class, 'createUser']);
Route::get('/users', [UsersController::class, 'readAllUsers']);
Route::get('/user/{id}', [UsersController::class, 'readUser'])->middleware('auth');
Route::put('/user/{id}', [UsersController::class, 'updateUser'])->middleware('auth');
Route::delete('/user/{id}', [UsersController::class, 'deleteUser'])->middleware('auth');