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
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

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
            }else if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.home');
            } else if (auth()->user()->role == 'editor') {
                return redirect()->route('editor.home');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Incorrect email or password!.');
        }
    }

}
