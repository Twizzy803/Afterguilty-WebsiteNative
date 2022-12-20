<?php
include "inclaude\db.php";
include "inclaude\header.php";
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
</head>

<body>

  <div class="container col-xxl-8 py-5" style="margin-top: -5%;width: 100%;">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5" style="border-radius: 7px;">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="gambar\gambar_home1-01.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h2 class="display-5 fw-bold lh-1 mb-3">Pakaian terbaik, akan membawa kamu ke tempat yang luar biasa.</h2>
        <p class="lead fw-lighter">Ketika kalain membeli pakaian kalian pasti memilih dengan teliti begitu juga untu memilih pasangan hidup kalian.</p><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" style="background-color: #222222;">Produk</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <h2 class="display-5 fw-bold lh-1 mb-3">Pakaian merupakan topeng manusia, perilaku merupakan wujud sebenarnya.</h2>
        <form action="" method="POST">
          <input class="form-control me-2" name="search" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-white" name="submit" type="submit" style="background-color: #222222;">Search</button>
          </form>
      </div>
      <div class="col-lg-6">
        <img src="gambar\gambar_home2.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
    </div>
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