<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AccountMaintenanceController;
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
Route::middleware('auth')->group(function() {
  Route::get('/home', [HomeController::class, 'index'])->name('home');
  Route::get('/cart', [CartController::class, 'index'])->name('cart');
  Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
  Route::get('/item/{items:id}', [ItemController::class, 'index']);
  Route::middleware('auth')->group(function () {
    Route::get('/account/maintenance', [AccountMaintenanceController::class, 'index']);
  });
});

Route::controller(IndexController::class)->group(function() {
  Route::get('/', 'index')->name('index');
});

Route::controller(RegisterController::class)->group(function() {
  Route::get('/register', 'index')->middleware('guest')->name('register');
  Route::post('/register', 'validator');
});

Route::controller(LoginController::class)->group(function() {
  Route::get('/login', 'index')->middleware('guest')->name('login');
  Route::post('/login', 'authenticate');
  Route::post('/logout', 'logout');
});

