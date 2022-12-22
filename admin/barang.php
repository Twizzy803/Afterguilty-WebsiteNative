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
          <a class="nav-link text-white" href="user.php"><i class="ri-user-fill"></i> User</a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-3">
      <h3><i class="ri-file-list-2-fill mr-2"></i>BARANG</h3>
      <hr>
      <a class="btn btn-primary" href="tambah_barang.php" role="button">Tambah Barang</a>
      <br>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Ukuran</th>
            <th scope="col">Harga</th>
            <th scope="col">Stock</th>
            <th scope="col">Gambar</th>
            <th scope="col">Pilih</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "afterguilty";

          $connection = mysqli_connect($servername, $username, $password, $database);

          // if ($connection) {
          //   echo "Server Connected";
          // } else {
          //   echo "Server not Connected";
          // }
          $no=1;
          $sql  = "SELECT * FROM barang";
          $result = $connection->query($sql);

          if (!$result) {
            die("invalid query: " . $connection->error);
          }

          while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
            <td>$no</td>
            <td>$row[nama]</td>
            <td>$row[deskripsi]</td>
            <td>$row[ukuran]</td>
            <td>Rp.$row[harga]</td>
            <td>$row[stock]</td>
            <td>$row[gambar]</td>
            <td>
              <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
              <a class='btn btn-danger btn-sm' href='hapus.php?id=$row[id]'>Hapus</a>
            </td>
          </tr>
            ";
            $no++;
          }
          ?>




        </tbody>
      </table>

    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js\admin_user.js"></script>
</body>

</html>