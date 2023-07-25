<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorController extends Controller
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

        // Assuming you have an 'editor.dashboard' view for the editor dashboard
        return view('editor.dashboard', $data);
    }
}
