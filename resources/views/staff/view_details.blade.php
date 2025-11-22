<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Details of Beneficiary</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    body {
      background-color: #f8f9fa;
      min-height: 100vh;
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    /* Header Navbar styling */
    .navbar-custom {
      background-color: #388e3c; /* green */
      color: white;
      padding: 0.5rem 1rem;
      user-select: none;
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .view-details-title {
      font-weight: 700;
      font-size: 1.25rem;
      color: white;
      user-select: none;
    }
    .navbar-custom .view-details-title {
      flex-grow: 1;
      text-align: center;
    }
    .btn-logout {
      background-color: #dc3545;
      border: none;
      font-weight: 600;
      color: white;
      padding: 0.375rem 0.75rem;
      border-radius: 0.25rem;
      user-select: none;
      transition: background-color 0.3s ease;
      cursor: pointer;
    }
    .btn-logout:hover,
    .btn-logout:focus {
      background-color: #b52a39;
      outline: none;
      box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);
      user-select: none;
    }
    /* Container styling */
    .container-form {
      max-width: 900px;
      margin: 2rem auto 3rem;
      background-color: white;
      border-radius: 0.4rem;
      box-shadow: 0 0 15px rgb(0 0 0 / 0.1);
      padding: 2rem 2.5rem;
    }
    /* Title and ID badge */
    .bene-header {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.75rem;
      flex-wrap: wrap;
    }
    .bene-header h2 {
      margin: 0;
      font-weight: 700;
    }
    .id-badge {
      background-color: #d4edda;
      color: #155724;
      font-weight: 600;
      font-size: 0.85rem;
      padding: 0.25rem 0.7rem;
      border-radius: 1rem;
      user-select: text;
      white-space: nowrap;
    }
    /* Section header */
    .section-header {
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 1rem;
      border-bottom: 1px solid #dee2e6;
      padding-bottom: 0.25rem;
      user-select: none;
      color: #212529;
    }
    /* Form styling */
    form .form-label {
      font-weight: 600;
      user-select: none;
    }
    form .form-control,
    form select,
    form textarea {
      box-shadow: none;
    }
    form .form-control:focus,
    form select:focus,
    form textarea:focus {
      box-shadow: 0 0 0 0.2rem #4caf5080;
      border-color: #4caf50;
      outline: none;
    }
    .input-group-text {
      background: transparent;
      border: none;
      color: #6c757d;
    }
    .input-group > .form-control {
      border-left: 0;
    }
    /* Note textarea */
    textarea.form-control {
      min-height: 120px;
      resize: vertical;
    }
    /* Buttons */
    .form-actions {
      display: flex;
      justify-content: flex-end;
      gap: 1rem;
      margin-top: 2rem;
      flex-wrap: wrap;
    }
    .btn-cancel {
      background-color: #e9ecef;
      color: #495057;
      border: 1px solid #dee2e6;
      font-weight: 600;
      padding: 0.375rem 1rem;
      border-radius: 0.25rem;
      cursor: pointer;
      user-select: none;
      transition: background-color 0.2s ease;
    }
    .btn-cancel:hover,
    .btn-cancel:focus {
      background-color: #d3d9dc;
      outline: none;
    }
    .btn-create {
      background-color: #0d6efd;
      color: white;
      border: none;
      font-weight: 600;
      padding: 0.375rem 1.25rem;
      border-radius: 0.25rem;
      cursor: pointer;
      user-select: none;
      transition: background-color 0.3s ease;
    }
    .btn-create:hover,
    .btn-create:focus {
      background-color: #0a58ca;
      outline: none;
    }
    /* Helper icon spacing for inputs */
    .input-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 2.5rem;
      color: #6c757d;
      user-select: none;
    }
    /* Responsive - vertical stacking on small devices */
    @media (max-width: 575.98px) {
      .bene-header {
        justify-content: center;
        gap: 0.5rem;
        text-align: center;
      }
      .container-form {
        margin: 1rem 1rem 2rem;
        padding: 1.25rem 1.5rem;
      }
      .form-actions {
        justify-content: center;
      }
      .form-row .col-md-6,
      .form-row .col-md-8,
      .form-row .col-md-4,
      .form-row .col-md-12 {
        max-width: 100% !important;
        flex: 0 0 100% !important;
      }
    }
