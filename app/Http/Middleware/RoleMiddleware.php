<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth; // Add this line to import the Auth facade
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        if (Auth::check() && Auth::user()->role_id == $role) {
            return $next($request);
        }

        return redirect('/'); // Modify the redirect path as needed
        // return $next($request);
    }
}
