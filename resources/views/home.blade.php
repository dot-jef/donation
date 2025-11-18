@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT SIDE CONTENT -->
            <div class="col-md-6 mb-4">
                <h1 class="hero-title">
                    Empowering Communities<br>
                    with <span class="highlight">CSWD Donation<br>System</span>
                </h1>

                <p class="mt-3">
                    Join us in building a stronger, more supportive community.
                    Your donations bring hope and essential assistance to those in need.
                    Learn how you can make a difference today.
                </p>

                <div class="mt-4 d-flex gap-3">
                    <a href="#" class="btn btn-green px-4 py-2">Create Account</a>
                    <a href="#" class="btn btn-outline-secondary px-4 py-2">Login</a>
                </div>
            </div>

            <!-- RIGHT SIDE IMAGE -->
            <div class="col-md-6 hero-img">
                <img src="YOUR-IMAGE-HERE.jpg" alt="Donation Box">
            </div>

        </div>
    </div>
</section>

<section id="about" class="impact-section py-5">
    <div class="container">

        <!-- Title -->
        <h2 class="text-center fw-bold mb-5">
            Our Impact: Where Your Support Goes
        </h2>

        <!-- Cards Row -->
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="impact-card p-4 shadow-sm rounded-4 bg-white h-100">
                    <div class="mb-3">
                        <i class="bi bi-heart text-success fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Nourishing Families</h5>
                    <p class="mt-2">
                        Providing healthy meals and food security for vulnerable households,
                        ensuring no one goes hungry.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="impact-card p-4 shadow-sm rounded-4 bg-white h-100">
                    <div class="mb-3">
                        <i class="bi bi-house-door text-success fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Educating Futures</h5>
                    <p class="mt-2">
                        Supporting educational programs, school supplies, and scholarships
                        for children and young adults.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="impact-card p-4 shadow-sm rounded-4 bg-white h-100">
                    <div class="mb-3">
                        <i class="bi bi-leaf text-success fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Health & Wellness</h5>
                    <p class="mt-2">
                        Delivering essential medical supplies, healthcare access, and
                        wellness initiatives to communities.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="opportunities" class="full-height">
        <div class="container py-5 oppor">

            <h2 class="text-center mb-5 fw-bold">Ways You Can Contribute</h2>

            <div class="row g-5 justify-content-center">

                <!-- Monetary Donations -->
                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <div class="text-primary fs-3">$</div>
                    <h4 class="fw-bold">Monetary Donations</h4>
                    <p>
                        Contribute financially to our various programs. Every dollar helps us reach more
                        individuals and families in need.
                    </p>
                </div>

                <div class="col-md-5">
                    <img src="IMAGE1.png" class="img-fluid rounded shadow" alt="Monetary donation illustration">
                </div>

                <!-- Goods Donations -->
                <div class="col-md-5">
                    <img src="IMAGE2.png" class="img-fluid rounded shadow" alt="Goods donation illustration">
                </div>

                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <div class="text-info fs-3">⬡</div>
                    <h4 class="fw-bold">Goods Donations</h4>
                    <p>
                        Donate essential goods like clothes, medicines, or school supplies. Your material
                        contributions provide direct relief.
                    </p>
                </div>

            </div>

        </div>
    </section>
@endsection