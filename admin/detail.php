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
            <h3><i class="ri-information-fill"></i>Detail Pembelian</h3>
            <hr>
            <?php
            $ambil = $connection->query("SELECT * FROM beli INNER JOIN users ON
            beli.id_users=users.id_users INNER JOIN users_login ON beli.id_users=users_login.id_users WHERE beli.id_beli='$_GET[id]'");
            $detail = $ambil->fetch_assoc();
            ?>

            <strong><?php echo $detail['nama_lengkap']; ?></strong>
            <p>
                <?php echo $detail['telp']; ?> <br>
                <?php echo $detail['email']; ?>
            </p>
            <p>
                Tanggal: <?php echo $detail['tanggal_beli']; ?> <br>
                Total: <?php echo number_format($detail['total_beli']); ?>
            </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php $ambil = $connection->query("SELECT * FROM beli_barang WHERE id_beli = '$_GET[id]'"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $pecah['nama_beli']; ?></td>
                            <td><?php echo $pecah['ukuran_beli']; ?></td>
                            <td>Rp.<?php echo number_format($pecah['harga_beli']); ?></td>
                            <td><?php echo $pecah['jumlah']; ?></td>
                            <td>Rp.<?php echo number_format($pecah['subharga']); ?>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="js\admin_user.js"></script>
</body>

</html>