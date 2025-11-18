@extends('layouts.main')

<link rel="stylesheet" href="{{asset('css/donor_profile.css')}}">

@section('title', 'Donor Profile')

@section('content')

  <!-- Main -->
  <main class="container" role="main">
    <h1>Donor Profile Settings</h1>

    <section class="heading profile-photo-section" aria-label="Profile photo and name">
      <div role="img" aria-label="Profile photo placeholder for Jane Doe" class="profile-photo-placeholder" tabindex="0">JD</div>
      <div class="profile-name" tabindex="0">Jane Doe</div>
      <button type="button" class="btn-upload-photo" aria-label="Upload photo">Upload Photo</button>
    </section>

    <section class="card" aria-labelledby="personalInfoHeading">
      <h5 id="personalInfoHeading">Personal Information</h5>
      <small class="description">Update your contact and personal details.</small>
      <form>
        <div class="form-row">
          <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" value="Jane" />
          </div>
          <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" value="Doe" />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="jane.doe@example.com" />
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" value="+1 (555) 123-4567" />
          </div>
        </div>
        <div class="form-group full-width">
          <label for="address">Street Address</label>
          <input type="text" id="address" name="address" value="123 Charity Lane" />
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" value="Givinggan" />
          </div>
          <div class="form-group">
            <label for="state">State/Province</label>
            <input type="text" id="state" name="state" value="CA" />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="postalcode">Postal Code</label>
            <input type="text" id="postalcode" name="postalcode" value="90210" />
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" value="United States" />
          </div>
        </div>
      </form>
    </section>

    <section class="card" aria-labelledby="passwordManagementHeading">
      <h5 id="passwordManagementHeading">Password Management</h5>
      <small class="description">Change your password regularly for security.</small>
      <form>
        <div class="form-row">
          <div class="form-group">
            <label for="currentPassword">Current Password</label>
            <input type="password" id="currentPassword" name="currentPassword" />
          </div>
          <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" id="newPassword" name="newPassword" />
          </div>
        </div>
        <div class="form-group full-width">
          <label for="confirmPassword">Confirm New Password</label>
          <input type="password" id="confirmPassword" name="confirmPassword" />
        </div>
      </form>
    </section>

    <section class="card" aria-labelledby="notificationPreferencesHeading">
      <h5 id="notificationPreferencesHeading">Notification Preferences</h5>
      <small class="description">Manage how you receive updates and alerts.</small>
      <form class="notification-prefs">
        <fieldset>
          <legend>Email Notifications</legend>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="donationConfirmations" id="donationConfirmations" checked />
            <label class="form-check-label" for="donationConfirmations">
              Donation Confirmations: Receive confirmations for your donations.
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="campaignUpdates" id="campaignUpdates" checked />
            <label class="form-check-label" for="campaignUpdates">
              Campaign Updates: Get news on the impact of your contributions.
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="newsletters" id="newsletters" />
            <label class="form-check-label" for="newsletters">
              Newsletters: Subscribe to our monthly newsletter for stories and events.
            </label>
          </div>
        </fieldset>
        <fieldset>
          <legend>SMS Notifications</legend>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="urgentAlerts" id="urgentAlerts" />
            <label class="form-check-label" for="urgentAlerts">
              Urgent Alerts: Receive critical updates and emergencies via SMS.
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="reminders" id="reminders" />
            <label class="form-check-label" for="reminders">
              Reminders: Get friendly reminders for upcoming events or actions.
            </label>
          </div>
        </fieldset>
      </form>
    </section>
  </main>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @endsection
