<?php  

	include 'koneksi.php';

	$no_pesanan = $_GET['no_pesanan'];

	$connect->query("DELETE FROM pesanan WHERE no_pesanan = '$no_pesanan'");

?>

<script type="text/javascript">
	window.location.href="index.php?page=data-pesanan.php";
</script>