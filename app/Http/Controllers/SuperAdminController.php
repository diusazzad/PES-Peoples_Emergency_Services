<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
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

        // Assuming you have a 'superadmin.dashboard' view for the superadmin dashboard
        return view('superadmin.dashboard', $data);
    }
}
