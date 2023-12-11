<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'matric_number' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            switch ($user->categories) {
                case 'Lecturer':
                    return redirect('/lecturerCategories');
                    break;

                case 'Student':
                    return redirect('/instration');
                    break;

                // Add more cases for other categories as needed

                default:
                    // If the category is not recognized, redirect to a default page
                    return redirect('/')->withErrors(['login_error' => 'Invalid matric number or password. Please try again']);
            }
        }

        // Authentication failed, redirect back to the login page with an error message
        return redirect('/')->withErrors(['login_error' => 'Invalid matric number or password. Please try again']);
    }
}
