<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:superadmin,admin,editor,user',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        Auth::login($user);

        return redirect('/'); // Redirect to the home page after successful registration.
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Check if "Remember Me" checkbox is checked

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user(); // Get the authenticated user

            // Check the role of the user and redirect accordingly
            if ($user->role == 'superadmin') {
                return redirect()->route('superadmin.dashboard');
            } else if ($user->role == 'user') {
                return redirect()->route('user.dashboard');
            } elseif ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'editor') {
                return redirect()->route('editor.dashboard');
            } else {
                // Handle other roles or default redirection here
                return redirect()->intended('/'); // Redirect to the intended page after successful login.
            }
        } else {
            return redirect()->route('login')->withErrors(['email' => 'Invalid email or password.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
