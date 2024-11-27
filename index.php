<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Booking System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg glass navbar-dark py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Booking System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light btn-sm ms-lg-2" href="views/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light btn-sm ms-lg-2" href="views/register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
        <div class="text-center glass p-5 rounded-3">
            <h1 class="display-4 fw-bold">Welcome to Our Booking System</h1>
            <p class="mt-3 lead text-light">
                Plan, Book, and Manage Appointments with Ease
            </p>
            <div class="mt-4">
                <a href="views/login.php" class="btn btn-outline-light btn-lg me-3">Login</a>
                <a href="views/register.php" class="btn btn-light btn-lg">Register</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container py-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h2 class="fw-bold">Why Choose Us?</h2>
                <p class="text-muted">
                    Our platform ensures a seamless booking experience with real-time availability, secure authentication, and modern design. Whether you're scheduling appointments or managing bookings, we've got you covered.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="assets/images/booking.svg" alt="Booking Illustration" class="img-fluid">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container-fluid bg-dark text-center py-4 mt-5">
        <p class="mb-0 text-muted">&copy; 2024 Online Booking System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
