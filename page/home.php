<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Transisi Teks</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .text-elegant {
            font-size: 3rem;
            position: relative;
            color: #333;
            overflow: hidden;
            display: inline-block;
            transition: color 0.3s ease;
        }
        .text-elegant::before {
            content: "GALERI SEKOLAH";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            color: #3498db; /* Warna teks saat hover */
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }
        .text-elegant:hover {
            color: transparent; /* Menghilangkan warna asli saat hover */
        }
        .text-elegant:hover::before {
            opacity: 1;
            transform: translateY(0);
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="my-4 p-5 bg-white rounded">
            <div class="py-5 text-black">
                <p class="display-5 fw-bold text-elegant">GALERI SEKOLAH</p>
            </div>
        </div>
    </div>
</body>
</html>


<div class="container">
    <div class="row">
        <?php 
        $tampil=mysqli_query($conn, "SELECT * FROM foto INNER JOIN user ON foto.UserID=user.UserID");
        foreach($tampil as $tampils):
        ?>
       <div class="col-6 col-md-4 col-lg-3 mb-4">
    <div class="card">
        <img src="uploads/<?= $tampils['NamaFile'] ?>" class="object-fit-cover" style="aspect-ratio: 16/9;">
        <div class="card-body">
            <h5 class="card-title"><?= $tampils['JudulFoto'] ?></h5>
            <p class="card-text text-muted">by: <?= $tampils['Username'] ?></p>
            <a href="?url=detail&&id=<?= $tampils['FotoID'] ?>" class="btn btn-primary">Detail</a>
            <a href="hapus.php?id=<?= $photo['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this photo?');"> Delete</a>


        </div>
    </div>
</div>
        <?php endforeach;
         if (isset($_GET['message'])): ?>
            <div class="alert alert-success"><?= htmlspecialchars($_GET['message']) ?></div>
        <?php elseif (isset($_GET['error'])): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div>
        <?php endif; ?>
        
    </div>
</div>