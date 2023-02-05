<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('pages/index', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
/*
Route::get('/cart', [CartController::class, 'index']->middleware('auth')

Route::get('/profile', [ProfileController::class, 'index']->middleware('auth')

Route::get('/account-maintenance', [AccountMaintenanceControlle::class, 'index']->middleware('auth')
*/
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'validator']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);
