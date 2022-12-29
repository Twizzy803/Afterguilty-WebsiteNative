<?php
include "inclaude\db.php";
include "inclaude\header.php";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
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
    <?php
    if (!isset($_SESSION["pembeli"]) or empty($_SESSION["pembeli"])) {
        echo "<script>alert('silahkan login dulu oiii');</script>";
        echo "<script>location='login.php';</script>";
        exit();
    }
    ?>
    <section class="riwayat">
        <div class="container">
            <h3>Riwayat Belanja <?php echo $_SESSION["nama_lengkap"] ?></h3>
        </div>
    </section>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Total</th>
                <th scope="col">Pilih</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php $id_users = $_SESSION['id_users'];
            $ambil = $connection->query("SELECT * FROM beli WHERE id_users='$id_users'");
            while ($pecah = $ambil->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $pecah["tanggal_beli"] ?></td>
                    <td><?php echo $pecah["status_pembelian"] ?></td>
                    <td>Rp. <?php echo number_format($pecah["total_beli"]) ?></td>
                    <td>
                        <a href="nota.php?id=<?php echo $pecah["id_beli"] ?>" class="btn btn-info">Nota</a>
                        <a href="pembayaran.php?id=<?php echo $pecah["id_beli"]; ?>" class="btn btn-success">Pembayaran</a>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php } ?>
        </tbody>



</body>

</html>