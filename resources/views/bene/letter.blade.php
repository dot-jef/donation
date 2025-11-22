@extends('layouts.nof')
<link rel="stylesheet" href="{{ asset('css/bene_letter.css') }}">

@section('title', 'Download Letter')
@section('content')
  <main class="container" role="main">
    <article class="heading letter-card" aria-label="Letter content with details and actions">
      <header class="letter-header" aria-labelledby="letterTitle letterDate">
        <h1 id="letterTitle" class="m-0">NAME</h1>
        <time id="letterDate" datetime="2023-10-13" class="text-muted" aria-label="Date October 13, 2023">Oct 13, 2023</time>
      </header>

      <section class="letter-content" aria-labelledby="detailsTitle">
        <p><strong>Name:</strong> </p>
        <p><strong>Address:</strong> </p>
        <p><strong>Number:</strong> </p>
        <p><strong>Types of goods:</strong> </p>
        <p><strong>Quantity:</strong> </p>

        <p><strong>Purpose of Request:</strong></p>
        <p>
          Minim occaecat commodo aliqua reprehenderit ullamco nostrud enim est in ea id cillum do elit cilt. Fugiat quis nulla aliqua ut tempor ciusmod nulla ullamco laborum eu nostrud sunt. Sint do commodo incididunt cupidatat consectetur aliquip.Eiusmod est dolor Lorem id dolore laboris sunt non aute magna reprehenderit Lorem commodo do sint. Voluptate officia enim cupid
        </p>
      </section>

      <footer class="letter-footer">
        <span>name</span>
        <span>admin</span>
      </footer>

      <div class="letter-actions">
        <button type="button" class="btn btn-secondary" aria-label="Cancel">Cancel</button>
        <button type="button" class="btn btn-primary" aria-label="Download letter">Download</button>
      </div>
    </article>
  </main>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
