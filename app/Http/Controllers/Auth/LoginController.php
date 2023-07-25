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
    // protected function redirectTo()
    // {
    //     if (auth()->user()->role == 'superadmin') {
    //         return route('superadmin.home');
    //     } elseif (auth()->user()->role == 'admin') {
    //         return route('admin.home');
    //     } elseif (auth()->user()->role == 'editor') {
    //         return route('editor.home');
    //     } else {
    //         return route('home');
    //     }
    // }

    // Show the regular login form

}
