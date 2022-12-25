<?php 
session_start();


// mendapatkan id dari url
$id = $_GET['id'];

//jika sudah ada barang,maka jumlahnya > 1
if(isset($_SESSION['keranjang'][$id])){
    $_SESSION['keranjang'][$id]+=1;
}
//jika masih kosong, maka dianggap membeli 1
else{
    $_SESSION['keranjang'][$id] = 1;
}

echo "<script>alert('Produk sudah ditambahkan ke keranjang Anda')</script>";
echo "<script>location='keranjang.php'</script>";
?>