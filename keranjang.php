<?php
include "inclaude\db.php";
include "inclaude\header.php";
?>
<?php 
if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])){
    echo "<script>alert('Keranjang kosong, Silahkan belanja dulu!!')</script>";
    echo "<script>location='index.php'</script>";
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
    <div class="bd-example" style="position: relative;top: -32px;">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col"></th>
                    <th scope="col">Produk</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                    <th scope="col">Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($_SESSION["keranjang"] as $id => $jumlah) : ?>
                    <!-- Menampilkan Produk yang sedang diperulangkan berdasarkan id -->
                    <?php
                    $ambil = $connection->query("SELECT * FROM barang WHERE id='$id'");
                    $pecah = $ambil->fetch_assoc();
                    $subharga = $pecah["harga"] * $jumlah;


                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><img src="hasil_gambar/<?php echo $pecah["gambar"]; ?>" style="width: 50px;"></td>
                        <td><?php echo $pecah["nama"]; ?></td>
                        <td><?php echo $pecah["ukuran"]; ?></td>
                        <td>Rp.<?php echo number_format($pecah["harga"]); ?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td>Rp.<?php echo number_format($subharga); ?></td>
                        <td>
                        <a class='btn btn-danger btn-sm' href='hapus.php?id=<?php echo $id ?>'>Hapus</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="checkout.php" class="btn btn-outline-dark text-white" style="background: #222222; float: right;margin-right: 10px; width: 15%;">Check Out</a>
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        src = "js\LandingPage.js"
    </script>
    <script src="js\MyAccountPage.js"></script>
</body>

</html>