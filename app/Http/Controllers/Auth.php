<?php

namespace App\Http\Controllers;

class Auth extends Controller
{
    public function login()
    {
        return view('auth.login', ['title' => 'login']);
    }
    public function register()
    {
        return view('auth.register', ['title' => 'register']);
    }
    public function resetPassword()
    {
        return view('auth.resetPassword', ['title' => 'Reset Password']);
    }
}
