<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
            'remember' => 'boolean'
        ]);

        $login = $validated['login'];
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        $credentials = [$field => $login, 'password' => $validated['password']];

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role === 'beneficiary') {
                return redirect('/beneficiary/dashboard');
            }
            if ($user->role === 'staff') {
                return redirect('/staff/dashboard');
            }
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            }
            return redirect('/donor/dashboard');
        }

        return back()->withErrors(['login' => 'Invalid credentials.'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
