<?php 
include "inclaude\db.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>After Guilty.Store</title>
  <link rel="stylesheet" href="css\RegisterPage.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
</head>

<body>
  <!-- menu login dan register -->
  <!-- <header id="rectangel">
    <div class="Tulisan1">
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <p>Find A Store In Your Location</p>
    </div>
    <div class="Tulisan2">
      <p>Free Shipping For All Members. Create Your Account Now !</p>
    </div>
    <div id="Daftar">
      <nav>
        <ul>
          <li>
            <select name="Region" id="wilayah">
              <option selected>Region</option>
              <option value="indonesia">Indonesia</option>
              <option value="english">English</option>
            </select>
          </li>
          <!-- <li>|<a href="#registers">Register</a>|</li>
                    <li><a href="#logins">Login</a></li> -->
        <!-- </ul>
      </nav>
      <div class="menu">
        <i class="ri-menu-3-fill"></i>
      </div>
    </div>

  </header> -->
  <!-- bagian logo,pencarian dan icon beli dan kawan-kawanya -->
  <div class="logo">
    <div class="nama1">
      <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine
            " data-aos-duration="2000">After Guilty</p>
    </div>
    <div class="nama2">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Poiret+One&display=swap" rel="stylesheet">
      <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">Store</p>
    </div>
    <div class="btn-cari">
      <input class="boxs-pencarian" type="text" placeholder="What are you looking for?" required.>
      <div class="gm-cari">
        <img src="gambar\search-interface-symbol (1).png" alt="gambar">
      </div>
    </div>
    <div class="btn-kanan">
      <div class="btn-beli">
        <a href=""><img src="https://img.icons8.com/external-pixer-icons-pack-dmitry-mirolyubov/44/000000/external-cart-retail-pixer-icons-pack-dmitry-mirolyubov.png" /></a>
      </div>
      <div class="btn-favor">
        <a href=""><img src="gambar\favorit.png"></a>
      </div>
      <!-- <div class="btn-profil">
        <a href=""><img src="gambar\avatar.png"></a>
    </div> -->
    </div>
  </div>

  <div class="toko">
    <h1>After Guilty</h1>
    <p>Become AfterGuilty Member</p>
  </div>
  <!-- Kolom register -->
  <div class="email-form">
    <label for="email" class="form-label">Email</label> <br>
    <input type="email" class="form-control" id="email" placeholder="name@example.com">
  </div>

  <div class="password-form">
    <label for="password" class="form-label">Password</label> <br>
    <input type="password" class="form-control" id="password" placeholder="********">
  </div>

  <div class="firstname-form">
    <label for="first name" class="form-label">Nama Lengkap</label> <br>
    <input type="text" class="form-control" id="first name" placeholder="">
  </div>

  <div class="lastname-form">
    <label for="last name" class="form-label">Last Name</label> <br>
    <textarea class="form-control" name="alamat" required></textarea>
  </div>

  <!-- Button gender list -->
  <!-- <button type="button" class="btn-male"><a href="#male">Male</a></button>
  <button type="button" class="btn-female"><a href="#female">Female</a></button> -->

  <!-- <div class="gender">

    <!-- <h3 class="mb-2 pb-1">Gender: </h3> 

    <div class="form-check1">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked="" autocompleted="">
      <label class="form-check-label" for="femaleGender">Female</label>
    </div>

    <div class="form-check2">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" autocompleted="">
      <label class="form-check-label" for="maleGender">Male</label>
    </div>
  </div> -->
  <!-- Check List -->
  <!-- <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
        Sign up for email updates from AfterGuilty on product,<br>offers and your member benefits
    </label> <br> <br>
    <p>By creating an account, you agree to AfterGuilty's Privacy Policy and Terms of Use</p>
  </div> -->

  <!-- Button Join Us -->
  <button type="button" class="btn-join"><a href="#join">DAFTAR</a></button>
  <p class="sign-in">Sudah Punya akun ? <a href="LoginPage.php">Masuk</a></p>

  <!-- Footer -->
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="list-1">
          <h2>Help</h2> <br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Exchange & Return</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Payment Information</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Track Yout Order</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          </ul>
        </div>

        <div class="list-2">
          <h2>Bussiness</h2> <br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pop Up Store</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Career</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">News </a></li>
          </ul>
        </div>

        <div class="list-3">
          <h2>Follow Us</h2> <br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="ri-instagram-fill"></i>After Guilty</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="ri-facebook-box-fill"></i></a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="ri-twitter-fill"></i></a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="ri-youtube-fill"></i></a></li>
          </ul>
        </div>

        <div class="list-4">
          <h2>Download Mobile App</h2> <br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="gambar\Appstore.png" alt="AppStore"></a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="gambar\Goolgleplay.png" alt="PlayStore"></a></li>
          </ul>
        </div>
      </div>
      <hr style="margin-left:10%; margin-right:-10%;">
      <p class="text-center text-muted">©2022 AfterGuilty Store. All Right Reserved</p>
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