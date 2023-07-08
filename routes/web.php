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

Route::get('/', \App\Http\Controllers\HomeController::class);

Route::resource('signup', \App\Http\Controllers\Auth\SignupController::class)->only(['create', 'store']);

Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'create'])->name('login.create');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->middleware('throttle:60,1')->name('login.store');

Route::middleware(['custom_auth'])->group(function () {
    Route::get('dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');
});
