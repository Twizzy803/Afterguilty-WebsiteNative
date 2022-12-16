<?php 
 $host            = "localhost";
 $user            = "root";
 $password        = "";
 $db              = "coba";

 $koneksi         = mysqli_connect($host,$user,$password,$db);
 if (!$koneksi) {
  die("tidak terhubung");
}
$merek            = "";
$harga            = "";
$deskripsi        = "";
$gambar           = "";
$sukses           = "";
$error            = "";

if (isset($_POST['simpan'])) {
  $merek          = $_POST['merek'];
  $harga          = $_POST['harga'];
  $deskripsi      = $_POST['deskripsi'];
  $gambar         = $_POST['gambar'];

  if ($merek && $harga && $deskripsi && $gambar) {
    $sql1 = "insert into barang (merek,harga,deskripsi,gambar) values ('$merek','$harga','$deskripsi','$gambar')";
    $q1 = mysqli_query($koneksi, $sql1);
    if ($q1) {
      $sukses = "Berhasil Menyimpan Data";
    } else {
      $error = "Gagal Menyimpan Data";
    }
  } else {
    $error = "Silahkan Isi Data Terlebih Dahulu";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@800&display=swap" rel="stylesheet">
    <title>Admin Base</title>
  </head>
  <body>
    <div class="basis">
      <div class="base">
        <h2 class="txt_admin">Admin</h2>
        <h2 class="txt_base">Base</h2>
        <div class="btn_input">
          <a href="#" class="txt_input">Input</a>
        </div>
        <div class="btn_user">
          <a href="admin_user.html" class="txt_user">User</a>
        </div>
      </div>
      <div class="container">
        <form action="" method="post">
          <div>
            <label for="merek" class="merek">Merek</label>
            <div>
              <input type="text" class="kolom_input_merek" id="merek" name="merek" value="" />
            </div>
          </div>
          <div>
            <label for="harga" class="harga">Harga</label>
            <div>
              <input type="text" class="kolom_input_harga" id="harga" name="harga" value=""/>
            </div>
          </div>
          <div>
            <label for="deskripsi" class="deskripsi">Deskripsi</label>
            <div>
              <input type="text" class="kolom_input_deskripsi" id="desekripsi" name="deskripsi" value=""/>
            </div>
          </div>
          <div>
            <label for="gambar" class="gambar">Gambar</label>
            <div>
              <input type="file" name="gambar" id="gambar" class="kolom_input_gambar" />
            </div>
          </div>
          <div>
            <input type="submit" value="Simpan Data" name="simpan" class="btn">
          </div>
        </form>
      </div>
      <div class="div_data">
        <div class="header">
          <h3 class="data">Data Barang</h3>
          <form action="" method="post">
            <table class="table">
              <thead>
                <tr class="tr">
                  <th scope="col" class="thMerek">Merek</th>
                  <th scope="col" class="thHarga">Harga</th>
                  <th scope="col" class="thDeskripsi">Deskripsi</th>
                  <th scope="col" class="thGambar">Gambar</th>
                </tr>
                <tbody>

                  <?php
                    $sql2         = "select * from barang order by id_barang desc";
                    $q2           = mysqli_query($koneksi, $sql2);
                    $urut         = 1;
                    while ($r2    = mysqli_fetch_array($q2)) {
                    $id           = $r2['id_barang'];
                    $merek        = $r2['merek'];
                    $harga        = $r2['harga'];
                    $deskripsi    = $r2['deskripsi'];
                    $gambar       = $r2['gambar'];

                  ?>
                  <tr scope="row" class="trMerek"><?php echo $merek ?></tr>
                  <tr scope="row" class="trHarga"><?php echo $harga ?></tr>
                  <tr scope="row" class="trDeskripsi"><?php echo $deskripsi ?></tr>
                  <tr scope="row" class="trGambar>"<?php echo $gambar ?></tr>
                  <?php
                  }
                  ?>
                </tbody>
              </thead>
            </table>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
