<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{

    // User registration method
    public function register(Request $request)
    {
        // Validate the request data...

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Set a default role, change 'user' to your desired default role
        ]);

        // Generate and store the token for users with specified roles
        if (in_array($user->role, ['superadmin', 'admin', 'editor'])) {
            $user->remember_token = Str::random(100);
            $user->save();
        }

        // Redirect or return a response...
    }

    // User login method
    public function login(Request $request)
    {
        // Validate the request data...

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            // Check if the user has a valid token (for 'superadmin', 'admin', 'editor')
            if (in_array($user->role, ['superadmin', 'admin', 'editor']) && !$user->remember_token) {
                $user->remember_token = Str::random(100);
                $user->save();
            }

            // Redirect to the appropriate dashboard based on the user's role
            if ($user->role == 'superadmin') {
                return redirect()->route('superadmin.home');
            } elseif ($user->role == 'admin') {
                return redirect()->route('admin.home');
            } elseif ($user->role == 'editor') {
                return redirect()->route('editor.home');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Incorrect email or password!');
        }
    }


}
