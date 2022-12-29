<?php
include "inclaude\db.php";
include "inclaude\header.php";
?>
<?php
if (!isset($_SESSION["id_users"]) or empty($_SESSION["id_users"])) {
    echo "<script>alert('silahkan login dulu oiii');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}
//mendapatkan id_users dari url
$idbayar = $_GET["id"];
$ambil = $connection->query("SELECT * FROM beli WHERE id_beli='$idbayar'");
$detbayar = $ambil->fetch_assoc();

//mendapatkan id_users yang beli
$id_users_beli = $detbayar["id_users"];
//mendapatkan id_users yang login
$id_users = $_SESSION["id_users"];

if ($id_users !== $id_users_beli) {
    echo "<script>alert('Maaf kembalilah data anda tidak cocok');</script>";
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
        <h2>Konfirmasi Pembayaran</h2>
        <p>kirim bukti pembayaran Anda disini</p>
        <div class="alert alert-info">Total pembayaran yang harus anda bayar <strong>Rp.
                <?php echo number_format($detbayar["total_beli"]) ?>
            </strong></div>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Penyetor : </label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="">Bank : </label>
                <input type="text" class="form-control" name="bank">
            </div>
            <div class="form-group">
                <label for="">Jumlah : </label>
                <input type="number" class="form-control" name="jumlah" min="1">
            </div>
            <div class="form-group">
                <label for="">Foto Bukti : </label>
                <input type="file" class="form-control" name="bukti">
                <p class="text-danger">foto bukti maksimal 2MB</p>
            </div>
            <button class="btn btn-dark" name="kirim">Kirim</button>
        </form>
    </div>

    <?php
    //fungsi tombol kirim
    if (isset($_POST["kirim"])) {

        /// upload foto
        $namabukti = $_FILES["bukti"]["name"];
        $lokasibukti = $_FILES["bukti"]["tmp_name"];
        $namafiks = date("YmdHis") . $namabukti;
        move_uploaded_file($lokasibukti, "bukti_pembayaran/$namafiks");

        $nama = $_POST["nama"];
        $bank = $_POST["bank"];
        $jumlah = $_POST["jumlah"];
        $tanggal = date("Y-m-d");

        // simpan pembayaran
        $connection->query("INSERT INTO pembayaran(id_beli,nama,bank,jumlah,tanggal,bukti)
        VALUES ('$idbayar','$nama','$bank','$jumlah','$tanggal','$namafiks') ");

        //update status
        $connection->query("UPDATE beli SET status_pembelian='sudah melakukan pembayaran'
        WHERE id_beli='$idbayar'");

        echo "<script>alert('Pembayaran anda berhasil');</script>";
        echo "<script>location='riwayat.php';</script>";
    }
    ?>

</body>

</html>