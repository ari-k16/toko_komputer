<?php  

	include 'koneksi.php';

	$kode = $_GET['kode'];

	$connect->query("DELETE FROM jenis_produk WHERE kode = '$kode'");

?>

<script type="text/javascript">
	window.location.href="index.php?page=data-jenisproduk.php";
</script>