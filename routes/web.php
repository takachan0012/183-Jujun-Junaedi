<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureAuthenticated;
use App\Http\Middleware\EnsureGuest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Welcome || kunciKas']);
});

Route::get('/getsession', function () {
    return session()->all();
});

//logout
// Route::get('/logout', function () {
//     session()->forget('isLogged');
//     session()->forget('user_id');
//     session()->forget('name');
//     session()->forget('email');
//     return redirect()->route('loginPage');
// });

Route::middleware(EnsureGuest::class)->controller(Auth::class)->group(function () {
    Route::get('/login', 'loginPage')->name('loginPage');
    Route::get('/register', 'registerPage')->name('registerPage');
    Route::get('/reset-password', 'resetPasswordPage')->name('resetPasswordPage');
    Route::get('/update-password', 'updatePasswordPage')->name('updatePasswordPage');
    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
});

Route::middleware(EnsureAuthenticated::class)->prefix('dashboard')->controller(UserController::class)->group(function () {
    Route::get('/', 'dashboard')->name('dashboard');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/profile/logout', 'logout')->name('logout');
    Route::get('/debt', 'debt')->name('debt');
    Route::get('/debt/create', 'createDebt')->name('createDebt');
    Route::get('/debt/user', 'userDebt')->name('userDebt'); //using ID for prod ex: /debt/{id}
    Route::get('/debt/detail/{id?}', 'userDebtDetail')->name('userDebtDetail'); //using ID for prod ex: /debt/{id}/{debt/tx Id}
    Route::get('/debt/user/detail/update', 'updateDebtDetail')->name('updateDebtDetail'); //using ID for prod ex: /debt/{id}/{debt/tx Id}
    Route::get('/transaction', 'transaction')->name('transaction');
    Route::get('/transaction/create', 'createTransaction')->name('createTransaction');


    Route::post('/debt/create', 'createTransactionPost')->name('createDebtPost');
    Route::post('/transaction/create', 'createTransactionPost')->name('createTransactionPost');
});
