<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/donor/dashboard', function() {return view('donor.dashboard');})->name('donor.dashboard');
Route::get('/donor/profile', function() {return view('donor.profile');})->name('donor.profile');

// Beneficiary
Route::get('/beneficiary/dashboard', function() {return view('bene.dashboard');})->name('beneficiary.dashboard');
Route::get('/beneficiary/profile', function() {return view('bene.profile');})->name('beneficiary.profile');
Route::get('/beneficiary/request', function() {return view('bene.request');})->name('beneficiary.request');
Route::get('/beneficiary/letter', function() {return view('bene.letter');})->name('beneficiary.letter');

// Admin
Route::get('/admin/dashboard', function() {return view('admin.dashboard');})->name('admin.dashboard');
Route::get('/admin/manage-requests', function() {return view('admin.manage_requests');})->name('admin.manage_requests');
Route::get('/admin/money-inventory', function() {return view('admin.money_inventory');})->name('admin.money_inventory');
Route::get('/admin/goods-inventory', function() {return view('admin.goods_inventory');})->name('admin.goods_inventory');
Route::get('/admin/manage-accounts', function() {return view('admin.manage_accounts');})->name('admin.manage_accounts');

// Staff
Route::get('/staff/dashboard', function() {return view('staff.dashboard');})->name('staff.dashboard');
Route::get('/staff/profile', function() {return view('staff.profile');})->name('staff.profile');
Route::get('/staff/schedules', function() {return view('staff.schedules');})->name('staff.schedules');
Route::get('/staff/view-details', function() {return view('staff.view_details');})->name('staff.view_details');

//Create
Route::resource('user', UserController::class);
