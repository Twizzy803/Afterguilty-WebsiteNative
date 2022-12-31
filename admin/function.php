<?php
function getTotalBarang()
{
    global $connection;
    $query = "SELECT * FROM `barang`";
    $barang = mysqli_query($connection, $query);
    $totalBarang = mysqli_num_rows($barang);
    echo '<h1 class="card-title text-center">' . $totalBarang . '</h1>';
}
function getTotalUsers()
{
    global $connection;
    $query = "SELECT * FROM `users`";
    $id_users = mysqli_query($connection, $query);
    $totalUsers = mysqli_num_rows($id_users);
    echo '<h1 class="card-title text-center">' . $totalUsers . '</h1 >';
}

function getTotalPembelian()
{
    global $connection;
    $query = "SELECT * FROM `beli`";
    $id_beli = mysqli_query($connection, $query);
    $totalPembelian = mysqli_num_rows($id_beli);
    echo '<h1 class="card-title text-center">' . $totalPembelian . '</h1 >';
}
