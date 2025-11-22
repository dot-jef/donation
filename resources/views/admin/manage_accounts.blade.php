@extends('layouts.nof')

<link rel="stylesheet" href="{{ asset('css/admin_manage_accounts.css') }}">

@section('title', 'Manage Accounts')

@section('content')
    <!-- Donor Account Section -->
    <section id="donor-account-section" tabindex="0" aria-label="Donors Account Section">
      <h3 class="heading section-title">Donors Account</h3>
      <div class="d-flex flex-wrap search-filter-row">
        <input
          type="search"
          class="form-control flex-grow-1"
          placeholder="Search by name, type, or ID..."
          aria-label="Search Donors"
        />
        <select class="form-select" style="max-width: 200px;" aria-label="Filter donors">
          <option selected>All Features</option>
          <option value="donor">Donor</option>
          <option value="beneficiary">Beneficiary</option>
          <option value="staff">Staff</option>
        </select>
      </div>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th scope="col" style="width: 2rem">
                <input type="checkbox" aria-label="Select all donor accounts" />
              </th>
              <th scope="col">Name</th>
              <th scope="col">User Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col" style="width: 12rem;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Lopez</td>
              <td>elizabethlopez</td>
              <td>elopez@yahoo.com</td>
              <td><span class="role-badge role-donor">Donor</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" checked /></td>
              <td>Matthew Martinez</td>
              <td>mmartinez1997</td>
              <td>mmartinez1997@gmail.com</td>
              <td><span class="role-badge role-donor">Donor</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Hall</td>
              <td>elizabeth_hall_1998</td>
              <td>elizabeth_hall_1998@gmail.com</td>
              <td>
                <span class="role-badge role-donor">Donor</span>
                &nbsp;|&nbsp;
                <a href="#beneficiary-account-section" class="text-primary text-decoration-none">Beneficiaries</a>
              </td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Maria White</td>
              <td>maria_white</td>
              <td>maria_white@hotmail.com</td>
              <td><span class="role-badge role-donor">Donor</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Watson</td>
              <td>ewatson</td>
              <td>ewatson@yahoo.com</td>
              <td><span class="role-badge role-donor">Donor</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Allen</td>
              <td>eallen1998</td>
              <td>eallen@gmail.com</td>
              <td><span class="role-badge role-donor">Donor</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Caleb Jones</td>
              <td>calebjones</td>
              <td>calebjones@gmail.com</td>
              <td><span class="role-badge role-donor">Donor</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Beneficiaries Account Section -->
    <section id="beneficiary-account-section" tabindex="0" aria-label="Beneficiaries Account Section">
      <h3 class="section-title">Beneficiaries Account</h3>
      <div class="d-flex flex-wrap search-filter-row">
        <input
          type="search"
          class="form-control flex-grow-1"
          placeholder="Search by name, type, or ID..."
          aria-label="Search Beneficiaries"
        />
        <select class="form-select" style="max-width: 200px;" aria-label="Filter beneficiaries">
          <option selected>All Features</option>
          <option value="beneficiary">Beneficiaries</option>
          <option value="donor">Donor</option>
          <option value="staff">Staff</option>
        </select>
      </div>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th scope="col" style="width: 2rem">
                <input type="checkbox" aria-label="Select all beneficiary accounts" />
              </th>
              <th scope="col">Name</th>
              <th scope="col">User Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col" style="width: 12rem;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Lopez</td>
              <td>elizabethlopez</td>
              <td>elopez@yahoo.com</td>
              <td><span class="role-badge role-beneficiary">Beneficiaries</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" checked /></td>
              <td>Matthew Martinez</td>
              <td>mmartinez1997</td>
              <td>mmartinez1997@gmail.com</td>
              <td><span class="role-badge role-beneficiary">Beneficiaries</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Hall</td>
              <td>elizabeth_hall_1998</td>
              <td>elizabeth_hall_1998@gmail.com</td>
              <td>
                <span class="role-badge role-beneficiary">Beneficiaries</span>
                &nbsp;|&nbsp;
                <span class="role-badge role-donor">Donor</span>
              </td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Maria White</td>
              <td>maria_white</td>
              <td>maria_white@hotmail.com</td>
              <td><span class="role-badge role-beneficiary">Beneficiaries</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Watson</td>
              <td>ewatson</td>
              <td>ewatson@yahoo.com</td>
              <td><span class="role-badge role-beneficiary">Beneficiaries</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Allen</td>
              <td>eallen1998</td>
              <td>eallen@gmail.com</td>
              <td><span class="role-badge role-beneficiary">Beneficiaries</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Caleb Jones</td>
              <td>calebjones</td>
              <td>calebjones@gmail.com</td>
              <td><span class="role-badge role-beneficiary">Beneficiaries</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Staff Account Section -->
    <section id="staff-account-section" tabindex="0" aria-label="Staff Account Section">
      <h3 class="section-title">Staff Account</h3>
      <div class="d-flex flex-wrap search-filter-row">
        <input
          type="search"
          class="form-control flex-grow-1"
          placeholder="Search by name, type, or ID..."
          aria-label="Search Staff"
        />
        <select class="form-select" style="max-width: 200px;" aria-label="Filter staff">
          <option selected>All Features</option>
          <option value="staff">Staff</option>
          <option value="donor">Donor</option>
          <option value="beneficiary">Beneficiaries</option>
        </select>
      </div>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th scope="col" style="width: 2rem">
                <input type="checkbox" aria-label="Select all staff accounts" />
              </th>
              <th scope="col">Name</th>
              <th scope="col">User Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col" style="width: 12rem;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Staff User 1</td>
              <td>staffuser1</td>
              <td>staff1@example.com</td>
              <td><span class="role-badge role-staff">Staff</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Lopez</td>
              <td>elizabethlopez</td>
              <td>elopez@yahoo.com</td>
              <td><span class="role-badge role-staff">Staff</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Matthew Martinez</td>
              <td>mmartinez1997</td>
              <td>mmartinez1997@gmail.com</td>
              <td><span class="role-badge role-staff">Staff</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Hall</td>
              <td>elizabeth_hall_1998</td>
              <td>elizabeth_hall_1998@gmail.com</td>
              <td><span class="role-badge role-staff">Staff</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Maria White</td>
              <td>maria_white</td>
              <td>maria_white@hotmail.com</td>
              <td><span class="role-badge role-staff">Staff</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Watson</td>
              <td>ewatson</td>
              <td>ewatson@yahoo.com</td>
              <td><span class="role-badge role-staff">Staff</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Elizabeth Allen</td>
              <td>eallen1998</td>
              <td>eallen@gmail.com</td>
              <td><span class="role-badge role-staff">Staff</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" /></td>
              <td>Caleb Jones</td>
              <td>calebjones</td>
              <td>calebjones@gmail.com</td>
              <td><span class="role-badge role-staff">Staff</span></td>
              <td>
                <a href="#" class="action-edit">Edit</a>
                <a href="#" class="action-delete">Delete</a>
                <a href="#" class="action-update">Update</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection()
