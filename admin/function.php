<?php 
function getTotalBarang(){
    global $connection;
    $query = "SELECT * FROM `barang`";
    $barang = mysqli_query($connection, $query);
    $totalBarang = mysqli_num_rows($barang);
    echo '<h1 class="card-title text-center">'.$totalBarang.'</h1>';
}
function getTotalStock(){
    global $connection;
    $query = "SELECT SUM(stock) as totalStock FROM barang";
    $stock = mysqli_query($connection, $query);
    $totalStock = mysqli_fetch_assoc($stock);
    echo '<h1 class="card-title text-center">'.$totalStock['totalStock'].'</h1 >';
}

?>