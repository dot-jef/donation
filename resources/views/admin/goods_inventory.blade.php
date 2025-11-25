@extends('layouts.admin')

<link rel="stylesheet" href="{{asset('css/admin_goods_inventory.css')}}">
<link rel="stylesheet" href="{{asset('css/admin_money_inventory.css')}}">

@section('title', 'Goods Inventory')

@section('content')
  <main class="container" role="main" aria-label="Goods Inventory Admin Dashboard">
    <section class="heading inventory-header">
        <span class="section-title">Goods Donation</span>
      <button type="button" class="btn-add-donation" aria-label="Add donation">add donation</button>
      <div class="search-filter-group">
        <label for="searchInput" class="visually-hidden">Search goods by name, type, or ID</label>
        <input type="search" id="searchInput" class="form-control" placeholder="Search by name, type, or ID"
          aria-label="Search goods by name, type, or ID" />
        <label for="statusFilter" class="visually-hidden">Filter by status</label>
        <select id="statusFilter" class="form-select" aria-label="Filter inventory by status">
          <option selected>All Statuses</option>
          <!-- Option values can be added according to status logic -->
        </select>
      </div>
    </section>

    <section>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Donor</th>
              <th scope="col">Type of Goods</th>
              <th scope="col">Quantity</th>
              <th scope="col">Category</th>
              <th scope="col">Expiration date</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Donor">Elizabeth Lopez</td>
              <td data-label="Type of Goods">Pencil carton</td>
              <td data-label="Quantity">50 pcs</td>
              <td data-label="Category">
                <span class="category-badge category-foods" aria-label="Category Foods">Foods</span>
              </td>
              <td data-label="Expiration date">2024-03-15</td>
              <td data-label="Actions">
                <button class="action-edit" type="button" aria-label="Edit Elizabeth Lopez donation">Edit</button>
                <button class="action-delete" type="button" aria-label="Delete Elizabeth Lopez donation">Delete</button>
                <button class="action-update" type="button" aria-label="Update Elizabeth Lopez donation">Update</button>
              </td>
            </tr>
            <tr>
              <td data-label="Donor">Matthew Martinez</td>
              <td data-label="Type of Goods">555 tuna can</td>
              <td data-label="Quantity">30 pcs</td>
              <td data-label="Category">
                <span class="category-badge category-foods" aria-label="Category Foods">Foods</span>
              </td>
              <td data-label="Expiration date">2024-03-15</td>
              <td data-label="Actions">
                <button class="action-edit" type="button" aria-label="Edit Matthew Martinez donation">Edit</button>
                <button class="action-delete" type="button" aria-label="Delete Matthew Martinez donation">Delete</button>
                <button class="action-update" type="button" aria-label="Update Matthew Martinez donation">Update</button>
              </td>
            </tr>
            <tr>
              <td data-label="Donor">Elizabeth Hall</td>
              <td data-label="Type of Goods">ballpen</td>
              <td data-label="Quantity">400 pcs</td>
              <td data-label="Category">
                <span class="category-badge category-school-supply" aria-label="Category School supply">School supply</span>
              </td>
              <td data-label="Expiration date">2024-03-15</td>
              <td data-label="Actions">
                <button class="action-edit" type="button" aria-label="Edit Elizabeth Hall donation">Edit</button>
                <button class="action-delete" type="button" aria-label="Delete Elizabeth Hall donation">Delete</button>
                <button class="action-update" type="button" aria-label="Update Elizabeth Hall donation">Update</button>
              </td>
            </tr>
            <tr>
              <td data-label="Donor">Maria White</td>
              <td data-label="Type of Goods">rice</td>
              <td data-label="Quantity">3 bags</td>
              <td data-label="Category">
                <span class="category-badge category-foods" aria-label="Category Foods">Foods</span>
              </td>
              <td data-label="Expiration date">2024-03-15</td>
              <td data-label="Actions">
                <button class="action-edit" type="button" aria-label="Edit Maria White donation">Edit</button>
                <button class="action-delete" type="button" aria-label="Delete Maria White donation">Delete</button>
                <button class="action-update" type="button" aria-label="Update Maria White donation">Update</button>
              </td>
            </tr>
            <tr>
              <td data-label="Donor">Elizabeth Watson</td>
              <td data-label="Type of Goods">argentifina</td>
              <td data-label="Quantity">50 pcs</td>
              <td data-label="Category">
                <span class="category-badge category-foods" aria-label="Category Foods">Foods</span>
              </td>
              <td data-label="Expiration date">2024-03-15</td>
              <td data-label="Actions">
                <button class="action-edit" type="button" aria-label="Edit Elizabeth Watson donation">Edit</button>
                <button class="action-delete" type="button" aria-label="Delete Elizabeth Watson donation">Delete</button>
                <button class="action-update" type="button" aria-label="Update Elizabeth Watson donation">Update</button>
              </td>
            </tr>
            <tr>
              <td data-label="Donor">Elizabeth Allen</td>
              <td data-label="Type of Goods">biogesic</td>
              <td data-label="Quantity">70 pcs</td>
              <td data-label="Category">
                <span class="category-badge category-medicine" aria-label="Category Medicine">Medicine</span>
              </td>
              <td data-label="Expiration date">2024-03-15</td>
              <td data-label="Actions">
                <button class="action-edit" type="button" aria-label="Edit Elizabeth Allen donation">Edit</button>
                <button class="action-delete" type="button" aria-label="Delete Elizabeth Allen donation">Delete</button>
                <button class="action-update" type="button" aria-label="Update Elizabeth Allen donation">Update</button>
              </td>
            </tr>
            <tr>
              <td data-label="Donor">Caleb Jones</td>
              <td data-label="Type of Goods">paper</td>
              <td data-label="Quantity">40 pcs</td>
              <td data-label="Category">
                <span class="category-badge category-school-supply" aria-label="Category School supply">School supply</span>
              </td>
              <td data-label="Expiration date">2024-03-15</td>
              <td data-label="Actions">
                <button class="action-edit" type="button" aria-label="Edit Caleb Jones donation">Edit</button>
                <button class="action-delete" type="button" aria-label="Delete Caleb Jones donation">Delete</button>
                <button class="action-update" type="button" aria-label="Update Caleb Jones donation">Update</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <main class="container" role="main" aria-labelledby="mainTitle">
    <h1 id="mainTitle" class="visually-hidden">Assistance Disbursed - Money Donation</h1>

    <div class="section-header">
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

