<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     * Roles passed as middleware parameters: role:admin|staff
     */
    public function handle(Request $request, Closure $next, $roles = null)
    {
        // If not authenticated, redirect to login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (!$roles) {
            return $next($request);
        }

        $allowed = explode('|', $roles);
        $user = Auth::user();

        if (in_array($user->role, $allowed)) {
            return $next($request);
        }

        // If user authenticated but trying to access forbidden area, redirect to their dashboard.
        switch ($user->role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'staff':
                return redirect()->route('staff.dashboard');
            case 'beneficiary':
                return redirect()->route('beneficiary.dashboard');
            default:
                return redirect()->route('donor.dashboard');
        }
    }
}
