<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Guilty.Store</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\home.css">
</head>

<body>
    <nav class="navbar bg-light shadow bg-body rounded" style="position: fixed;z-index: 9999;width: 100%;">
        <div class="container-fluid">
            <a class="navbar-brand" style="display: flex;font-size:2.5vw;font-family:'Poiret One', sans-serif; align-items: baseline;">After Guilty
                <p style="font-size: 2vw;font-family: 'Inter', sans-serif; font-weight: bold;">.Store</p>
            </a>
            <?php if (isset($_SESSION['email'])) : ?>
                <li class="nav-item">
                    <a class="btn text-dark fw-bold" href="inclaude\logout.php">
                        Keluar
                    </a>
                </li>
            <?php else : ?>
                <div class="nav-item">
                    <a href="daftar.php" class="btn text-dark fw-bold">Daftar</a>
                    <a href="login.php" class="btn text-dark fw-bold">Masuk</a>
                </div>
            <?php endif; ?>
        </div>
    </nav> <br><br><br><br><br>

</body>

</html>