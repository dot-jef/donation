@extends('layouts.nof')

<link rel="stylesheet" href="{{asset('css/admin_manage_request.css')}}">

@section('title', 'Manage Request')

@section('content')
  <!-- Main container -->
  <main class="container-custom" role="main">
    <!-- Title and Filters -->
    <section class="heading title-search-row" aria-label="Beneficiary Requests heading and filtering controls">
      <h2>Beneficiary Requests</h2>
      <input
        type="search"
        class="form-control search-input"
        aria-label="Search by name, type, or ID"
        placeholder="Search by name, type, or ID..."
      />
      <select
        class="form-select status-filter"
        aria-label="Filter requests by status"
      >
        <option value="all" selected>All Statuses</option>
        <option value="approved">Approved</option>
        <option value="pending">Pending</option>
        <option value="rejected">Rejected</option>
        <option value="inreview">In Review</option>
      </select>
    </section>

    <!-- Table -->
    <div class="table-responsive" role="region" aria-label="Beneficiary requests table">
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th scope="col">Request ID</th>
            <th scope="col">Beneficiary Name</th>
            <th scope="col">Request Type</th>
            <th scope="col">Submission Date</th>
            <th scope="col">Status</th>
            <th scope="col" style="min-width: 160px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>REQ001</td>
            <td>Alice Smith</td>
            <td>Food Aid</td>
            <td>2024-03-15</td>
            <td><span class="badge-status badge-approved" aria-label="Status Approved">Approved</span></td>
            <td>
              <button type="button" class="btn-action btn-approve" aria-label="Approve request REQ001">Approve</button>
              <button type="button" class="btn-action btn-reject" aria-label="Reject request REQ001">Reject</button>
              <button type="button" class="btn-view" aria-label="View details for request REQ001">View Details</button>
            </td>
          </tr>
          <tr>
            <td>REQ002</td>
            <td>Bob Johnson</td>
            <td>Medical Assistance</td>
            <td>2024-03-18</td>
            <td><span class="badge-status badge-pending" aria-label="Status Pending">Pending</span></td>
            <td>
              <button type="button" class="btn-action btn-approve" aria-label="Approve request REQ002">Approve</button>
              <button type="button" class="btn-action btn-reject" aria-label="Reject request REQ002">Reject</button>
              <button type="button" class="btn-view" aria-label="View details for request REQ002">View Details</button>
            </td>
          </tr>
          <tr>
            <td>REQ003</td>
            <td>Charlie Brown</td>
            <td>Shelter Support</td>
            <td>2024-03-20</td>
            <td><span class="badge-status badge-rejected" aria-label="Status Rejected">Rejected</span></td>
            <td>
              <button type="button" class="btn-action btn-approve" aria-label="Approve request REQ003">Approve</button>
              <button type="button" class="btn-action btn-reject" aria-label="Reject request REQ003">Reject</button>
              <button type="button" class="btn-view" aria-label="View details for request REQ003">View Details</button>
            </td>
          </tr>
          <tr>
            <td>REQ004</td>
            <td>Diana Prince</td>
            <td>Educational Grant</td>
            <td>2024-03-22</td>
            <td><span class="badge-status badge-approved" aria-label="Status Approved">Approved</span></td>
            <td>
              <button type="button" class="btn-action btn-approve" aria-label="Approve request REQ004">Approve</button>
              <button type="button" class="btn-action btn-reject" aria-label="Reject request REQ004">Reject</button>
              <button type="button" class="btn-view" aria-label="View details for request REQ004">View Details</button>
            </td>
          </tr>
          <tr>
            <td>REQ005</td>
            <td>Eve Adams</td>
            <td>Food Aid</td>
            <td>2024-03-25</td>
            <td><span class="badge-status badge-inreview" aria-label="Status In Review">In Review</span></td>
            <td>
              <button type="button" class="btn-action btn-approve" aria-label="Approve request REQ005">Approve</button>
              <button type="button" class="btn-action btn-reject" aria-label="Reject request REQ005">Reject</button>
              <button type="button" class="btn-view" aria-label="View details for request REQ005">View Details</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Pagination and info -->
    <nav class="pagination-container" aria-label="Pagination and record count">
      <span>Showing 1 - 5 of 8 requests</span>
      <ul class="pagination mb-0" aria-label="Request table pagination">
        <li class="page-item disabled"><button class="page-link" aria-disabled="true" tabindex="-1" aria-label="Previous page">&lt;</button></li>
        <li class="page-item active" aria-current="page"><button class="page-link" tabindex="0">1</button></li>
        <li class="page-item"><button class="page-link" tabindex="0">2</button></li>
        <li class="page-item"><button class="page-link" aria-label="Next page" tabindex="0">&gt;</button></li>
      </ul>
    </nav>
  </main>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @endsection

