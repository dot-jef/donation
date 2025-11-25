<nav class="navbar navbar-expand-lg navbar-custom py-3 fixed-top">
        <div class="container-fluid">

            <!-- Logo + Text -->
            <a class="navbar-brand d-flex align-items-center text-white fw-bold" href="#">
                <img src="YOUR-LOGO.png" class="nav-logo me-2" alt="CSWD Logo">
                CSWD
            </a>

            <!-- Hamburger (mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Centered Nav Links -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About CSWD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#opportunities">Donation Opportunities</a>
                    </li>
                </ul>

                <!-- Right Buttons -->
                <div class="d-flex">
                    <a href="{{route('login')}}" class="btn btn-light me-2 d-flex align-items-center">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Login
                    </a>
                    <a href="{{route('register')}}" class="btn btn-outline-light d-flex align-items-center">
                        <i class="bi bi-person-plus me-1"></i> Sign Up
                    </a>
                </div>

            </div>
        </div>
    </nav>
