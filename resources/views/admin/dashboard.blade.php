@extends('layouts.main')

<link rel="stylesheet" href="{{asset('css/admin_dashboard.css')}}">

@section('title', 'Admin Dashboard')

@section('content')
  <main class="container py-4 py-lg-5">
    <h2 class="heading fw-bold mb-4">Admin Dashboard</h2>

    <!-- Stats summary -->
    <div class="row g-3 mb-5">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card p-3">
          <div class="d-flex justify-content-between mb-2 align-items-center">
            <span class="fw-semibold">Pending Requests</span>
            <img src="https://i.imgur.com/s0WY0Cu.png" alt="Pending Icon" width="20" height="20" />
          </div>
          <div class="stat-number">12</div>
          <div class="small-label">Requests awaiting review</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card p-3">
          <div class="d-flex justify-content-between mb-2 align-items-center">
            <span class="fw-semibold">Total Donors</span>
            <img src="https://i.imgur.com/s0WY0Cu.png" alt="Donors Icon" width="20" height="20" />
          </div>
          <div class="stat-number">1,245</div>
          <div class="small-label">Registered active donors</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card p-3">
          <div class="d-flex justify-content-between mb-2 align-items-center">
            <span class="fw-semibold">Active Events</span>
            <img src="https://i.imgur.com/s0WY0Cu.png" alt="Events Icon" width="20" height="20" />
          </div>
          <div class="stat-number">3</div>
          <div class="small-label">Ongoing donation campaigns</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card p-3">
          <div class="d-flex justify-content-between mb-2 align-items-center">
            <span class="fw-semibold">Assistance Disbursed</span>
            <img src="https://i.imgur.com/s0WY0Cu.png" alt="Assistance Icon" width="20" height="20" />
          </div>
          <div class="stat-number">$15,320</div>
          <div class="small-label">This month's financial aid</div>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <!-- Beneficiary Requests Table -->
      <div class="col-12 col-lg-8">
        <div class="card p-4 overflow-auto">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Beneficiary Requests</h5>
            <button type="button" class="btn btn-outline-secondary btn-sm">View All &rarr;</button>
          </div>
          <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0 table-responsive-min">
              <thead>
                <tr class="text-muted">
                  <th scope="col">Request ID</th>
                  <th scope="col">Beneficiary</th>
                  <th scope="col">Date</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>REQ001</td>
                  <td>Maria S.</td>
                  <td>2023-10-26</td>
                  <td>₱500</td>
                  <td><span class="badge-status status-pending">Pending</span></td>
                  <td><button class="btn btn-link btn-sm p-0 text-decoration-none">Manage</button></td>
                </tr>
                <tr>
                  <td>REQ002</td>
                  <td>Juan D.</td>
                  <td>2023-10-25</td>
                  <td>₱300</td>
                  <td><span class="badge-status status-approved">Approved</span></td>
                  <td><button class="btn btn-link btn-sm p-0 text-decoration-none">Manage</button></td>
                </tr>
                <tr>
                  <td>REQ003</td>
                  <td>Elena R.</td>
                  <td>2023-10-24</td>
                  <td>₱750</td>
                  <td><span class="badge-status status-processing">Processing</span></td>
                  <td><button class="btn btn-link btn-sm p-0 text-decoration-none">Manage</button></td>
                </tr>
                <tr>
                  <td>REQ004</td>
                  <td>Robert S.</td>
                  <td>2023-10-23</td>
                  <td>₱200</td>
                  <td><span class="badge-status status-rejected">Rejected</span></td>
                  <td><button class="btn btn-link btn-sm p-0 text-decoration-none">Manage</button></td>
                </tr>
                <tr>
                  <td>REQ005</td>
                  <td>Anna L.</td>
                  <td>2023-10-22</td>
                  <td>₱400</td>
                  <td><span class="badge-status status-pending">Pending</span></td>
                  <td><button class="btn btn-link btn-sm p-0 text-decoration-none">Manage</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Donation Events Card -->
      <div class="col-12 col-lg-4">
        <div class="card p-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Donation Events</h5>
            <button type="button" class="btn btn-success btn-sm d-flex align-items-center gap-1">
              <img src="https://i.imgur.com/s0WY0Cu.png" alt="plus icon" width="16" height="16" />
              Add Event
            </button>
          </div>
          <ul class="list-unstyled mb-0 small">
            <li class="mb-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <strong>Winter Clothing Drive</strong><br />
                  <small class="text-muted">Dec 1 - Dec 15, 2023</small>
                </div>
                <span class="badge-event event-upcoming">Upcoming</span>
              </div>
            </li>
            <li class="mb-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <strong>Back-to-School Supplies</strong><br />
                  <small class="text-muted">Aug 10 - Aug 25, 2023</small>
                </div>
                <span class="badge-event event-completed">Completed</span>
              </div>
            </li>
            <li>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <strong>Medical Aid Campaign</strong><br />
                  <small class="text-muted">Nov 1 - Nov 30, 2023</small>
                </div>
                <span class="badge-event event-ongoing">Ongoing</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row g-4 mt-3">
      <!-- User Accounts Overview -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card p-4 h-100">
          <h5 class="mb-3">User Accounts Overview</h5>
          <p class="small text-muted mb-4">Distribution of users by role</p>
          <ul class="list-unstyled">
            <li class="d-flex justify-content-between align-items-center mb-2">
              <span>Donors</span>
              <span class="user-badge badge-donors">1050</span>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
              <span>Beneficiaries</span>
              <span class="user-badge badge-beneficiaries">180</span>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
              <span>Staff</span>
              <span class="user-badge badge-staff">12</span>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-3">
              <span>Admins</span>
              <span class="user-badge badge-admins">3</span>
            </li>
          </ul>
          <button class="btn btn-outline-primary w-100" type="button">Manage All Users &rarr;</button>
        </div>
      </div>

      <!-- Reports & Analytics -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card p-4 h-100">
          <h5 class="mb-3">Reports &amp; Analytics</h5>
          <p class="small text-muted mb-4">Quick access to key reports</p>
          <div class="row g-3">
            <div class="col-6">
              <button class="report-btn" type="button" tabindex="0">
                <img src="https://i.imgur.com/s0WY0Cu.png" alt="donation icon" class="report-icon mx-auto" width="28"
                  height="28" />
                Donation Reports
              </button>
            </div>
            <div class="col-6">
              <button class="report-btn" type="button" tabindex="0">
                <img src="https://i.imgur.com/s0WY0Cu.png" alt="beneficiary icon" class="report-icon mx-auto" width="28"
                  height="28" />
                Beneficiary Reports
              </button>
            </div>
            <div class="col-6">
              <button class="report-btn" type="button" tabindex="0">
                <img src="https://i.imgur.com/s0WY0Cu.png" alt="inventory icon" class="report-icon mx-auto" width="28"
                  height="28" />
                Inventory Reports
              </button>
            </div>
            <div class="col-6">
              <button class="report-btn" type="button" tabindex="0">
                <img src="https://i.imgur.com/s0WY0Cu.png" alt="system logs icon" class="report-icon mx-auto" width="28"
                  height="28" />
                System Logs
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
