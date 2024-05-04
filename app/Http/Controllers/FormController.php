<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
        ]);

        // Retrieve the username from the request
        $username = $request->input('username');

        // Process the submitted data
        // You can save it to the database, perform additional actions, etc.

        // Return a response
        return "Form submitted successfully. Username: $username";
    }
}
