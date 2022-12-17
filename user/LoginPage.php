<?php
include "inclaude\header.php";
include "inclaude\db.php";
// $email = "";
// $password = "";
// $err = "";

//   if(isset($_POST['login'])) {
//     $email      =$_POST['email'];
//     $password   =$_POST['password'];
//       if ($email == '' or $password == '') {
//         $err .= "<li>Silahkan masukan email dan password</li>";
//       }
//       if(empty($err)) {
//         $sql1 ="SELECT * FROM `user_login` WHERE email = '$email'";
//         $q1 = mysqli_query($connection,$sql1);
//         $r1 = mysqli_fetch_array($q1);
//         if ($r1['password'] != ($password)) {
//           $err = "<li>Akun tidak ditemukan</li>";
//         }
//       }
//       if(empty($err)) {
//         $_SESSION['admin_email'] = $email;
//         header("location:admin_user.php");
//         exit();
//       }

//   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>After Guilty.Store</title>
  <link rel="stylesheet" href="assets\css\LoginPage.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poiret+One&family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
  <!-- menu login dan register -->
  <!-- <header class="py-3 mb-4 border-bottom">
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header> -->

  <div class="toko">
    <h1>After Guilty</h1>
    <p>Your Account For Everything AfterGuilty</p>
  </div>
  <!-- Kolom register -->
  <?php if (isset($_GET['gagal'])) : ?>
    <button type="button" class="btn btn-danger mb-2" style="width: 100%">Email atau Password Anda Salah</button>
  <?php endif; ?>

  <?php if (isset($_GET['terdaftar'])) : ?>
    <button type="button" class="btn btn-success mb-2" style="width: 100%">Pendaftaran Berhasil Silahkan Masuk</button>
  <?php endif; ?>

  <form action="inclaude\ceklogin.php" method="POST">
    <div class="email-form">
      <label for="email" class="form-label">Email</label> <br>
      <input type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>

    <div class="password-form">
      <label for="password" class="form-label">Password</label> <br>
      <input type="password" class="form-control" id="password" placeholder="********">
    </div>

    <button name="masuk" type="submit" class="btn-join" style="color: #fff; width: 30%;">MASUK</button>
    <p class="sign-in">Belum memiliki akun?<a href="RegisterPage.php">Daftar</a></p>
  </form>


  <!-- Footer -->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#twitter"></use>
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#instagram"></use>
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#facebook"></use>
            </svg></a></li>
      </ul>
    </footer>
  </div>



  <!-- Option 1: Bootstrap Bundle js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    src = "js\LandingPage.js"
  </script>
</body>

</html>