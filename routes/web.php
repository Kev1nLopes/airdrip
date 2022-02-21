<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginAction']);


Route::prefix('dashboard')->group(function(){
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [HomeController::class, 'dashboard']);
});

Route::get('/{any}', [HomeController::class, 'index'])->name('main')->where('any', '.*');


    
    




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
