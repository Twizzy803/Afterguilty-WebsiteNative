<?php 
function getTotalBarang(){
    global $connection;
    $query = "SELECT * FROM `barang`";
    $barang = mysqli_query($connection, $query);
    $totalBarang = mysqli_num_rows($barang);
    echo '<h5 class="card-title text-center">'.$totalBarang.'</h5>';
}
function getTotalStock(){
    global $connection;
    $query = "SELECT SUM(stock) as totalStok FROM barang";
    $stock = mysqli_query($connection, $query);
    $totalStock = mysqli_fetch_assoc($stock);
    echo '<h5 class="card-title text-center">'.$totalStock['totalStock'].'</h5>';
}


function check_admin(){
    
}
?>