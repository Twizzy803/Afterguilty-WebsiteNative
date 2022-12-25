<?php 
if( isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "afterguilty";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM `barang` WHERE id=$id";
    $connection->query($sql);
}

header("location: keranjang.php");
exit;
?>