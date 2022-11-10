<?php  
	
	include 'koneksi.php';

	$no_plo = $_GET['no_plo'];

	$connect->query("DELETE FROM data_pelanggan WHERE no_plo = '$no_plo'");

?>

<script type="text/javascript">
	window.location.href="index.php?page=data-pelanggan.php";
</script>