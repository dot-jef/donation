
@extends('layouts.auth')

<link rel="stylesheet" href="{{asset('css/login.css')}}">

@section('title', 'Login')

@section('content')
  <div class="login-container">
    <div class="login-wrapper">
      <!-- Login Form -->
      <div class="login-form-container">
        <h2>LOG IN</h2>
        <form method="POST" action="{{ route('login.post') }}">
          @csrf
          <div class="mb-3 position-relative">
            <label for="login" class="form-label">Email or Mobile Number:</label>
            <input type="text" class="form-control" id="login" name="login" value="{{ old('login') }}" placeholder="john.doe@example.com or 09171234567" required />
            @error('login')
              <div class="text-danger small">{{ $message }}</div>
            @enderror
            <!-- User icon -->
            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z"/>
            </svg>
          </div>
          <div class="mb-3 position-relative">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required />
            @error('password')
              <div class="text-danger small">{{ $message }}</div>
            @enderror
            <!-- Lock icon -->
            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 1a4 4 0 00-4 4v2H3a1 1 0 00-1 1v5a1 1 0 001 1h10a1 1 0 001-1v-5a1 1 0 00-1-1h-1V5a4 4 0 00-4-4zm2 6V5a2 2 0 10-4 0v2h4z"/>
            </svg>
          </div>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn btn-login mb-0">Log In</button>
          </div>
          <div class="forgot-pass">
            <a href="#">Forget password</a>
          </div>
        </form>
      </div>

      <!-- Logo -->
      <div class="logo-container">
        <img class="img" src="{{asset('images/DSWD-Logo.png')}}" alt="LOGO">
        <div>CSWD</div>
      </div>
    </div>
  </div>
@endsection
