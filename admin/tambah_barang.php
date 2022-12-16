<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "afterguilty";

$connection = new mysqli($servername, $username, $password, $database);

$nama   = "";
$ukuran = "";
$harga  = "";
$stock  = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama = $_POST["nama"];
  $ukuran = $_POST["ukuran"];
  $harga = $_POST["harga"];
  $stock = $_POST["stock"];

  $errorMessage = "";
  $successMessage = "";

  do {
    if (empty($nama) || empty($ukuran) || empty($harga) || empty($stock)) {
      $errorMessage = "Tolong Diisi Semua";
      break;
    }

    $sql = "INSERT INTO barang (nama, ukuran, harga, stock)" .
      "VALUES ('$nama', '$ukuran', '$harga', '$stock')";
    $result = $connection->query($sql);

    if (!$result) {
      $errorMessage = "Invalid query: " . $connection->$error;
      break;
    }

    $nama   = "";
    $ukuran = "";
    $harga  = "";
    $stock  = "";

    $successMessage = "Barang Sudah Ditambahkan";

    header("location: barang.php");
    exit;
  } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css\style_user.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poiret+One&family=Roboto&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Admin Base</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">After Guilty<p>ADMIN</p></a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>

      <div class="icon">
        <i class="ri-mail-fill" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Surat Masuk"></i>
        <i class="ri-notification-fill" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Notifikasi"></i>
        <i class="ri-logout-box-r-line" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Keluar"></i>
      </div>
    </div>
  </nav>

  <div class="menu_tambah no-gutters">
    <div class="col-md-2 bg-dark pr-3 pt-4">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="admin_user.php"><i class="ri-dashboard-2-fill mr-2"></i> Dashboard</a>
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
      <h3><i class="ri-file-list-2-fill mr-2"></i>TAMBAH BARANG</h3>
      <hr>

      <?php
      if (!empty($errorMessage)) {
        echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
           <strong>$errorMessage</strong>
           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
           </div>
        ";
      }
      ?>

      <form method="post">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Ukuran</label>
          <div class="col-sm-6">
            <select name="ukuran" id="ukuran" class="form-control" required>
              <?php $ukuran = $afterguilty['ukuran']; ?>
              <option value="M" <?= $ukuran == 'M' ? 'selected' : null ?>>M</option>
              <option value="L" <?= $ukuran == 'L' ? 'selected' : null ?>>L</option>
              <option value="XL" <?= $ukuran == 'XL' ? 'selected' : null ?>>XL</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Harga</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Stock</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="stock" value="<?php echo $stock; ?>">
          </div>
        </div>

        <?php
        if (!empty($successMessage)) {
          echo "
            <div class='row mb-3'>
              <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong>$successMessage</strong>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
              </div>
           </div>
            ";
        }
        ?>

        <div class="row mb-3">
          <div class="offset-sm-3 col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          <div class="offset-sm col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="barang.php" role="button">Batal</a>
          </div>
        </div>

      </form>


    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js\admin_user.js"></script>
</body>

</html>