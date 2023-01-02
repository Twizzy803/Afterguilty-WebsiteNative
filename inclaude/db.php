<?php
// Setting DB
$db['db_host'] = "localhost";
$db['db_user'] = "masdaffa";
$db['db_pass'] = "olehmastegar";
$db['db_name'] = "afterguilty";
// Mendefinisikan DB
foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}
// Menyambungkan DB
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// if($connection){
//     echo "koneksi berhasil";
// }