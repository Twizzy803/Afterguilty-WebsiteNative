<?php
include "inclaude\header.php";
?>

<?php
$semuadata = array();
$tgl_mulai = "_";
$tgl_selesai = "_";
$status = "";
if (isset($_POST["kirim"])) {
  $tgl_mulai = $_POST["tglm"];
  $tgl_selesai = $_POST["tgls"];
  $status =  $_POST["status"];
  $ambil = $connection->query("SELECT * FROM beli pm LEFT JOIN users pl ON pm.id_users=pl.id_users
                    WHERE status_pembelian='$status' AND tanggal_beli BETWEEN '$tgl_mulai' AND '$tgl_selesai' ");
  while ($pecah = $ambil->fetch_assoc()) {
    $semuadata[] = $pecah;
  }

  // echo "<pre>";
  // print_r($semuadata);
  // echo "</pre>";
}
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
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <title>Admin Base</title>
</head>

<body>
  <div class="menu no-gutters">
    <div class="col-md-2 bg-dark pr-3 pt-4" style="z-index: 99;position: fixed;padding-bottom: 20%;padding-right: 19%; font-size: 1vw;">
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
          <a class="nav-link text-white" href="pembelian.php"><i class="ri-money-dollar-circle-fill"></i> Pembelian</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="laporan.php"><i class="ri-booklet-fill"></i> Laporan</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="user.php"><i class="ri-user-fill"></i> User</a>
          <hr class="bg-secondary">
        </li>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="foto_profile\blank-profile-picture-973460_1280.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Selamat Datang <br><?php echo $_SESSION['email'] ?></strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="profile.php?id=<?php echo $_SESSION['id_users'] ?>">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="..\inclaude\logout.php">Sign out</a></li>
          </ul>
        </div>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-3" style="margin-left: 18%;">
      <h3><i class="ri-booklet-fill"></i>LAPORAN</h3>
      <p> dari <?php echo $tgl_mulai ?> hingga <?php echo $tgl_selesai ?></p>
      <hr><br>
      <form action="" method="PO18">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Tanggal Mulai</label>
              <input type="date" class="form-control" name="tglm" value="<?php echo $tgl_mulai ?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Tanggal Selesai</label>
              <input type="date" class="form-control" name="tgls" value="<?php echo $tgl_selesai ?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Status</label>
              <select name="status" id="" class="form-control">
                <option value="">Pilih</option>
                <option value="Belum dibayar  <?php echo $status == "Belum dibayar" ? "selected" : "";   ?>  ">Belum dibayar</option>
                <option value="Barang Dikirim  <?php echo $status == "Barang Dikirim" ? "selected" : "";   ?>  ">Barang Dikirim</option>
                <option value="Barang sudah sampai  <?php echo $status == "Barang sudah sampai" ? "selected" : "";   ?>  ">Barang sudah sampai</option>
                <option value="Lunas  <?php echo $status == "Lunas" ? "selected" : "";   ?>  ">Lunas</option>
                <option value="Batal  <?php echo $status == "Batal" ? "selected" : "";   ?>  ">Batal</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">&nbsp;</label><br>
              <button class="btn btn-primary" name="kirim"><i class="ri-menu-fill"></i>Lihat Laporan</button>
            </div>
          </div>
        </div>
      </form>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php $total = 0; ?>
          <?php foreach ($semuadata as $key => $value) : ?>
            <?php $total += $value['total_beli'] ?>
            <tr>
              <td><?php echo $key + 1; ?></td>
              <td><?php echo $value["nama_lengkap"]; ?></td>
              <td><?php echo date("d F Y", strtotime($value["tanggal_beli"])); ?></td>
              <td>Rp. <?php echo number_format($value["total_beli"]); ?></td>
              <td><?php echo $value["status_pembelian"] ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="3">Total</th>
            <th>Rp. <?php echo number_format($total) ?></th>
            <th></th>
          </tr>
        </tfoot>
    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js\admin_user.js"></script>
</body>

</html>