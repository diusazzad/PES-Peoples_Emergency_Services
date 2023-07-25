<?php

namespace App\Http\Controllers\Auth;

// use Auth;
use Illuminate\Support\Facades\Auth; // Add this line to import the Auth facade
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;



class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // The path to redirect users after login based on their roles
    protected function redirectTo()
    {
        if (auth()->user()->role == 'superadmin') {
            return route('superadmin.home');
        } elseif (auth()->user()->role == 'admin') {
            return route('admin.home');
        } elseif (auth()->user()->role == 'editor') {
            return route('editor.home');
        } else {
            return route('home');
        }
    }

    // Show the regular login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login for regular users
    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember'); // Check if the "Remember Me" checkbox is checked

        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']], $remember)) {
            if (auth()->user()->role == 'superadmin') {
                return redirect()->route('superadmin.home');
            } elseif (auth()->user()->role == 'admin') {
                return redirect()->route('admin.home');
            } elseif (auth()->user()->role == 'editor') {
                return redirect()->route('editor.home');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Incorrect email or password!');
        }
    }

    // Show the login form for superadmin
    public function showAdminLoginForm()
    {
        return view('auth.admin-login');
    }

    // Handle login for superadmin
    public function adminLogin(Request $request)
    {
        // Your login logic here for superadmin
        // Use $request->input('email') and $request->input('password') for credentials
    }

    // Similar methods for admin and editor login

}
