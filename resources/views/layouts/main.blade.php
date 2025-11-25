<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom py-3 fixed-top">
        <div class="container-fluid">

            <!-- Logo + Text -->
            <a class="navbar-brand d-flex align-items-center text-white fw-bold" href="#">
                <img src="{{asset('images/DSWD-Logo.png')}}" class="nav-logo me-2" alt="CSWD Logo">
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
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About CSWD</a></li>
                    <li class="nav-item"><a class="nav-link" href="#opportunities">Donation Opportunities</a></li>
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


    @yield('content')

    @include('components.footer')
</body>
</html>
