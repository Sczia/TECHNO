<?php

use App\Http\Controllers\AdminController;
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




Route::get('/', [HomeController::class,'landing']) -> name('landing');
Route::get('/home', [HomeController::class,'landing']) -> name('landing');
Route::get('/appointment', [HomeController::class,'appointment']) -> name('appointment');
Route::get('/contactus', [HomeController::class,'contactus']) -> name('contactus');
Route::get('/login', [HomeController::class,'Login']) -> name('login');
Route::get('/register', [HomeController::class,'register']) -> name('register');

/* ADMIN */
Route::get('/admin', [AdminController::class,'index']) -> name('admin.index');
