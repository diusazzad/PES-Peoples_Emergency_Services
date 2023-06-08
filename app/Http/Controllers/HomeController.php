<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role_id == 1) {
            return redirect()->route('role.Admindashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 2) {
            return redirect()->route('role.Userdashboard');
        }

        return view('home');
    }


    public function userHome()
    {
        // return view('home',["msg"=>"Hello! I am user"]);
        return view('role.user.userDashboard');
    }
    public function editorHome()
    {
        return view('home',["msg"=>"Hello! I am editor"]);
    }
    public function adminHome()
    {
        // return view('home',["msg"=>"Hello! I am admin"]);
        return view('role.admin.adminDashboard');
    }
}
