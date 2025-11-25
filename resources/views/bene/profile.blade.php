@extends('layouts.beneficiary')

<link rel="stylesheet" href="{{asset('css/bene_profile.css')}}">

@section('title', 'Beneficiary Profile')

@section('content')
  <!-- Main content -->
  <main class="container-custom" role="main">

    <!-- Profile header -->
    <section class="heading profile-header" aria-label="User profile information">
      <div role="img" aria-label="Profile photo placeholder for Elena Petrova" class="profile-photo-placeholder" tabindex="0">EP</div>
      <h2 class="profile-name" tabindex="0">Elena Petrova</h2>
      <div class="profile-email" tabindex="0">elena.petrova@example.com</div>
    </section>

    <!-- Personal Information Card -->
    <section class="card-custom" aria-labelledby="personalInfoTitle">
      <h5 id="personalInfoTitle">Personal Information</h5>
      <small>Update your personal details and contact information.</small>
      <form>
        <div class="form-row">
          <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" value="Elena Petrova" />
          </div>
          <div class="form-group">
            <label for="emailAddress">Email Address</label>
            <input type="email" id="emailAddress" name="emailAddress" value="elena.petrova@example.com" />
          </div>
          <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" value="+1 555-123-4567" />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="nationalId">National ID</label>
            <input type="text" id="nationalId" name="nationalId" value="BG-87654321" />
          </div>
          <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" value="1990-03-15" />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group full-width">
            <label for="residentialAddress">Residential Address</label>
            <textarea id="residentialAddress" name="residentialAddress">123 Cherry Lane, Sofia, 1000, Bulgaria</textarea>
          </div>
        </div>
      </form>
    </section>

    <!-- Password Management Card -->
    <section class="card-custom" aria-labelledby="passwordMgmtTitle">
      <h5 id="passwordMgmtTitle">Password Management</h5>
      <small>Change your password to keep your account secure.</small>
      <form>
        <div class="form-row">
          <div class="form-group">
            <label for="currentPassword">Current Password</label>
            <input type="password" id="currentPassword" name="currentPassword" placeholder="Enter current password" />
          </div>
          <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" id="newPassword" name="newPassword" placeholder="Enter new password" />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group full-width">
            <label for="confirmNewPassword">Confirm New Password</label>
            <input type="password" id="confirmNewPassword" name="confirmNewPassword" placeholder="Confirm new password" />
          </div>
        </div>
      </form>
    </section>

  </main>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
