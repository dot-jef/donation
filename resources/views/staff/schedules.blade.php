@extends('layouts.nof')

<link rel="stylesheet" href="{{ asset('css/staff_schedules.css') }}">

@section('title', 'Schedules')
@section('content')
  <!-- Main Container -->
  <main class="container my-4">

    <div class="heading card-custom">
      <!-- Search & Filter -->
      <form class="d-flex gap-2 flex-wrap search-filter-row mb-3" role="search" aria-label="Search and filter scheduled appointments">
        <input
          class="form-control flex-grow-1"
          type="search"
          placeholder="Search by name, type, or ID..."
          aria-label="Search scheduled appointments"
        />
        <select class="form-select" style="max-width:180px;" aria-label="Filter by status">
          <option selected>All Statuses</option>
          <option value="approved">Approved</option>
          <option value="pending">Pending</option>
          <option value="rejected">Rejected</option>
          <option value="inreview">In Review</option>
        </select>
      </form>

      <!-- Schedule Table -->
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0" aria-label="Scheduled appointments table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Donor Name</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Status</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>REQ001</td>
              <td>Alice Smith</td>
              <td>2024-03-15</td>
              <td>2024-03-15</td>
              <td>
                <span class="badge badge-approved">Approved</span>
              </td>
              <td>
                <button type="button" class="btn btn-approved" aria-label="Approve request REQ001">Approved</button>
                <a href="#" class="view-details" aria-label="View details for REQ001">View Details</a>
              </td>
            </tr>
            <tr>
              <td>REQ002</td>
              <td>Bob Johnson</td>
              <td>2024-03-18</td>
              <td>2024-03-18</td>
              <td>
                <span class="badge badge-pending">Pending</span>
              </td>
              <td>
                <button type="button" class="btn btn-approved" aria-label="Approve request REQ002">Approved</button>
                <a href="#" class="view-details" aria-label="View details for REQ002">View Details</a>
              </td>
            </tr>
            <tr>
              <td>REQ003</td>
              <td>Charlie Brown</td>
              <td>2024-03-20</td>
              <td>2024-03-20</td>
              <td>
                <span class="badge badge-rejected">Rejected</span>
              </td>
              <td>
                <button type="button" class="btn btn-approved" aria-label="Approve request REQ003">Approved</button>
                <a href="#" class="view-details" aria-label="View details for REQ003">View Details</a>
              </td>
            </tr>
            <tr>
              <td>REQ004</td>
              <td>Diana Prince</td>
              <td>2024-03-22</td>
              <td>2024-03-22</td>
              <td>
                <span class="badge badge-approved">Approved</span>
              </td>
              <td>
                <button type="button" class="btn btn-approved" aria-label="Approve request REQ004">Approved</button>
                <a href="#" class="view-details" aria-label="View details for REQ004">View Details</a>
              </td>
            </tr>
            <tr>
              <td>REQ005</td>
              <td>Eve Adams</td>
              <td>2024-03-25</td>
              <td>2024-03-25</td>
              <td>
                <span class="badge badge-inreview">In Review</span>
              </td>
              <td>
                <button type="button" class="btn btn-approved" aria-label="Approve request REQ005">Approved</button>
                <a href="#" class="view-details" aria-label="View details for REQ005">View Details</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pagination & Info -->
      <div class="pagination-wrapper mt-3" aria-label="Pagination information">
        <div>Showing 1 - 5 of 8 requests</div>
        <nav aria-label="Page navigation">
          <ul class="pagination mb-0">
            <li class="page-item disabled" aria-disabled="true">
              <button class="page-link" tabindex="-1" aria-label="Previous page" disabled>&lt;</button>
            </li>
            <li class="page-item active" aria-current="page">
              <button class="page-link">1</button>
            </li>
            <li class="page-item">
              <button class="page-link" aria-label="Go to page 2">2</button>
            </li>
            <li class="page-item">
              <button class="page-link" aria-label="Next page">&gt;</button>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </main>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
