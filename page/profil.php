<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
       body {
        background-color: #343a40; /* Dark background color */
        color: black; /* Change text color to white for better contrast */
    font-family: 'Arial', sans-serif; /* Set a modern font */
}

.profile-header {
    text-align: left;
    margin-top: 20px;
    border: 1px solid #6c757d; /* Border for elegance */
    border-radius: 10px; /* Rounded corners */
    background-color: #495057; /* Slightly lighter background */
    padding: 20px; /* Padding inside the profile header */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Increased shadow for depth */
    transition: transform 0.4s, box-shadow 0.4s; /* Transition for transform and shadow */
}

.profile-header:hover {
    transform: translateY(-10px) rotate(2deg); /* Move up and rotate slightly on hover */
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.7); /* Enhanced shadow on hover */
}

.profile-header img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%; /* Circular profile picture */
    border: 3px solid #007bff; /* Border around the image */
}

.description {
    margin-left: 20px;
}

.btn-primary {
    margin-right: 10px; /* Space between buttons */
    background-color: #007bff; /* Primary button color */
    border: none; /* No border */
    transition: background-color 0.3s; /* Transition for button hover */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker blue on hover */
    transform: scale(1.1); /* Slightly scale button on hover */
}

.social-links {
    margin-top: 10px; /* Space above social links */
}

    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex align-items-center profile-header">
            <!-- Profile Image -->
            <img src="assets/img/WhatsApp Image 2024-09-02 at 08.47.26.jpeg" alt="Foto Profil">
            <div class="description">
                <h1>Nasa'i Ghuril Muhazilin</h1>
                <p>
                Halo, saya Ghuril, siswa kelas 12 PPLG 3. Di sini, saya mempersembahkan sebuah website galeri yang tidak hanya menampilkan momen-momen berharga di sekolah, tetapi juga dirancang dengan fitur-fitur inovatif yang memikat. Melalui proyek ini, saya berkesempatan untuk mengasah keterampilan yang telah saya pelajari dan menciptakan platform yang menarik serta interaktif.

Website ini adalah wadah untuk mengabadikan setiap kegiatan, prestasi, dan kenangan indah yang telah kami jalani di SMKN 4 Bogor. Mari bergabung dan eksplorasi setiap sudut yang penuh inspirasi!
                </p>
                <div class="social-links">
    <a href="https://www.instagram.com/rilloxygen/" class="btn btn-primary">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="https://github.com/ghuril" class="btn btn-primary">
    <i class="fas fa-user"></i>
</a>

    <a href="https://www.youtube.com/@NasaiGhuril" class="btn btn-primary">
        <i class="fab fa-youtube"></i>
    </a>
</div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
