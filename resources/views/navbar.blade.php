<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add relevant meta tags and title here -->
</head>
<body>
    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Asih 67 Surabaya</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>07.00 - 20.00 WIB</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>siapdonor@gmail.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+62 899-1299-1399</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-5 text-primary m-0">SiapDonor</h1>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/information" class="nav-item nav-link">Information</a>
                <a href="/donation" class="nav-item nav-link">Blood Donation</a>
                <a href="/login" class="nav-item nav-link">Login</a>
                <a href="/register" class="nav-item nav-link">Register</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mobile Toggle Button -->
            <div class="d-lg-none mt-3 space-y-1">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto p-4 p-lg-0">
                        <li class="nav-item"><a href="{{ route('profile.edit') }}" class="nav-link">Profile</a></li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="nav-link btn btn-link" type="submit">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </div>
    <!-- Navbar End -->
</body>
</html>
