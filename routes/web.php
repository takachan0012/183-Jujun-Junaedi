<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FormController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Welcome || kunciKas']);
});
Route::get('/about', function () {
    return view('about');
});

Route::post('register-successfully', [FormController::class, 'register'])->name('register-successfully');
Route::post('login-successfully', [FormController::class, 'login'])->name('login-successfully');

Route::get('login', function () {
    return view('login', ['title' => 'login']);
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard', ['content' => 'dashboard']);
    });
    Route::get('/debt', function () {
        return view('debt', ['content' => 'debt']);
    });
    Route::get('/transaction', function () {
        return view('transaction', ['content' => 'transaction']);
    });
});

Route::get('register', function () {
    return view('register', ['title' => 'register']);
});
