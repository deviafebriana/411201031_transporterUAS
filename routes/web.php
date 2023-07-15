<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\salesController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\outletController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\pengirimanController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('home','dashboard');

Route::get('/auth', [authController::class,"index"])->name('login')->middleware('guest');
Route::get('/auth/redirect', [authController::class,"redirect"])->middleware('guest');
Route::get('/auth/callback', [authController::class,"callback"])->middleware('guest');
Route::get('/auth/logout',[authController::class,"logout"]);



Route::prefix('dashboard')->middleware('auth')->group(
    function() {
        Route::get('/',[dashboardController::class,'index']);
        Route::resource('/dashboard',dashboardController::class);
        Route::resource('barang', barangController::class);
        Route::resource('sales', salesController::class);
        Route::resource('outlet', outletController::class);
        Route::resource('transaksi', transaksiController::class);
        Route::resource('pengiriman', pengirimanController::class);
    }
);
