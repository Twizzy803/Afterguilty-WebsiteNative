<?php 
include "../includes/db.php";
ob_start();
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] !== 'admin'){
        header("Location: ../index.php?dilarang");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Guilty.Store</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">After Guilty<p>ADMIN</p></a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>

            <div class="icon">
                <i class="ri-logout-box-r-line" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Keluar"></i>
            </div>
        </div>
    </nav>



</body>

</html>