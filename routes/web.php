<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Welcome || kunciKas']);
});

Route::post('register-successfully', [FormController::class, 'register'])->name('register-successfully');
Route::post('login-successfully', [FormController::class, 'login'])->name('login-successfully');

Route::controller(Auth::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/reset-password', 'resetPassword')->name('resetPassword');
    Route::get('/update-password', 'updatePassword')->name('updatePassword');
});

Route::prefix('dashboard')->controller(UserController::class)->group(function () {
    Route::get('/', 'dashboard')->name('dashboard');
    Route::get('/debt', 'debt')->name('debt');
    Route::get('/transaction', 'transaction')->name('transaction');
});
