
@extends('layouts.auth')

<link rel="stylesheet" href="{{asset('css/login.css')}}">

@section('title', 'Login')

@section('content')
  <div class="login-container">
    <div class="login-wrapper">
      <!-- Login Form -->
      <div class="login-form-container">
        <h2>LOG IN</h2>
        <form>
          <div class="mb-3 position-relative">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="john.doe@example.com" required />
            <!-- User icon -->
            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z"/>
            </svg>
          </div>
          <div class="mb-3 position-relative">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" required />
            <!-- Lock icon -->
            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 1a4 4 0 00-4 4v2H3a1 1 0 00-1 1v5a1 1 0 001 1h10a1 1 0 001-1v-5a1 1 0 00-1-1h-1V5a4 4 0 00-4-4zm2 6V5a2 2 0 10-4 0v2h4z"/>
            </svg>
          </div>
          <button type="submit" class="btn btn-login mb-2">Log In</button>
          <div class="forgot-pass">
            <a href="#">Forget password</a>
          </div>
        </form>
      </div>

      <!-- Logo -->
      <div class="logo-container">
        <svg class="logo-svg" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" >
          <rect x="2" y="2" width="60" height="60" rx="8" ry="8" stroke="#f9c51e" stroke-width="4" fill="none" />
          <path d="M20 25v26l12 7 12-7V25l-6-4v3l-6 5-6-5v-3z" fill="#011f92" />
          <path d="M32 20 38 15h20v20l-15 15H27L12 35V15h20z" fill="#f00" />
        </svg>
        <div>CSWD</div>
      </div>
    </div>
  </div>
@endsection
