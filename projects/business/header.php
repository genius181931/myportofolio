<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>PT. Dharmakerta Raharja</title>
    <link rel="icon" href="images/icons/icon_DKR.png" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Multi-page specific tweaks */
        .page-header {
            padding: 12rem 0 5rem;
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.95) 0%, rgba(191, 167, 106, 0.8) 100%), url('images/hero-1.jpg') center/cover;
            color: #fff;
            text-align: center;
        }
        .page-header h1 {
            font-weight: 700;
            font-size: 3rem;
        }
        /* Navbar solid background when not on homepage */
        .navbar.solid-bg {
            background: rgba(26, 26, 26, 0.95) !important;
            padding: 0.8rem 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark fixed-top <?php echo (basename($_SERVER['PHP_SELF']) !== 'index.php') ? 'solid-bg' : ''; ?>">
        <div class="container">
            <a class="navbar-brand" href="index.php" data-aos="fade-right" data-aos-duration="1000">
                <img src="images/icons/Logo_DKR.png" alt="DKR Logo" height="45" loading="lazy" />
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navMenu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto" data-aos="fade-left" data-aos-duration="1000">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="sectors.php">Sectors</a></li>
                    <li class="nav-item"><a class="nav-link" href="korea.php">Korea Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
