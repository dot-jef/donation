@extends('layouts.staff')

<link rel="stylesheet" href="{{asset('css/staff_details.css')}}">

@section('title', 'Beneficiary Details')

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
