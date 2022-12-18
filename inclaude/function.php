<?php 

//login
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($connection,"select * from user_login where email='$email' and password='$password'");
    $hitung = mysqli_num_rows($cekuser);

    if($hitung>0){
        //kalau data ditemukan
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['role'];

        if($role=='admin'){
            //kalau dia admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'Admin';
            header('location:../admin_user.php');
        }else{
             //kalau bukan admin
             $_SESSION['log'] = 'Logged';
             $_SESSION['role'] = 'User';
             header('location:landingpage.php');

        }
    }else {
        //kalau tidak ditemukan

        echo 'Data tidak ditemukan';
    }
}
?>