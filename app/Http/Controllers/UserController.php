<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route as RouteFacade;

class UserController extends Controller
{
    public function __construct()
    {
        // Protect resource routes: require login and admin role for resource actions.
        $this->middleware(function ($request, $next) {
            // Allow create & store (registration) to be public
            $routeName = $request->route() ? $request->route()->getName() : null;
            if ($routeName === 'register' || $routeName === 'user.store' || $routeName === 'user.create') {
                return $next($request);
            }
            if (!\Illuminate\Support\Facades\Auth::check()) {
                return redirect()->route('login');
            }
            if (\Illuminate\Support\Facades\Auth::user()->role !== 'admin') {
                $role = \Illuminate\Support\Facades\Auth::user()->role;
                // Redirect to role-specific dashboard if not admin
                switch ($role) {
                    case 'staff': return redirect()->route('staff.dashboard');
                    case 'beneficiary': return redirect()->route('beneficiary.dashboard');
                    case 'donor': return redirect()->route('donor.dashboard');
                    default: return redirect()->route('home');
                }
            }
            return $next($request);
        })->except(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email|required_without:phone',
            'phone' => 'nullable|digits_between:10,11|unique:users,phone|required_without:email',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'nullable|in:donor,beneficiary',
        ]);

        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'address' => $validated['address'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'] ?? 'donor',
        ]);

        // Auto-login the user
        Auth::login($user);

        // If the user has an email, send verification notification in the background (if available)
        if ($user->email && method_exists($user, 'sendEmailVerificationNotification') && RouteFacade::has('verification.verify')) {
            $user->sendEmailVerificationNotification();
        }

        // Redirect to a role-specific dashboard
        if ($user->role === 'beneficiary') {
            return redirect('/beneficiary/dashboard')->with('success', 'Welcome! Your account was created.');
        }

        // default (donor)
        return redirect('/donor/dashboard')->with('success', 'Welcome! Your account was created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
