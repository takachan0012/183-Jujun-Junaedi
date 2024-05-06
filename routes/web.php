<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FormController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::post('register-successfully', [FormController::class, 'register'])->name('register-successfully');
Route::post('login-successfully', [FormController::class, 'login'])->name('login-successfully');

Route::get('login', function () {
    return view('login', ['title' => 'login']);
});

Route::get('dashboard', function () {
    return view('dashboard', ['title' => 'dashboard']);
});

Route::get('register', function () {
    return view('register', ['title' => 'register']);
});
