<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Add any specific data you want to pass to the view
        $data = [
            'user' => $user,
            // Add other data here
        ];

        // Assuming you have an 'admin.dashboard' view for the admin dashboard
        return view('admin.dashboard', $data);
    }
}
