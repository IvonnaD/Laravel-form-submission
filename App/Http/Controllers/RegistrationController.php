<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show the registration form
    public function show()
    {
        return view('register');
    }

    // Handle the form submission
    public function register(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // If validation passes, show message 
        return back()->with('success', 'Registration successful!');
    }
}
