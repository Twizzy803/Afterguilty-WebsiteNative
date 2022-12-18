<?php 
include "inclaude\db.php";
include "inclaude\header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar</title>
    <link rel="stylesheet" href="assets\css\login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poiret+One&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>

<body>
    <div id="toko">
        <h1 align="center" style="font-family:'Poiret One', cursive;font-weight: lighter;font-size:5vw;">After Guilty</h1>
        <p align="center" style=" font-family: 'roboto', sans-serif;">Become AfterGuilty Member</p>
        <form action="inclaude\cekdaftar.php" method="POST">
            <div class="mb-3" style="width: 30%;margin-left:35%;">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="" name="nama" class="form-control" id="nama" aria-describedby="namaHelp" placeholder="Nama Lengkap">
            </div>
            <div class="mb-3" style="width: 30%;margin-left:35%;">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="name@example.com">
            </div>
            <div class="mb-3" style="width: 30%;margin-left:35%;">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="password" placeholder="********">
            </div>
            <div class="form-group" style="width: 30%;margin-left:35%;margin-bottom:20px;">
                <label for="alamat">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat" required></textarea>
            </div>
            <button name="daftar" type="submit" class="btn btn-primary" style="margin-left: 40%;width: 20%; background: #181818;margin-bottom: 5px;">DAFTAR</button>
            <p class="sign-in" align="center">Sudah Punya akun?<a href="login.php">Masuk</a></p>
        </form>
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
                <a href="" style="color: #181818;"><i class="bi bi-instagram" style="margin-right: 10px;"></i></a>
                <a href="" style="color: #181818;"><i class="bi bi-facebook" style="margin-right: 10px;"></i></a>
                <a href="" style="color: #181818;"><i class="bi bi-twitter" style="margin-right: 10px;"></i></a>
            </ul>
        </footer>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/bootstrap-select.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        src = "js\LandingPage.js"
    </script>
</body>

</html>