@section('title', '')
@section('content')
  <!-- Main form container -->
  <main>
    <section class="heading container-form" aria-label="Beneficiary details form">

      <!-- Title and ID -->
      <div class="bene-header">
        <h2>Alice Smith</h2>
        <div class="id-badge" aria-label="Beneficiary ID">#123456789</div>
      </div>

      <!-- General info heading -->
      <h3 class="section-header">General info</h3>

      <!-- Form start -->
      <form>

        <div class="row g-3">

          <!-- Full name input -->
          <div class="col-12 col-md-6">
            <label for="fullName" class="form-label">Full name</label>
            <div class="input-group">
              <input
                type="text"
                id="fullName"
                name="fullName"
                class="form-control"
                value="Alice Smith"
                aria-describedby="fullNameIcon"
                required
              />
              <span class="input-group-text" id="fullNameIcon" aria-hidden="true">
                <i class="bi bi-x-lg"></i>
              </span>
            </div>
          </div>

          <!-- Email input -->
          <div class="col-12 col-md-6">
            <label for="emailInput" class="form-label">Email</label>
            <div class="input-group">
              <input
                type="email"
                id="emailInput"
                name="email"
                class="form-control"
                value="Alice.Smith@gmail.com"
                aria-describedby="emailIcon"
                required
              />
              <span class="input-group-text" id="emailIcon" aria-hidden="true">
                <i class="bi bi-envelope"></i>
              </span>
            </div>
          </div>

          <!-- Number input -->
          <div class="col-12 col-md-6">
            <label for="numberInput" class="form-label">Number</label>
            <div class="input-group">
              <input
                type="tel"
                id="numberInput"
                name="number"
                class="form-control"
                value="123456789"
                aria-describedby="phoneIcon"
                pattern="[0-9+()\- ]*"
                required
              />
              <span class="input-group-text" id="phoneIcon" aria-hidden="true">
                <i class="bi bi-telephone"></i>
              </span>
            </div>
          </div>

          <!-- Type of donation select -->
          <div class="col-12 col-md-6">
            <label for="typeSelect" class="form-label">Type of donation</label>
            <select id="typeSelect" name="typeDonation" class="form-select" required>
              <option value="cars" selected>Cars</option>
              <option value="clothes">Clothes</option>
              <option value="food">Food</option>
              <option value="toys">Toys</option>
            </select>
          </div>

          <!-- Quantity select -->
          <div class="col-12 col-md-6">
            <label for="quantitySelect" class="form-label">Quantity</label>
            <select id="quantitySelect" name="quantity" class="form-select" required>
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50" selected>50</option>
              <option value="100">100</option>
            </select>
          </div>

          <!-- Date appeal input -->
          <div class="col-12 col-md-6">
            <label for="dateAppeal" class="form-label">Date appeal</label>
            <input
              type="date"
              id="dateAppeal"
              name="dateAppeal"
              class="form-control"
              value="2022-10-13"
              required
            />
          </div>

          <!-- Date and time input -->
          <div class="col-12 col-md-6">
            <label for="dateTime" class="form-label">Date and time</label>
            <input
              type="datetime-local"
              id="dateTime"
              name="dateTime"
              class="form-control"
              value="2022-10-19T00:00"
              required
            />
          </div>

          <!-- Note textarea -->
          <div class="col-12 col-md-6">
            <label for="noteText" class="form-label">Note</label>
            <textarea
              id="noteText"
              name="note"
              class="form-control"
              placeholder="Note"
              rows="6"
            ></textarea>
          </div>

        </div>

        <!-- Buttons -->
        <div class="form-actions">
          <button type="button" class="btn btn-cancel">Cancel</button>
          <button type="submit" class="btn btn-create">Create to file</button>
        </div>
      </form>
    </section>
  </main>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
