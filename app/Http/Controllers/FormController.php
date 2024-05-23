<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class FormController extends Controller
{
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
        // $validatedData = $request->validate([
        //     'email' => 'required|email|max:255',
        //     'password' => 'required|string|min:8',
        // ]);
        // Retrieve the username from the request
        $email = $request->input('email');
        $password = $request->input('password');
        if (strlen($password) < 8) {
            return "your password incorrect";
        }

        // Process the submitted data
        // You can save it to the database, perform additional actions, etc.

        // Return a response
        return "<h1>Login Successfully</h1><h3>Email => $email</h3><h3>Password => $password</h3>";
    }
}
