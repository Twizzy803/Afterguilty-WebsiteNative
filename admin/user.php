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
        <div class="col-md-2 bg-dark pr-3 pt-4" style="z-index: 99;position: fixed;padding-bottom: 20%;">
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
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>Selamat Datang <br><?php echo $_SESSION['email'] ?></strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="..\inclaude\logout.php">Sign out</a></li>
                    </ul>
                </div>
            </ul>
        </div>

        <div class="col-md-10 p-5 pt-3" style="margin-left: 16%;">
            <h3><i class="ri-user-fill"></i>USER</h3>
            <hr>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Role</th>
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
                    $no = 1;
                    $sql  = "SELECT * FROM users, users_login WHERE users.id_users = users_login.id_users";
                    $result = $connection->query($sql);

                    if (!$result) {
                        die("invalid query: " . $connection->error);
                    }

                    while ($row = $result->fetch_assoc()) {
                        echo "
            <tr>
            <td>$no</td>
            <td>$row[nama_lengkap]</td>
            <td>$row[alamat]</td>
            <td>$row[role]</td>
            <td>
              <a class='btn btn-primary btn-sm'href='edit_user.php?id_users=$row[id_users]'>Edit</a>
              <a class='btn btn-danger btn-sm' href='hapus_user.php?id_users=$row[id_users]'>Hapus</a>
            </td>
          </tr>";
                        $no++;
                    }
                    ?>




                </tbody>
            </table>

        </div>
    </div>