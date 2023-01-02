<?php
include "inclaude\db.php";
include "inclaude\header.php";

$connection = new mysqli("localhost", "masdaffa", "olehmastegar", "afterguilty");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poiret+One&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\animate.css">
    <link rel="stylesheet" href="assets\css\bootstrap-select.min.css">
    <link rel="stylesheet" href="assets\css\main.css">
    <title>After Guilty.Store</title>

    <head>

    <body>
        <h2 class="text-center fw-bold" style="font-family: 'Roboto';">PRODUK</h2>
        <hr>
        <div class="row ml-2">
            <?php $ambil = $connection->query("SELECT * FROM barang"); ?>
            <?php while ($perbarang = $ambil->fetch_assoc()) { ?>
                <div class="col-md-3">
                    <div class="thumbnail shadow p-3 mb-5" style="border-radius: 10px;">
                        <img src="hasil_gambar/<?php echo $perbarang['gambar']; ?>" style="width: 20vw; background-color: #00000010; border-radius: 5px;">
                        <div class="cantion">
                            <a href="detail.php?id=<?php echo $perbarang['id']; ?>" style="color: #181818;">
                                <h6><?php echo $perbarang['nama'] ?></h6>
                            </a>
                            <h5>Rp.<?php echo number_format($perbarang['harga']) ?></h5>
                            <a href="beli.php?id=<?php echo $perbarang['id']; ?>" class="btn btn-outline-white mr-30" style="background: #222222;">Beli</a>
                            <span class="btn btn-outline-white" style="color: #222222;">Stock: <?php echo $perbarang['stock'] ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Footer -->
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">© 2022 AfterGuilty Store. All Right Reserved</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <a href="https://www.instagram.com/afterguilty.store/" style="color: #181818;"><i class="bi bi-instagram" style="margin-right: 10px;"></i></a>
                    <a href="" style="color: #181818;"><i class="bi bi-facebook" style="margin-right: 10px;"></i></a>
                    <a href="" style="color: #181818;"><i class="bi bi-twitter" style="margin-right: 10px;"></i></a>
                </ul>
            </footer>
        </div>

    </body>

</head>