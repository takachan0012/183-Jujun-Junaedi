<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('users.dashboard', ['content' => 'Dashboard']);
    }
    public function debt()
    {
        return view('users.debt', ['content' => 'Debt']);
    }
    public function transaction()
    {
        return view('users.transaction', ['content' => 'Transaction']);
    }
}
