@extends('layouts.auth')

<link rel="stylesheet" href="{{asset('css/register.css')}}">

@section('title', 'Register')

@section('content')
  <div class="register-container">
    <!-- Form Section -->
    <div class="register-form">
      <h5 class="fw-bold mb-1">Create Your CSWD Account</h5>
      <small class="form-text-muted d-block mb-3">Join us to make a difference or receive assistance.</small>

      <form>
        <div class="mb-3">
          <label for="fullname" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullname" placeholder="John Doe" />
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="john.doe@example.com" />
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password" />
        </div>

        <div class="mb-3">
          <label for="confirmpassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm your password" />
        </div>

        <div class="mb-3">
          <label class="form-label d-block mb-2">Select Your Role</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role" id="roleDonor" value="donor" checked />
            <label class="form-check-label" for="roleDonor">Donor</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role" id="roleBeneficiary" value="beneficiary" />
            <label class="form-check-label" for="roleBeneficiary">Beneficiary</label>
          </div>
        </div>

        <button type="submit" class="btn btn-create w-100 text-white mb-3">Create Account</button>

        <small class="d-block text-center text-muted">Already have an account? <a href="#">Login</a></small>
      </form>
    </div>

    <!-- Logo Section -->
    <div class="logo-section">
      <!-- SVG based on the image you provided -->
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" >
        <rect x="6" y="6" width="88" height="88" rx="12" ry="12" stroke="#f9c51e" stroke-width="5" fill="none" />
        <path d="M31 38 v37 l19 11 19-11 v-37 l-9-6v5 l-10 8-10-8v-5z" fill="#011f92" />
        <path d="M50 30 58 23h24v26l-18 18h-16l-18-18v-26h24z" fill="#f00" />
      </svg>
      <div class="logo-text">CSWD</div>
    </div>
  </div>
@endsection
