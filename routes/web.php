<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
});

// Auth
Route::get('/register', function() {
    return view('auth.register');
});
Route::get('/login', function() {
    return view('auth.login');
});

// Donor
Route::get('/donor/dashboard', function() {
    return view('donor.dashboard');
});
Route::get('/donor/profile', function() {
    return view('donor.profile');
});

// Admin
Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
});
Route::get('/admin/manage-request', function() {
    return view('admin.manage_request');
});
Route::get('/admin/money-inventory', function() {
    return view('admin.money_inventory');
});
Route::get('/admin/goods-inventory', function() {
    return view('admin.goods_inventory');
});

// Beneficiary
Route::get('/beneficiary/dashboard', function() {
    return view('bene.dashboard');
});
Route::get('/beneficiary/profile', function() {
    return view('bene.profile');
});
Route::get('/beneficiary/request', function() {
    return view('bene.request');
});

// Staff
Route::get('/staff/dashboard', function() {
    return view('staff.dashboard');
});


