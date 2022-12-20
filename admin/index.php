<?php 
include "inclaude\header.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css\style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poiret+One&family=Roboto&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Admin Base</title>
</head>

<body>
  <div class="menu no-gutters">
  <style display: none;><?php echo $_SESSION['email'] ?></style> 
    <div class="col-md-2 bg-dark pr-3 pt-4">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php"><i class="ri-dashboard-2-fill mr-2"></i> Dashboard</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="barang.php"><i class="ri-file-list-2-fill mr-2"></i> Barang</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="total_penjualan.php"><i class="ri-line-chart-line"></i></i> Total Penjualan</a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-3">
      <h3><i class="ri-dashboard-2-fill mr-2"></i>DASHBOARD</h3>
      <hr>

      <div class="row">
        <div class="card1" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="ri-file-list-2-fill mr-2"></i>
            </div>
            <h5 class="card-title">BARANG</h5>
            <div class="display-4">10</div>
            <a class="detail" href="">
              <p class="card-text text-white">Lihat Detail <i class="ri-arrow-right-s-line"></i></p>
            </a>
          </div>
        </div>

        <div class="card2" style="width: 18rem;">
          <div class="card-body">
            <div class="card2-body-icon">
              <i class="ri-line-chart-line"></i>
            </div>
            <h5 class="card-title">Total Penjualan</h5>
            <div class="display-4">1000</div>
            <a class="detail" href="">
              <p class="card-text text-white">Lihat Detail <i class="ri-arrow-right-s-line"></i></p>
            </a>
          </div>
        </div>


      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js\admin_user.js"></script>
</body>

</html>