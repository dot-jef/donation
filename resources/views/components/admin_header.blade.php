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
                        <a class="nav-link" href="#dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#requests">Manage Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#users">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">Donation Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reports">Reports</a>
                    </li>
                </ul>

                <!-- Right Buttons -->
                <div class="d-flex">
                    <a href="{{route('register')}}" class="btn btn-outline-light d-flex align-items-center bg-danger">
                        <i class="bi bi-person-plus me-1"></i> Logout
                    </a>
                </div>

            </div>
        </div>
    </nav>
