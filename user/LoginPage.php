

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>After Guilty.Store</title>
  <link rel="stylesheet" href="css\LoginPage.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
  <!-- menu login dan register -->
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">  
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">After Guilty</span>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
    </div>
  </header>

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

  <div class="email-form">
    <label for="email" class="form-label">Email</label> <br>
    <input type="email" class="form-control" id="email" placeholder="name@example.com">
  </div>

  <div class="password-form">
    <label for="password" class="form-label">Password</label> <br>
    <input type="password" class="form-control" id="password" placeholder="********">
  </div>

  <!-- Check List -->
  <!-- <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Keep me sign in <a href="#" style="position: relative;left:12%;color:rgb(255, 0, 0);">Forgotten your password ?</a>
    </label> <br> <br>
    <p>By logging in, you agree to AfterGuilty's Privacy Policy and Terms of Use</p>
  </div> -->

  <!-- Button Join Us -->

  <button name="masuk" type="submit" class="btn-join" style="color: #fff; width: 30%;">MASUK</button>
  <p class="sign-in">Belum memiliki akun?<a href="RegisterPage.php">Daftar</a></p>

  <!-- Footer -->
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
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