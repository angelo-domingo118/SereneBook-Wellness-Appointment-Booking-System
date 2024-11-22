<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SereneBook - Your Path to Wellness. Book spa and wellness services online.">
    <title>SereneBook™ - Your Path to Wellness</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php echo BASE_URL; ?>/public/assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar with updated styling -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="bi bi-heart-pulse-fill text-primary me-2 brand-icon"></i>
                SereneBook™
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/booking">Book Now</a>
                    </li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-primary rounded-pill ms-2" href="/logout">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="btn btn-primary rounded-pill ms-2" href="/login">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
</html>