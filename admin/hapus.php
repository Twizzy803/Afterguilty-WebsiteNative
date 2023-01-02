<?php 
if( isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "masdaffa";
    $password = "olehmastegar";
    $database = "afterguilty";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM `barang` WHERE id=$id";
    $connection->query($sql);
}

header("location: barang.php");
exit;
?>