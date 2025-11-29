<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;


// Home
Route::get('/', function () {return view('home');})->name('home');

// Auth
Route::get('/register', [UserController::class, 'create'])->name('register');
use App\Http\Controllers\AuthController;
Route::get('/login', [AuthController::class, 'show'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Donor
Route::get('/donor/dashboard', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'donor') {
		switch (Auth::user()->role) {
			case 'admin': return redirect()->route('admin.dashboard');
			case 'staff': return redirect()->route('staff.dashboard');
			case 'beneficiary': return redirect()->route('beneficiary.dashboard');
			default: return redirect()->route('home');
		}
	}
	return view('donor.dashboard');
})->name('donor.dashboard');
Route::get('/donor/profile', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'donor') {
		switch (Auth::user()->role) {
			case 'admin': return redirect()->route('admin.dashboard');
			case 'staff': return redirect()->route('staff.dashboard');
			case 'beneficiary': return redirect()->route('beneficiary.dashboard');
			default: return redirect()->route('home');
		}
	}
	return view('donor.profile');
})->name('donor.profile');

// Beneficiary
Route::get('/beneficiary/dashboard', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'beneficiary') {
		switch (Auth::user()->role) {
			case 'admin': return redirect()->route('admin.dashboard');
			case 'staff': return redirect()->route('staff.dashboard');
			case 'donor': return redirect()->route('donor.dashboard');
			default: return redirect()->route('home');
		}
	}
	return view('bene.dashboard');
})->name('beneficiary.dashboard');
Route::get('/beneficiary/profile', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'beneficiary') {
		switch (Auth::user()->role) {
			case 'admin': return redirect()->route('admin.dashboard');
			case 'staff': return redirect()->route('staff.dashboard');
			case 'donor': return redirect()->route('donor.dashboard');
			default: return redirect()->route('home');
		}
	}
	return view('bene.profile');
})->name('beneficiary.profile');
Route::get('/beneficiary/request', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'beneficiary') {
		switch (Auth::user()->role) {
			case 'admin': return redirect()->route('admin.dashboard');
			case 'staff': return redirect()->route('staff.dashboard');
			case 'donor': return redirect()->route('donor.dashboard');
			default: return redirect()->route('home');
		}
	}
	return view('bene.request');
})->name('beneficiary.request');
Route::get('/beneficiary/letter', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'beneficiary') {
		switch (Auth::user()->role) {
			case 'admin': return redirect()->route('admin.dashboard');
			case 'staff': return redirect()->route('staff.dashboard');
			case 'donor': return redirect()->route('donor.dashboard');
			default: return redirect()->route('home');
		}
	}
	return view('bene.letter');
})->name('beneficiary.letter');

// Admin
Route::get('/admin/dashboard', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'admin') {
		switch (Auth::user()->role) {
			case 'staff': return redirect()->route('staff.dashboard');
			case 'beneficiary': return redirect()->route('beneficiary.dashboard');
			case 'donor': return redirect()->route('donor.dashboard');
			default: return redirect()->route('home');
		}
	}
	return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/admin/manage-requests', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'admin') return redirect()->route(Auth::user()->role . '.dashboard');
	return view('admin.manage_requests');
})->name('admin.manage_requests');
Route::get('/admin/money-inventory', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'admin') return redirect()->route(Auth::user()->role . '.dashboard');
	return view('admin.money_inventory');
})->name('admin.money_inventory');
Route::get('/admin/goods-inventory', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'admin') return redirect()->route(Auth::user()->role . '.dashboard');
	return view('admin.goods_inventory');
})->name('admin.goods_inventory');
Route::get('/admin/manage-accounts', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'admin') return redirect()->route(Auth::user()->role . '.dashboard');
	return view('admin.manage_accounts');
})->name('admin.manage_accounts');

// Staff
Route::get('/staff/dashboard', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'staff') return redirect()->route(Auth::user()->role . '.dashboard');
	return view('staff.dashboard');
})->name('staff.dashboard');
Route::get('/staff/profile', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'staff') return redirect()->route(Auth::user()->role . '.dashboard');
	return view('staff.profile');
})->name('staff.profile');
Route::get('/staff/schedules', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'staff') return redirect()->route(Auth::user()->role . '.dashboard');
	return view('staff.schedules');
})->name('staff.schedules');
Route::get('/staff/view-details', function() {
	if (!Auth::check()) return redirect()->route('login');
	if (Auth::user()->role !== 'staff') return redirect()->route(Auth::user()->role . '.dashboard');
	return view('staff.view_details');
})->name('staff.view_details');

//Create
Route::resource('user', UserController::class);
