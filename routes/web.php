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

Route::post('submit-form', [FormController::class, 'submitForm'])->name('submit-form');

Route::get('login', function () {
    return view('login', ['title' => 'login']);
});

Route::get('register', function () {
    return view('register', ['title' => 'register']);
});
