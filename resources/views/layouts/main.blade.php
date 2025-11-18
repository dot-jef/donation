<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        .navbar-custom {
            background-color: #5FA96E; /* green background */
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5); /* line shadow separator */
            z-index: 1030;
        }
        .nav-logo {
            height: 45px;
            width: auto;
        }
        .nav-link {
            color: white !important;
            font-weight: 500;
            margin: 0 10px;
        }
        .hero-section {
            display:flex;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #5ea96e, #d7efd8);
            padding: 80px 0;
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
        }

        .highlight {
            color: #2d8a3f;
        }

        .btn-green {
            background-color: #2d8a3f;
            color: white;
        }

        .btn-green:hover {
            background-color: #256f34;
            color: white;
        }

        .hero-img img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            object-fit: cover;
        }
        .impact-section {
            display:flex;
            align-items: center;
            background-color: #f5faf5; /* light greenish background */
            height: 100vh;
        }

        .impact-card {
            transition: 0.2s ease;
        }

        .impact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }
        .full-height {
            padding-top: 200px;
            justify-content: center;
            min-height: 150vh;
            display: flex;
            align-items: flex-start;
        }

        .icon-box {
            width: 100%;
            height: 250px;
            object-fit: contain;
        }
    </style>
</head>
<body>
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
                    <a href="#" class="btn btn-light me-2 d-flex align-items-center">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Login
                    </a>
                    <a href="#" class="btn btn-outline-light d-flex align-items-center">
                        <i class="bi bi-person-plus me-1"></i> Sign Up
                    </a>
                </div>

            </div>
        </div>
    </nav>

    @yield('content')

</body>
</html>