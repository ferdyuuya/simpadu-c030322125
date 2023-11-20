<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('pages.auth.auth-login');
    }

    // Process the login form
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('dashboard');
        } else {
            // Authentication failed
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
        }
    }

    // Logout the user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
