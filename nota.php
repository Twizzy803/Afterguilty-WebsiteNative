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
    <title>After Guilty.Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poiret+One&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>

<body>
    <section class="konten">
        <div class="container">
            <h2>Detail Pembelian</h2><br>
            <?php
            $ambil = $connection->query("SELECT * FROM beli INNER JOIN users ON beli.id_users=users.id_users
                                     INNER JOIN users_login ON beli.id_users=users_login.id_users
                                        WHERE beli.id_beli ='$_GET[id]'");
            $nota = $ambil->fetch_assoc();
            ?>
            <!-- <pre><?php print_r($nota); ?></pre> -->

            <?php 
            //mendapatkan id user yang melakukan pembelian
            $id_usersbeli = $nota["id_users"];
             
            // id user yang melakukan login
            $id_userslogin = $_SESSION["id_users"];

            if($id_usersbeli!==$id_userslogin){
                echo "<script>alert('Data tidak sesuai');</script>";
                echo "<script>location='riwayat.php';</script>";
                exit();
            }

            ?>

            <div class="row">
                <div class="col-md-4">
                    <h3>Pembelian</h3>
                    <strong>No. Pembelian: <?php echo $nota['id_beli']; ?></strong><br>
                    Tanggal: <?php echo $nota['tanggal_beli']; ?> <br>
                    Total: Rp. <?php echo number_format($nota['total_beli']); ?>
                </div>
                <div class="col-md-4">
                    <h3>Pembeli</h3>
                    <strong><?php echo $nota['nama_lengkap']; ?></strong><br>
                    <p>
                        <?php echo $nota['telp']; ?><br>
                        <?php echo $nota['email']; ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Pengiriman</h3>
                    <strong><?php echo $nota['nama_kota']; ?></strong><br>
                    Ongkos Kirim : Rp. <?php echo number_format($nota['tarif']); ?><br>
                    Alamat: <?php echo $nota['alamat_pengiriman']; ?>
                </div>
            </div>

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

            <div class="row">
                <div class="col-md-7">
                    <div class="alert alert-info">
                        <p>
                            Silahkan melakukan pembayaran Rp. <?php echo number_format($nota['total_beli']); ?>
                            ke <br>
                            <strong>BANK BNI 120-2132093-12930 After Guilty.Store</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

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

</body>

</html>