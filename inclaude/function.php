<?php 

// SEARCH
function cari($search){
    $query = "SELECT * FROM barang
            WHERE nama= '$search'";
}
?>

