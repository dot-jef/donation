@extends('layouts.main')

<link rel="stylesheet" href="{{asset('css/bene_dashboard.css')}}">

@section('title', 'Beneficiary Dashboard')

@section('content')
  <!-- Main Content -->
  <main class="content-container">
    <!-- Submit Assistance Request -->
    <section class="heading card-custom" aria-labelledby="newRequestHeading">
      <h5 id="newRequestHeading" class="mb-3 fw-semibold" style="color: #3b803b;">Submit a New Assistance Request</h5>
      <form id="assistanceRequestForm" novalidate>
        <div class="mb-3">
          <label for="amountRequested" class="form-label">Amount Requested (PHP)</label>
          <input type="number" class="form-control" id="amountRequested" placeholder="Enter amount e.g. 1500" min="0" step="0.01" required aria-describedby="amountHelp" />
          <div id="amountHelp" class="form-text small text-muted">Please input the amount requested (PHP).</div>
        </div>

        <div class="mb-3">
          <label for="purposeRequest" class="form-label">Purpose of Request</label>
          <input type="text" class="form-control" id="purposeRequest" placeholder="E.g. Medical expenses, Food assistance" required />
        </div>

        <div class="mb-3">
          <label for="detailedJustification" class="form-label">Detailed Justification</label>
          <textarea class="form-control" id="detailedJustification" placeholder="Describe why you need this assistance..." required></textarea>
        </div>

        <button type="submit" class="btn-submit-request" aria-label="Submit assistance request">Submit Request</button>
      </form>
    </section>

    <!-- My Request Status -->
    <section class="card-custom" aria-labelledby="requestStatusHeading">
      <h5 id="requestStatusHeading" class="mb-3 fw-semibold" style="color: #3b803b;">My Request Status</h5>
      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr>
              <th scope="col">Request ID</th>
              <th scope="col">Date</th>
              <th scope="col">Amount</th>
              <th scope="col">Purpose</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>REQ001</td>
              <td>2024-01-20</td>
              <td>PHP 3,000</td>
              <td>Medical Expenses</td>
              <td><span class="badge-status badge-approved">Approved</span></td>
            </tr>
            <tr>
              <td>REQ002</td>
              <td>2024-02-10</td>
              <td>PHP 1,500</td>
              <td>Food Assistance</td>
              <td><span class="badge-status badge-pending">Pending</span></td>
            </tr>
            <tr>
              <td>REQ003</td>
              <td>2024-02-25</td>
              <td>PHP 3,500</td>
              <td>Educational Fees</td>
              <td><span class="badge-status badge-rejected">Rejected</span></td>
            </tr>
            <tr>
              <td>REQ004</td>
              <td>2024-03-06</td>
              <td>PHP 2,400</td>
              <td>Utility Bills</td>
              <td><span class="badge-status badge-processed">Processed</span></td>
            </tr>
            <tr>
              <td>REQ005</td>
              <td>2024-03-18</td>
              <td>PHP 4,000</td>
              <td>Rent Payment</td>
              <td><span class="badge-status badge-pending">Pending</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Notifications -->
    <section class="card-custom" aria-labelledby="notificationsHeading">
      <h5 id="notificationsHeading" class="mb-3 fw-semibold" style="color: #3b803b;">Notifications</h5>
      <ul class="notification-list" aria-live="polite" aria-atomic="true">
        <li>Your request REQ001 for PHP 3,000 has been approved (2 minutes ago).</li>
        <li>Request REQ002 for Food Assistance is currently under review (1 day ago).</li>
        <li>New policy update regarding assistance requests (3 days ago).</li>
      </ul>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('js/bene_dashboard.js')}}"></script>
@endsection
