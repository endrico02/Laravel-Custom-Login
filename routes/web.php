<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::GET('/', [LoginController::class, 'ceklogin']);
Route::POST('actionlogin', [LoginController::class, 'actionlogin']);
Route::GET('home', [HomeController::class, 'index'])->name('home')->middleware('auth');