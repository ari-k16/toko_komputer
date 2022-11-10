<?php  

include 'koneksi.php';

$connect = new mysqli("localhost","root","","toko_komputer");

unset($_SESSION['level']);
echo "<script>alert('anda telah logout');</script>";
echo "<script>location='login.php'</script>";

?>