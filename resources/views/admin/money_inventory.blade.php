@extends('layouts.nof')

<link rel="stylesheet" href="{{asset('css/admin_money_inventory.css')}}">

@section('title', 'Money Inventory')

@section('content')
  <main class="container" role="main" aria-labelledby="mainTitle">
    <h1 id="mainTitle" class="visually-hidden">Assistance Disbursed - Money Donation</h1>

    <div class="heading section-header">
      <div class="d-flex align-items-center gap-3 flex-wrap">
        <span class="section-title">Money Donation</span>
        <button class="btn-add-donation" type="button" aria-label="Add donation">add donation</button>
      </div>

      <div class="filters-container">
        <label for="searchInput" class="visually-hidden">Search donations by name, type, or ID</label>
        <input type="search" id="searchInput" class="form-control" placeholder="Search by name, type, or ID"
          aria-label="Search by name, type, or ID" />
        <label for="statusFilter" class="visually-hidden">Filter by status</label>
        <select id="statusFilter" class="form-select" aria-label="Filter donations by status">
          <option selected>All Statuses</option>
          <option>Approved</option>
          <option>Pending</option>
          <option>Rejected</option>
          <option>In Review</option>
        </select>
      </div>

      <div class="total-display" aria-live="polite" aria-atomic="true">total: ₱100,000</div>
    </div>

    <div class="table-responsive">
      <table class="table" role="table" aria-describedby="mainTitle">
        <thead>
          <tr>
            <th scope="col">Request ID</th>
            <th scope="col">Beneficiary Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Submission Date</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>REQ001</td>
            <td>Alice Smith</td>
            <td>₱50,000</td>
            <td>2024-03-15</td>
            <td><span class="status-badge status-Approved">Approved</span></td>
            <td><button class="btn-claim" type="button" aria-label="Claim REQ001 assistance">CLAIM</button> <a href="#"
                class="action-link" tabindex="0">View Details</a></td>
          </tr>
          <tr>
            <td>REQ002</td>
            <td>Bob Johnson</td>
            <td>₱6,000</td>
            <td>2024-03-18</td>
            <td><span class="status-badge status-Pending">Pending</span></td>
            <td><button class="btn-claim" type="button" aria-label="Claim REQ002 assistance">CLAIM</button> <a href="#"
                class="action-link" tabindex="0">View Details</a></td>
          </tr>
          <tr>
            <td>REQ003</td>
            <td>Charlie Brown</td>
            <td>₱15,000</td>
            <td>2024-03-20</td>
            <td><span class="status-badge status-Rejected">Rejected</span></td>
            <td><button class="btn-claim" type="button" aria-label="Claim REQ003 assistance">CLAIM</button> <a href="#"
                class="action-link" tabindex="0">View Details</a></td>
          </tr>
          <tr>
            <td>REQ004</td>
            <td>Diana Prince</td>
            <td>₱10,500</td>
            <td>2024-03-22</td>
            <td><span class="status-badge status-Approved">Approved</span></td>
            <td><button class="btn-claim" type="button" aria-label="Claim REQ004 assistance">CLAIM</button> <a href="#"
                class="action-link" tabindex="0">View Details</a></td>
          </tr>
          <tr>
            <td>REQ005</td>
            <td>Eve Adams</td>
            <td>₱7,800</td>
            <td>2024-03-25</td>
            <td><span class="status-badge status-In Review">In Review</span></td>
            <td><button class="btn-claim" type="button" aria-label="Claim REQ005 assistance">CLAIM</button> <a href="#"
                class="action-link" tabindex="0">View Details</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="pagination-wrapper" aria-label="Pagination Information">
      <div>Showing 1 - 5 of 8 requests</div>
      <nav aria-label="Page navigation">
        <ul class="pagination pagination-sm mb-0">
          <li class="page-item disabled">
            <button class="page-link" aria-label="Previous page" disabled tabindex="-1">&lt;</button>
          </li>
          <li class="page-item">
            <button class="page-link" aria-label="Next page">&gt;</button>
          </li>
        </ul>
      </nav>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
