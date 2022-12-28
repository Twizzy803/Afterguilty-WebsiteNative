<?php
// Load Komponen DB
include "db.php";
session_start();

if (isset($_POST['masuk'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM `users_login` JOIN `users` WHERE `email` = '$email' AND `password` = '$pass'";
    $select_login = mysqli_query($connection, $query);

    if (!$select_login) {
        die("Query Failed" . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_assoc($select_login)) {
        $db_email = $row['email'];
        $db_pass = $row['password'];
        $db_role = $row['role'];
        $db_id_users = $row['id_users'];
        $db_nama_lengkap = $row['nama_lengkap'];
        $db_alamat  = $row['alamat'];
        $db_telp = $row['telp'];
    }

    if ($email !== $db_email && $pass !== $db_pass) {
        header('Location: ../login.php?gagal');
    } elseif ($email === $db_email && $pass === $db_pass) {
        $_SESSION['pembeli'] = $select_login;
        $_SESSION['email'] = $db_email;
        $_SESSION['role'] = $db_role;
        $_SESSION['id_users'] = $db_id_users;
        $_SESSION['nama_lengkap'] = $db_nama_lengkap;
        $_SESSION['alamat'] = $db_alamat;
        $_SESSION['telp'] = $db_telp;
        if ($_SESSION['role'] === 'admin') {
            header('Location: ../admin');

        } else {
            if ($_SESSION["pembeli"] = $select_login) {
                header('location: ../checkout.php');
            } else {
                echo "<script>alert('Anda Harus Login Dahulu !!')</script>";
            }
            header('Location: ../index.php');
        }
    }
}
