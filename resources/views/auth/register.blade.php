@extends('layouts.auth')

<link rel="stylesheet" href="{{asset('css/register.css')}}">

@section('title', 'Register')

@section('content')
  <div class="register-container">
    <!-- Form Section -->
    <div class="register-form">
      <h5 class="fw-bold mb-1">Create Your CSWD Account</h5>
      <small class="form-text-muted d-block mb-3">Join us to make a difference or receive assistance.</small>

      <form method="POST" action="{{route('user.store')}}">
        @csrf
        <div class="mb-3">
          <label for="fullname" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="name" value="{{ old('name') }}" placeholder="John Doe" />
          @error('name')
            <div class="text-danger small">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="john.doe@example.com" />
          @error('email')
            <div class="text-danger small">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Mobile Number</label>
          <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="09171234567" pattern="^\d{10,11}$" />
          @error('phone')
            <div class="text-danger small">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="123 Main St, City, Barangay" />
          @error('address')
            <div class="text-danger small">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" />
          @error('password')
            <div class="text-danger small">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="confirmpassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmpassword" name="password_confirmation" placeholder="Confirm your password" />
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

        <button type="submit" class="bg-success text-white btn btn-create w-100 mb-3">Create Account</button>

        <small class="d-block text-center text-muted">Already have an account? <a href="{{route('login')}}">Login</a></small>
      </form>
    </div>

    <!-- Logo Section -->
    <div class="logo-section">
      <!-- SVG based on the image you provided -->
      <img class="img" src="{{asset('images/DSWD-Logo.png')}}" alt="LOGO">
      <div class="logo-text">CSWD</div>
    </div>
  </div>
@endsection
