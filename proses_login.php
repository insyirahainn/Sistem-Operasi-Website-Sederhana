<!-- Jika menggunakan database -->

<!-- session_start(); 
include "koneksi.php";

$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM akun WHERE password='$password'"); 
$cek = mysqli_num_rows($login); 
if($cek > 0){ 
    $data = mysqli_fetch_assoc($login); 
    $_SESSION['password'] = $password; 
    $_SESSION['status'] = "login"; 
    header("location:loadberanda.php"); 

}else{ 
    echo "<script>window.location='login_akun.php'</script>";
} -->



<?php
session_start();

$_SESSION['password'] = $_POST['password'];
    $_SESSION['password'] = $password; 
    $_SESSION['status'] = "login"; 

header("Location:loadberanda.php");
exit();
?>