<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function loginPage()
    {
        return view('auth.login', ['title' => 'login']);
    }
    public function registerPage()
    {
        return view('auth.register', ['title' => 'register']);
    }

    public function resetPasswordPage()
    {
        return view('auth.resetPassword', ['title' => 'Reset Password']);
    }
    public function updatePasswordPage()
    {
        return view('auth.updatePassword', ['title' => 'Update Password']);
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Retrieve the username from the request
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $password = $validatedData['password'];

        //hashed password
        $hashedPassword = bcrypt($password);
        // Assign a default role ID (assuming 'user' role has an ID of 2)
        $defaultRoleId = 2;

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'role_id' => $defaultRoleId,
        ]);
        // Return a response
        return redirect()->route('dashboard');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $email = $validatedData['email'];
        $password = $validatedData['password'];

        $user = User::where('email', $email)->first();

        if ($user && password_verify($password, $user->password)) {
            // Authentication successful, redirect to the dashboard
            return redirect()->route('dashboard');
        } else {
            // Authentication failed, redirect to the login page
            return redirect()->route('login')->withErrors([
                'email' => 'Invalid email or password',
            ]);
        }
    }
}
