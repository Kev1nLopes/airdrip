<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/api', function (Request $request) {
  return $request->user();
});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'] );
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('me', [AuthController::class, 'me']);

Route::post('/product', [ProductsController::class, 'createProduct']);
Route::get('/products', [ProductsController::class, 'readAllProducts']);
Route::get('/product/{id}', [ProductsController::class, 'readProduct']);
Route::put('/product/{id}', [ProductsController::class, 'updateProduct']);
Route::delete('/product/{id}', [ProductsController::class, 'deleteProduct']);

Route::post('/user', [UsersController::class, 'createUser']);
Route::get('/users', [UsersController::class, 'readAllUsers']);
Route::get('/user/{id}', [UsersController::class, 'readUser']);
Route::get('/search/{name}', [UsersController::class, 'searchUser']);
Route::put('/user/{id}', [UsersController::class, 'updateUser'])->middleware('jwt.auth');
Route::delete('/user/{id}', [UsersController::class, 'deleteUser'])->middleware('jwt.auth');




