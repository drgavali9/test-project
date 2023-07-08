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

Route::get('signup', [\App\Http\Controllers\Auth\SignupController::class, 'create'])->name('signup.create');
Route::post('signup', [\App\Http\Controllers\Auth\SignupController::class, 'store'])->middleware('throttle:60,1')->name('signup.store');

Route::get('verify-email', [\App\Http\Controllers\Auth\VarifyEmailController::class, 'index'])->name('verification.verify');

Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'create'])->name('login.create');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->middleware('throttle:60,1')->name('login.store');

Route::middleware(['custom_auth'])->group(function () {
    Route::get('dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');
    Route::get('users', [\App\Http\Controllers\UserController::class,'index'])->name('users.index');
    Route::get('/users/{user}/pdf', [\App\Http\Controllers\UserController::class, 'createPDF'])->name('user.create-pdf');
});
