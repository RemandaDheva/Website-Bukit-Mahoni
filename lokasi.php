<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesona Bukit Mahoni</title>

    <!-- Main CSS -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
                <h1>Pesona Bukit Mahoni</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="about.php">Tentang</a></li>
                    <li><a href="fasilitas.php">Fasilitas</a></li>
                    <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="galeri.php">Semua</a></li>
                            <li><a href="mahoni.php">Bukit Mahoni</a></li>
                            <li><a href="zoo.php">Mini Zoo</a></li>
                            <li><a href="sports.php">Area Bermain</a></li>
                        </ul>
                    </li>
                    <li><a href="lokasi.php" class="active">Lokasi</a></li>
                </ul>
            </nav>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>  
    </header>
    <!-- Header End -->

    <!-- Section -->
    <section class="lokasi">
        <div class="headline">
            <h1>Peta Lokasi Wisata Bukit Mahoni</h1>
        </div>
        
        <div class="container">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.737536088732!2d117.1047844737223!3d-0.3646071353106783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df677accb8428bd%3A0x57dc39bb432c3f5b!2sBukit%20Mahoni!5e0!3m2!1sid!2sid!4v1716938509387!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
    </section>
    <!-- Section End -->

    <!-- Footer -->
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-6">
                <h1>Pesona Bukit Mahoni</h1>
                <p class="text-body-secondary">&copy; Remanda Dheva</p>
                <div class="header-social-links">
                    <a href="https://www.instagram.com/patiencespooky?igsh=dWp1a2lycTV2dGR3" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/manda-va-a2b6512a7?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                    <a href="https://github.com/RemandaDheva" class="github"><i class="bi bi-github"></i></a>
                </div>
            </div>

            <div class="col mb-3"></div>
            <div class="col mb-3"></div>

            <div class="col mb-3">
            <h5>Menu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Beranda</a></li>
                    <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-body-secondary">Tentang</a></li>
                    <li class="nav-item mb-2"><a href="fasilitas.php" class="nav-link p-0 text-body-secondary">Fasilitas</a></li>
                    <li class="nav-item mb-2"><a href="galeri.php" class="nav-link p-0 text-body-secondary">Galeri</a></li>
                    <li class="nav-item mb-2"><a href="lokasi.php" class="nav-link p-0 text-body-secondary">Lokasi</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Informasi</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="bi bi-telephone"></i> +62 813 4725 9259</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="bi bi-geo-alt"></i> Desa Bangun Rejo, Kec. Tenggarong Seberang, Kabupaten Kutai Kartanegara, Kalimantan Timur 75517</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="bi bi-clock"></i> Buka setiap hari dari pukul 08:00 WITA - 18:00 WITA</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Footer End -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader">
        <div class="line"></div>
    </div>

    <!-- Main JavaScript -->
    <script src="assets/js/script.js"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
</body>
</html>