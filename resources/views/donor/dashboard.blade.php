@extends('layouts.donor')

<link rel="stylesheet" href="{{asset('css/donor_dashboard.css')}}">

@section('title', 'Donor Dashboard')

@section('content')
  <!-- Main Content -->
  <main class="container-custom">

    <!-- Welcome Section -->
    <section class="welcome-card">
      <h2>Welcome Back, Maria Clara!</h2>
      <p>
        Thank you for your continued support to the CSWD Donation System. Your generosity empowers us to make a real difference in the community.
      </p>
      <button class="btn btn-report" type="button">View Impact Report</button>
    </section>

    <!-- Schedule, Image, and Pledge Section -->
    <section class="main-cards">

      <!-- Schedule In-Person Donation card -->
      <div class="schedule-card">
        <h5 class="text-success fw-bold mb-3">Schedule In-Person Donation</h5>
        <form id="scheduleForm" novalidate>
          <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" placeholder="John Doe" required>
          </div>
          <div class="mb-3">
            <label for="contactno" class="form-label">Contact No.</label>
            <input type="tel" class="form-control" id="contactno" placeholder="+63 918 5555 555" pattern="^\+63\s?\d{3}\s?\d{4}\s?\d{3}$" required>
          </div>
          <div class="mb-3">
            <label for="emailSchedule" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailSchedule" placeholder="john.doe@example.com" required>
          </div>
          <div class="mb-3">
            <label for="schedDate" class="form-label">Schedule Date</label>
            <input type="date" class="form-control" id="schedDate" required min="">
          </div>
          <div class="mb-3">
            <label for="progDonation" class="form-label">Program of Donation</label>
            <select class="form-select" id="progDonation" required>
              <option value="" selected disabled>Select a program</option>
              <option value="gift_distribution">Gift Distribution</option>
              <option value="emergency_assist">Emergency Assistance</option>
              <option value="education_support">Education Support</option>
              <option value="others">Others</option>
            </select>
          </div>
          <button class="schedule-btn" type="submit">Schedule Appointment</button>
        </form>
      </div>

      <!-- Image card center -->
      <div class="image-card" aria-label="Smiling donor woman holding donation box">
        <img src="https://images.unsplash.com/photo-1587502536263-936a4ce90984?auto=format&fit=crop&w=400&q=80" alt="Smiling woman holding donation box" loading="lazy" />
      </div>

      <!-- Pledge Goods card -->
      <div class="pledge-card">
        <h5 class="text-success fw-bold mb-3">Pledge Goods</h5>
        <form id="pledgeForm" novalidate>
          <div class="mb-3">
            <label for="itemType" class="form-label">Goods Type</label>
            <select class="form-select" id="itemType" required>
              <option value="" disabled selected>Select goods</option>
              <option value="school_supplies">School Supplies</option>
              <option value="medicines">Medicines</option>
              <option value="clothes">Clothes</option>
              <option value="food_items">Food Items</option>
              <option value="others">Others</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" min="1" placeholder="Enter quantity" required />
          </div>
          <div class="mb-3">
            <label for="remarks" class="form-label">Remarks (optional)</label>
            <input type="text" class="form-control" id="remarks" placeholder="Any additional info or notes" />
          </div>
          <button class="pledge-btn" type="submit">Pledge Goods</button>
        </form>
      </div>
    </section>

    <!-- Recent Donation Status Section -->
    <section class="recent-status-card" aria-label="Recent Donation Status">
      <h4>Recent Donation Status</h4>
      <ul class="status-list mb-0" role="list">
        <li>
          <span>Monetary: General Fund (10 persons)</span>
          <span class="badge badge-status badge-complete" aria-label="Complete status">Complete</span>
        </li>
        <li>
          <span>Goods: School Supplies</span>
          <span class="badge badge-status badge-pending" aria-label="Pending status">Pending</span>
        </li>
        <li>
          <span>Monetary: Disaster Relief (5 persons)</span>
          <span class="badge badge-status badge-pending" aria-label="Pending status">Pending</span>
        </li>
        <li>
          <span>Goods: Children’s Clothes</span>
          <span class="badge badge-status badge-complete" aria-label="Complete status">Complete</span>
        </li>
      </ul>
    </section>

    <!-- Donation History Section -->
    <section class="donation-history" aria-label="
    Donation History">
      <h4>Donation History</h4>
      <table class="table table-striped align-middle">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Purpose</th>
            <th scope="col">Type</th>
            <th scope="col">Value</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2024-01-05</td>
            <td>General Fund Contributions</td>
            <td>Monetary</td>
            <td>PHP 5000.00</td>
            <td><span class="badge badge-history-complete px-2 py-1 rounded">Complete</span></td>
          </tr>
          <tr>
            <td>2024-01-19</td>
            <td>School Supplies Donation</td>
            <td>Goods</td>
            <td>PHP 1400.00</td>
            <td><span class="badge badge-history-pending px-2 py-1 rounded">Processing</span></td>
          </tr>
          <tr>
            <td>2024-02-14</td>
            <td>Disaster Relief Fund</td>
            <td>Monetary</td>
            <td>PHP 2000.00</td>
            <td><span class="badge badge-history-pending px-2 py-1 rounded">Processing</span></td>
          </tr>
          <tr>
            <td>2024-03-03</td>
            <td>Children's Clothes Donation</td>
            <td>Goods</td>
            <td>PHP 1200.00</td>
            <td><span class="badge badge-history-complete px-2 py-1 rounded">Complete</span></td>
          </tr>
          <tr>
            <td>2024-03-30</td>
            <td>Education Support Program</td>
            <td>Monetary</td>
            <td>PHP 3000.00</td>
            <td><span class="badge badge-history-complete px-2 py-1 rounded">Complete</span></td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('js/donor_dashboard.js')}}"></script>
@endsection
