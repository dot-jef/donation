@extends('layouts.main')

<link rel="stylesheet" href="{{asset('css/staff_dashboard.css')}}">

@section('title', 'Staff Dashboard')

@section('content')
  <!-- Main content -->
  <main class="container py-4 py-lg-5">
    <!-- Welcome and stats -->
    <section class="heading welcome-card" aria-label="Welcome section">
      <h3>Welcome, Staff Member!</h3>
      <p>
        Efficiently manage assistance requests, monitor inventory, and generate crucial reports to support our
        community's needs.
      </p>

      <div class="stats-cards" role="region" aria-label="Dashboard statistics summary">
        <div class="stat-card" role="group" aria-label="Requests Pending">
          <div class="stat-info" title="Requests Pending">Requests Pending</div>
          <div class="d-flex align-items-center">
            <div class="stat-value" aria-live="polite" aria-atomic="true">12</div>
            <img src="https://i.imgur.com/s0WY0Cu.png" alt="Icon representing requests" class="stat-icon" />
          </div>
        </div>
        <div class="stat-card" role="group" aria-label="Items In Stock">
          <div class="stat-info" title="Items In Stock">Items In Stock</div>
          <div class="d-flex align-items-center">
            <div class="stat-value" aria-live="polite" aria-atomic="true">535</div>
            <img src="https://i.imgur.com/s0WY0Cu.png" alt="Icon representing inventory" class="stat-icon" />
          </div>
        </div>
        <div class="stat-card" role="group" aria-label="Requests Generated Today">
          <div class="stat-info" title="Requests Generated Today">Requests Generated Today</div>
          <div class="d-flex align-items-center">
            <div class="stat-value" aria-live="polite" aria-atomic="true">3</div>
            <img src="https://i.imgur.com/s0WY0Cu.png" alt="Icon representing recent activity" class="stat-icon" />
          </div>
        </div>
      </div>
    </section>

    <!-- Recent Assistance Requests Table -->
    <section class="table-container" aria-labelledby="recent-requests-label">
      <div id="recent-requests-label" class="table-caption">Recent Assistance Requests</div>
      <table role="table" aria-describedby="recent-requests-label" aria-live="polite" aria-relevant="additions">
        <thead>
          <tr>
            <th scope="col">Request ID</th>
            <th scope="col">Beneficiary</th>
            <th scope="col">Date Submitted</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>REQ001</td>
            <td>Maria S.</td>
            <td>2024-07-20</td>
            <td>₱500</td>
            <td><span class="badge-status status-pending">Pending</span></td>
            <td>
              <button type="button" class="table-action-btn view-btn" aria-label="View assistance request REQ001">
                View
              </button>
              <button type="button" class="table-action-btn update-btn" aria-label="Update status for REQ001">
                Update Status
              </button>
            </td>
          </tr>
          <tr>
            <td>REQ002</td>
            <td>Juan D.</td>
            <td>2024-07-19</td>
            <td>₱300</td>
            <td><span class="badge-status status-approved">Approved</span></td>
            <td>
              <button type="button" class="table-action-btn view-btn" aria-label="View assistance request REQ002">
                View
              </button>
              <button type="button" class="table-action-btn update-btn" aria-label="Update status for REQ002">
                Update Status
              </button>
            </td>
          </tr>
          <tr>
            <td>REQ003</td>
            <td>Emily C.</td>
            <td>2024-07-18</td>
            <td>₱750</td>
            <td><span class="badge-status status-processed">Processed</span></td>
            <td>
              <button type="button" class="table-action-btn view-btn" aria-label="View assistance request REQ003">
                View
              </button>
              <button type="button" class="table-action-btn update-btn" aria-label="Update status for REQ003">
                Update Status
              </button>
            </td>
          </tr>
          <tr>
            <td>REQ004</td>
            <td>Robert L.</td>
            <td>2024-07-17</td>
            <td>₱400</td>
            <td><span class="badge-status status-rejected">Rejected</span></td>
            <td>
              <button type="button" class="table-action-btn view-btn" aria-label="View assistance request REQ004">
                View
              </button>
              <button type="button" class="table-action-btn update-btn" aria-label="Update status for REQ004">
                Update Status
              </button>
            </td>
          </tr>
          <tr>
            <td>REQ005</td>
            <td>Alice B.</td>
            <td>2024-07-16</td>
            <td>₱500</td>
            <td><span class="badge-status status-pending">Pending</span></td>
            <td>
              <button type="button" class="table-action-btn view-btn" aria-label="View assistance request REQ005">
                View
              </button>
              <button type="button" class="table-action-btn update-btn" aria-label="Update status for REQ005">
                Update Status
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- Current Donation Inventory -->
    <section class="donation-inventory-container" aria-labelledby="donation-inventory-label">
      <h4 id="donation-inventory-label" class="mb-3">Current Donation Inventory</h4>
      <div class="table-responsive">
        <table class="donation-inventory-table" role="table" aria-describedby="donation-inventory-label">
          <thead>
            <tr>
              <th scope="col">Item</th>
              <th scope="col">Category</th>
              <th scope="col">Quantity</th>
              <th scope="col">Last Updated</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Canned Goods</td>
              <td>Food</td>
              <td>150</td>
              <td>2024-07-20</td>
              <td class="donation-inventory-actions">
                <button type="button" aria-label="Edit Canned Goods">Edit</button>
                <button type="button" aria-label="Details of Canned Goods">Details</button>
              </td>
            </tr>
            <tr>
              <td>Children's Clothes</td>
              <td>Apparel</td>
              <td>80</td>
              <td>2024-07-19</td>
              <td class="donation-inventory-actions">
                <button type="button" aria-label="Edit Children's Clothes">Edit</button>
                <button type="button" aria-label="Details of Children's Clothes">Details</button>
              </td>
            </tr>
            <tr>
              <td>School Supplies</td>
              <td>Education</td>
              <td>200</td>
              <td>2024-07-18</td>
              <td class="donation-inventory-actions">
                <button type="button" aria-label="Edit School Supplies">Edit</button>
                <button type="button" aria-label="Details of School Supplies">Details</button>
              </td>
            </tr>
            <tr>
              <td>Medicine Kits</td>
              <td>Medical</td>
              <td>42</td>
              <td>2024-07-15</td>
              <td class="donation-inventory-actions">
                <button type="button" aria-label="Edit Medicine Kits">Edit</button>
                <button type="button" aria-label="Details of Medicine Kits">Details</button>
              </td>
            </tr>
            <tr>
              <td>Blankets</td>
              <td>Shelter</td>
              <td>60</td>
              <td>2024-07-16</td>
              <td class="donation-inventory-actions">
                <button type="button" aria-label="Edit Blankets">Edit</button>
                <button type="button" aria-label="Details of Blankets">Details</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Generate Reports -->
    <section class="generate-reports-container" aria-labelledby="generate-reports-label">
      <h4 id="generate-reports-label" class="generate-reports-heading">Generate Reports</h4>
      <div class="reports-grid">
        <div class="report-card" tabindex="0" role="region" aria-label="Donation Overview Report">
          <img src="https://i.imgur.com/s0WY0Cu.png" alt="Donation icon" class="report-icon" />
          <div class="report-title">Donation Overview</div>
          <div class="report-desc">
            Comprehensive summary of all monetary and goods donations received over a specified period.
          </div>
          <button class="btn-generate" type="button" aria-label="Generate Donation Overview Report">
            Generate Report
          </button>
        </div>
        <div class="report-card" tabindex="0" role="region" aria-label="Beneficiary Assistance Report">
          <img src="https://i.imgur.com/s0WY0Cu.png" alt="Beneficiary assistance icon" class="report-icon" />
          <div class="report-title">Beneficiary Assistance Report</div>
          <div class="report-desc">
            Detailed report on cash assistance requests, including status, amounts, and beneficiary demographics.
          </div>
          <button class="btn-generate" type="button" aria-label="Generate Beneficiary Assistance Report">
            Generate Report
          </button>
        </div>
        <div class="report-card" tabindex="0" role="region" aria-label="Inventory Level Report">
          <img src="https://i.imgur.com/s0WY0Cu.png" alt="Inventory report icon" class="report-icon" />
          <div class="report-title">Inventory Level Report</div>
          <div class="report-desc">
            An overview of current stock levels, identifying fast-moving or low-stock items for replenishment.
          </div>
          <button class="btn-generate" type="button" aria-label="Generate Inventory Level Report">
            Generate Report
          </button>
        </div>
        <div class="report-card" tabindex="0" role="region" aria-label="Staff Activity Log">
          <img src="https://i.imgur.com/s0WY0Cu.png" alt="Staff activity icon" class="report-icon" />
          <div class="report-title">Staff Activity Log</div>
          <div class="report-desc">
            Track staff actions and updates within the system for audit and performance reviews.
          </div>
          <button class="btn-generate" type="button" aria-label="Generate Staff Activity Log">
            Generate Report
          </button>
        </div>
      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

