<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('users.dashboard', ['content' => '']);
    }
    public function debt()
    {
        return view('users.debt', ['content' => '']);
    }
    public function createDebt()
    {
        return view('users.createDebt', ['content' => '']);
    }
    public function userDebt()
    {
        return view('users.userDebt', ['content' => '']);
    }
    public function transaction()
    {
        return view('users.transaction', ['content' => 'Transaction']);
    }
}
