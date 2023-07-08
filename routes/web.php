<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('signup',\App\Http\Controllers\Auth\SignupController::class)->only(['create','store']);
Route::resource('login',\App\Http\Controllers\Auth\LoginController::class)->only(['create','store']);


