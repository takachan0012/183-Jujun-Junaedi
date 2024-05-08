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

// Route::get('dashboard', function () {
//     return view('dashboard', ['title' => 'dashboard']);
// });

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard', ['title' => 'dashboard', 'content' => 'dashboard']);
    });
    Route::get('/debt', function () {
        return view('debt', ['title' => 'dashboard', 'content' => 'debt']);
    });
    Route::get('/transaction', function () {
        return view('transaction', ['title' => 'dashboard', 'content' => 'transaction']);
    });
});

Route::get('register', function () {
    return view('register', ['title' => 'register']);
});
