<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('dashboard')->group(function(){
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
    Route::get('/{any}', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
    
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{any}', [HomeController::class, 'index'])->name('main')->where('any', '.*');
