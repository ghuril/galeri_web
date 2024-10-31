<?php include 'koneksi.php'; session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .navbar {
            background:  #FAF8E8;
        }

        .navbar .nav-link {
            color: black !important;
        }

        .navbar .nav-link:hover {
            color: white !important;
        }

        body {
            display: flex;
            flex-direction: column;
            overflow: auto;
        }

        .photoContainer {
            width: 100vw;
            height: 80vh;
            overflow: hidden;
            position: relative;
            background: url('assets/img/WELCOME GALERI SEKOLAH (1).png') no-repeat center center; /* Replace with your photo */
            background-size: cover;
        }

        .content-section {
            padding: 20px;
            background-color:  #FAF8E8;
            color: white;
            text-align: center;
        }

        .info-section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px 20px;
            text-align: center;
            z-index: 1;
        }

        .nav-item {
            margin: 0 10px;
        }

        .info-section h2 {
            margin-bottom: 20px;
        }

        .info-section p {
            margin: 10px 0;
        }

        .social-links a {
            font-size: 24px;
            transition: transform 0.3s;
        }

        .social-links a:hover {
            transform: scale(1.2);
            background-color: white;
            color: black;
        }
        
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="header-brand" href="">
                    <img src="assets/img/logo smkn 4 (6).png" class="header-brand-img" alt="logo" width="30" height="auto">
                    <span class="text-dark text-center">Galeri Sekolah</span>
                </a>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="?url=home" class="nav-link btn btn-outline-primary">Home</a>
                    </li>
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a href="?url=upload" class="nav-link btn btn-outline-success">Upload</a>
                        </li>
                        <li class="nav-item">
                            <a href="?url=album" class="nav-link btn btn-outline-info">Album</a>
                        </li>
                        <li class="nav-item">
                            <a href="?url=profile" class="nav-link btn btn-outline-warning"><?= ucwords($_SESSION['username']) ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="?url=logout" class="nav-link btn btn-outline-danger">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link btn btn-outline-secondary">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="daftar.php" class="nav-link btn btn-outline-dark">Daftar</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="photoContainer">
        <!-- The photo will be set as the background in the CSS -->
    </div>

    <!-- Content Area -->
    <div class="content-section">
        <?php 
            $url = @$_GET["url"];
            if ($url == 'home') {
                include 'page/home.php';
            } elseif ($url == 'profile') {
                include 'page/profil.php';
            } elseif ($url == 'upload') {
                include 'page/upload.php';
            } elseif ($url == 'album') {
                include 'page/album.php';
            } elseif ($url == 'like') {
                include 'page/like.php';
            } elseif ($url == 'komentar') {
                include 'page/komentar.php';
            } elseif ($url == 'detail') {
                include 'page/detail.php';
            } elseif ($url == 'logout') {
                session_destroy();
                header("Location: ?url=home");
            } else {
                include 'page/home.php';
            }
        ?>
    </div>

    <!-- Information Section -->
    <div class="info-section">
        <div class="container">
            <h2 class="text-wrap">SMK NEGERI 4 BOGOR</h2>
            <p>Merupakan sekolah kejuruan berbasis Teknologi Informasi dan Komunikasi. Sekolah ini didirikan dan dirintis pada tahun 2008 kemudian dibuka pada tahun 2009 yang saat ini terakreditasi A. Terletak di Jalan Raya Tajur Kp. Buntar, Muarasari, Bogor, sekolah ini berdiri di atas lahan seluas 12.724 m2 dengan berbagai fasilitas pendukung di dalamnya. Terdapat 54 staff pengajar dan 22 orang staff tata usaha, dikepalai oleh Drs. Mulya Mulprihartono, M. Si, sekolah ini merupakan investasi pendidikan yang tepat untuk putra/putri anda.</p>
        </div>
    </div>

    <div class="social-links text-center my-4">
        <a href="https://www.instagram.com/smkn4kotabogor/?utm_source=ig_embed&ig_rid=e26ff3fa-cdc9-4b07-b750-5fee62b8016d" class="btn btn-primary m-2">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.facebook.com/people/SMK-NEGERI-4-KOTA-BOGOR/100054636630766/" class="btn btn-primary m-2">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="http://www.youtube.com/@smknegeri4bogor905" class="btn btn-primary m-2">
            <i class="fab fa-youtube"></i>
        </a>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
