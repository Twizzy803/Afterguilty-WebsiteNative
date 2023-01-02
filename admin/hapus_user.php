<?php 
if( isset($_GET["id_users"])){
    $id_users = $_GET["id_users"];

    $servername = "localhost";
    $username = "masdaffa";
    $password = "olehmastegar";
    $database = "afterguilty";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM `users` WHERE id_users=$id_users";
    $connection->query($sql);
}

header("location: user.php");
exit;
?>