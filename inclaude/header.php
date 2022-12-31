<?php
ob_start();
session_start(); ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Guilty.Store</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\home.css">
</head>

<body>
    <nav class="navbar bg-light shadow bg-body rounded" style="position: fixed;z-index: 9999;width: 100%;">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand" style="display: flex;font-size:2.5vw;font-family:'Poiret One', sans-serif; align-items: baseline;">After Guilty
                <p style="font-size: 2vw;font-family: 'Inter', sans-serif; font-weight: bold;">.Store</p>
            </a>
            <div class="nav-item">
                <a href="keranjang.php" style="color: #222222;margin-right: 10px;"><i class="ri-shopping-cart-fill" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Keranjang"></i></a>
            </div>
            <div class="nav-item">
                <a href="riwayat.php" style="color: #222222;"><i class="ri-history-line" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Riwayat"></i></a>
            </div>

            <?php if (isset($_SESSION['email'])) : ?>
                <li class="nav-item" style="margin-left: 56%;">
                    <a class="btn text-dark fw-bold" href="inclaude\logout.php">Keluar</a>
                </li>
                <?php if ($_SESSION['role'] == 'admin') {
                    echo "<a class='btn text-dark fw-bold' href='admin\index.php'>Admin</a>";
                } ?>
            <?php else : ?>
                <div class="nav-item">
                    <a href="daftar.php" class="btn text-dark fw-bold">Daftar</a>
                    <a href="login.php" class="btn text-dark fw-bold">Masuk</a>
                </div>
            <?php endif; ?>
        </div>
    </nav><br><br><br><br><br>
    <?php if (isset($_GET['dilarang'])) : ?>
        <div class="container">
            <button type="button" class="btn btn-danger mb-4 uppercase" style="width: 100%">anda bukan admin !</button>
        </div>
    <?php endif; ?>



</body>

</html>