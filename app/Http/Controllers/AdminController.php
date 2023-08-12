<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    // ------------------------ Post From Admin
    public function postDashboard()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Add any specific data you want to pass to the view
        $data = [
            'user' => $user,
            // Add other data here
        ];

        // Assuming you have an 'admin.dashboard' view for the admin dashboard
        return view('admin.post.dashboard', $data);
    }
    public function postUpload()
    {
        $adminName = 'Admin User'; // Replace with actual admin's name
        $latestPostedContent = User::latest()->pluck('content')->first(); // Replace with actual model and column name

        return view('app', compact('adminName', 'latestPostedContent'));
    }
    // -----------------------------------------------------------


    public function roles()
    {
        // Get the authenticated user
        $user = Auth::user();

        // // Add any specific data you want to pass to the view
        $data = [
            'user' => $user,
            // Add other data here
        ];
        // return view('admin.roles.index', $data);

        $users = User::all();
        return view('admin.roles.index', $data, ['users' => $users]);
    }

    public function assignRoleToUser(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $role = $request->input('role');

        $user->role = $role;
        $user->save();

        return redirect()->route('admin.dashboard.roles')->with('success', 'Role assigned successfully');
    }


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
