@extends('layouts.nof')

<link rel="stylesheet" href="{{asset('css/bene_request.css')}}">

@section('title', 'Create Request')

@section('content')
  <!-- Content -->
  <div class="heading content-container" role="main" aria-labelledby="requestTitle">
    <!-- Header with name and ID -->
    <div class="header-section">
      <div class="header-name" id="requestTitle" tabindex="0">
        Alice Smith
        <span class="id-badge">#123456789</span>
      </div>
    </div>

    <!-- Form and Note side by side -->
    <div class="form-note-wrapper">
      <!-- Form -->
      <form aria-label="Request form">
        <fieldset>
          <legend class="mb-3 fw-semibold" tabindex="0">General info</legend>

          <!-- Full name -->
          <div class="mb-3">
            <label for="fullname" class="form-label">Full name</label>
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                id="fullname"
                name="fullname"
                placeholder="Alice Smith"
                aria-describedby="fullname-addon"
                value="Alice Smith"
                required
              />
              <span class="input-group-text" id="fullname-addon" aria-hidden="true">
                [Text input]
              </span>
            </div>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Alice.Smith@gmail.com"
                aria-describedby="email-addon"
                value="Alice.Smith@gmail.com"
                required
              />
              <span class="input-group-text" id="email-addon" aria-hidden="true">
                @
              </span>
            </div>
          </div>

          <!-- Number -->
          <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <div class="input-group">
              <input
                type="tel"
                class="form-control"
                id="number"
                name="number"
                placeholder="123456789"
                aria-describedby="number-addon"
                value="123456789"
                required
              />
              <span class="input-group-text" id="number-addon" aria-hidden="true">
                [Phone input]
              </span>
            </div>
          </div>

          <!-- Type of donate -->
          <div class="mb-3">
            <label for="typedonate" class="form-label">Type of donate</label>
            <select class="form-select" id="typedonate" name="typedonate" required>
              <option value="cans" selected>cans</option>
              <option value="clothes">clothes</option>
              <option value="food">food</option>
              <option value="other">other</option>
            </select>
          </div>

          <!-- Quantity -->
          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <select class="form-select" id="quantity" name="quantity" required>
              <option value="50" selected>50</option>
              <option value="100">100</option>
              <option value="200">200</option>
            </select>
          </div>

          <!-- Date appeal and date and time row -->
          <div class="row g-3">
            <div class="col-6">
              <label for="dateAppeal" class="form-label">Date appeal</label>
              <input
                type="date"
                class="form-control"
                id="dateAppeal"
                name="dateAppeal"
                value="2022-10-13"
                required
              />
            </div>
            <div class="col-6">
              <label for="dateTime" class="form-label">Date and time</label>
              <input
                type="date"
                class="form-control"
                id="dateTime"
                name="dateTime"
                value="2022-10-19"
                required
              />
            </div>
          </div>
        </fieldset>
      </form>

      <!-- Note section -->
      <div class="note-container" aria-label="Note section">
        <label for="note" class="form-label fw-semibold" tabindex="0">Note</label>
        <textarea id="note" name="note" rows="8" placeholder="Note" aria-multiline="true"></textarea>
      </div>
    </div>

    <!-- Buttons -->
    <div class="buttons-container">
      <button type="button" class="btn btn-cancel" aria-label="Cancel button">Cancel</button>
      <button type="button" class="btn btn-create" aria-label="Create to file button">Create to file</button>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @endsection
