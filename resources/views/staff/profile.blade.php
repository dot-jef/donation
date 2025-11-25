@extends('layouts.staff')

<link rel="stylesheet" href="{{asset('css/staff_profile.css')}}">

@section('title', 'Staff Profile')

@section('content')
<main class="main-container">
    <h2 class="heading fw-bold text-dark mb-1">Staff Profile Settings</h2>
    <p class="text-muted mb-4">
      Manage your personal information, password, and notification preferences.
    </p>
    <hr />

    <!-- Personal Information Card -->
    <section class="card bg-white p-4 settings-card">
      <h5 class="fw-semibold mb-4">Personal Information</h5>
      <form>
        <div class="mb-3">
          <label for="fullName" class="form-label fw-semibold">Full Name</label>
          <input
            type="text"
            class="form-control"
            id="fullName"
            value="Jane Doe"
            aria-describedby="fullNameHelp"
          />
        </div>
        <div class="mb-3">
          <label for="employeeID" class="form-label fw-semibold">Employee ID</label>
          <input
            type="text"
            class="form-control"
            id="employeeID"
            value="CSWD-001"
            readonly
          />
        </div>
        <div class="mb-3">
          <label for="department" class="form-label fw-semibold">Department</label>
          <input
            type="text"
            class="form-control"
            id="department"
            value="Human Resources"
            readonly
          />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label fw-semibold">Email Address</label>
          <input
            type="email"
            class="form-control"
            id="email"
            value="jane.doe@cswd.org"
            readonly
          />
        </div>
        <div class="mb-3">
          <label for="phoneNumber" class="form-label fw-semibold">Phone Number</label>
          <input
            type="tel"
            class="form-control"
            id="phoneNumber"
            value="+1 (555) 123-4567"
          />
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </form>
    </section>

    <!-- Password Management Card -->
    <section class="card bg-white p-4 settings-card">
      <h5 class="fw-semibold mb-4">Password Management</h5>
      <form>
        <div class="mb-3">
          <label for="currentPassword" class="form-label fw-semibold"
            >Current Password</label
          >
          <input
            type="password"
            class="form-control"
            id="currentPassword"
            placeholder="Enter current password"
          />
        </div>
        <div class="mb-3">
          <label for="newPassword" class="form-label fw-semibold">New Password</label>
          <input
            type="password"
            class="form-control"
            id="newPassword"
            placeholder="Enter new password"
          />
        </div>
        <div class="mb-3">
          <label for="confirmNewPassword" class="form-label fw-semibold"
            >Confirm New Password</label
          >
          <input
            type="password"
            class="form-control"
            id="confirmNewPassword"
            placeholder="Confirm new password"
          />
        </div>
        <button type="submit" class="btn btn-primary">Update Password</button>
      </form>
    </section>

    <!-- Notification Preferences Card -->
    <section class="notification-card">
      <h5 class="fw-semibold mb-3">Notification Preferences</h5>
      <form>
        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" value="" id="emailNotif" checked />
          <label class="form-check-label" for="emailNotif">
            Receive email notifications for important updates.
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" value="" id="smsNotif" />
          <label class="form-check-label" for="smsNotif">
            Receive SMS notifications for critical alerts.
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" value="" id="appNotif" checked />
          <label class="form-check-label" for="appNotif">
            Receive in-app system messages.
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Save Preferences</button>
      </form>
    </section>
  </main>
  <!-- Bootstrap JS Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>
@endsection
