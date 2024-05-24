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

Route::controller(Auth::class)->group(function () {
    Route::get('/login', 'loginPage')->name('loginPage');
    Route::get('/register', 'registerPage')->name('registerPage');
    Route::get('/reset-password', 'resetPasswordPage')->name('resetPasswordPage');
    Route::get('/update-password', 'updatePasswordPage')->name('updatePasswordPage');

    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
});

Route::prefix('dashboard')->controller(UserController::class)->group(function () {
    Route::get('/', 'dashboard')->name('dashboard');
    Route::get('/debt', 'debt')->name('debt');
    Route::get('/debt/create', 'createDebt')->name('createDebt');
    Route::get('/debt/user', 'userDebt')->name('userDebt'); //using ID for prod ex: /debt/{id}
    Route::get('/debt/user/detail', 'userDebtDetail')->name('userDebtDetail'); //using ID for prod ex: /debt/{id}/{debt/tx Id}
    Route::get('/debt/user/detail/update', 'updateDebtDetail')->name('updateDebtDetail'); //using ID for prod ex: /debt/{id}/{debt/tx Id}
    Route::get('/transaction', 'transaction')->name('transaction');
});
