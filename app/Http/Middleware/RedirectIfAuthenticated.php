<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next, string ...$guards): Response
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             return redirect(RouteServiceProvider::HOME);
    //         }
    //     }

    //     return $next($request);
    // }

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // Check the role of the authenticated user and redirect accordingly
            $userRole = Auth::user()->role;

            if ($userRole === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($userRole === 'user') {
                return redirect()->route('user.dashboard');
            } elseif ($userRole === 'editor') {
                return redirect()->route('editor.dashboard');
            } elseif ($userRole === 'superadmin') {
                return redirect()->route('superadmin.dashboard');
            }

            // If the user has no specific role or the role is not defined above,
            // redirect to the default home route (change 'home' to your desired route).
            return redirect()->route('login');
        }

        return $next($request);
    }

}
