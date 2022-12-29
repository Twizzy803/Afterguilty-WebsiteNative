<?php
include "inclaude\db.php";
include "inclaude\header.php";

$id_beli = $_GET["id"];

$ambil = $connection->query("SELECT * FROM pembayaran
LEFT JOIN beli ON pembayaran.id_beli=beli.id_beli WHERE beli.id_beli='$id_beli'");
$detbay = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($detbay);
// echo "</pre>";
///belum ada data pembayaran
if (empty($detbay)) {
    echo "<script>alert('belum ada data pembayaran')</script>";
    echo "<script>location='riwayat.php';</script>";
    exit();
}

///data user yg bayar tidak sesuai dengan login
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

if ($_SESSION["id_users"] !== $detbay["id_users"]) {
    echo "<script>alert('data anda tidak cocok')</script>";
    echo "<script>location='riwayat.php';</script>";
    exit();
}
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
    <div class="container">
        <h3>Lihat Pembayaran</h3>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $detbay["nama"]; ?></td>
                    </tr>
                    <tr>
                        <th>Bank</th>
                        <td><?php echo $detbay["bank"]; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td><?php echo $detbay["tanggal"]; ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <td>Rp. <?php echo number_format($detbay["jumlah"]); ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <img src="bukti_pembayaran/<?php echo $detbay["bukti"] ?>" alt="" style="width: 400px;">
            </div>
        </div>
    </div>



</body>

</html>