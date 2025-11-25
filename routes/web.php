<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {return view('home');});

// Auth
Route::get('/register', function() {return view('auth.register');})->name('register');
Route::get('/login', function() {return view('auth.login');})->name('login');

// Donor
Route::get('/donor/dashboard', function() {return view('donor.dashboard');});
Route::get('/donor/profile', function() {return view('donor.profile');});

// Beneficiary
Route::get('/beneficiary/dashboard', function() {return view('bene.dashboard');});
Route::get('/beneficiary/profile', function() {return view('bene.profile');});
Route::get('/beneficiary/request', function() {return view('bene.request');});
Route::get('/beneficiary/letter', function() {return view('bene.letter');});

// Admin
Route::get('/admin/dashboard', function() {return view('admin.dashboard');});
Route::get('/admin/manage-requests', function() {return view('admin.manage_requests');});
Route::get('/admin/money-inventory', function() {return view('admin.money_inventory');});
Route::get('/admin/goods-inventory', function() {return view('admin.goods_inventory');});
Route::get('/admin/manage-accounts', function() {return view('admin.manage_accounts');});

// Staff
Route::get('/staff/dashboard', function() {return view('staff.dashboard');});
Route::get('/staff/profile', function() {return view('staff.profile');});
Route::get('/staff/schedules', function() {return view('staff.schedules');});
// Route::get('/staff/view-details', function() {return view('staff.view_details');});

