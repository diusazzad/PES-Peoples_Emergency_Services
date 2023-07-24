<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful, create access token and return a response
            $user = Auth::user();
            $token = $user->createToken('authToken')->accessToken;

            return response()->json(['user' => $user, 'access_token' => $token], 200);
        } else {
            // Authentication failed, return an error response
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
    public function register(Request $request)
    {
        Log::info('Registration API requested');

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:superadmin,admin,editor,user',
        ]);

        if ($validator->fails()) {
            Log::info('Registration failed: Validation errors');
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        $token = $user->createToken('authToken')->accessToken;

        Log::info('Registration successful');
        return response()->json(['user' => $user, 'access_token' => $token], 201);
    }
}
