<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.registrasi');
    }
    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        // Attempt to log the user in
        if (auth()->attempt($request->only('email', 'password'))) {
            // If successful, redirect to the intended page or default to home
            return redirect()->intended('/home')->with('success', 'Login successful!');
        }

        // If unsuccessful, redirect back with an error message
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'The provided password is incorrect.',
        ]);
    }
    /**
     * Handle a registration request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        // Log the user in
        auth()->login($user);
        return redirect()->intended('/home')->with('success', 'Registration successful!');
    }
}
