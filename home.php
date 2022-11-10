<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<?php 
include 'koneksi.php';
?>
	<h3 style="text-align: center; margin-left:140px;">Selamat Datang Di Toko Komputer</h3>
	<div class="container" style="display: flex; margin-left: 35%;">
		<div class="card-1" style="width: 130px; text-align: center; background-color: #94ebd6;">
			<h4>Data Pelanggan</h4>
				<div class="body-card-1">
					<p><?php $sql = mysqli_query($connect,"SELECT count(*) AS jumlah FROM data_pelanggan"); 
						$reslut = mysqli_fetch_array($sql);
						echo "{$reslut['jumlah']}";
					?></p>
				</div>
		</div>
		<div class="card-2" style="width: 130px; text-align: center; background-color: #94ebd6; margin-left: 10px;">
			<h4>Data Produk</h4>
				<div class="body-card-2">
					<p style=""><?php $sql = mysqli_query($connect,"SELECT count(*) AS jumlah FROM produk"); 
						$reslut = mysqli_fetch_array($sql);
						echo "{$reslut['jumlah']}";
					?></p>
				</div>
		</div>
		<div class="card-3" style="width: 130px; text-align: center; background-color: #94ebd6; margin-left: 10px;">
			<h4>Data Jenis Produk</h4>
				<div class="body-card-3">
					<p><?php $sql = mysqli_query($connect,"SELECT count(*) AS jumlah FROM jenis_produk"); 
						$reslut = mysqli_fetch_array($sql);
						echo "{$reslut['jumlah']}";
					?></p>
				</div>
		</div>
		<div class="card-3" style="width: 130px; text-align: center; background-color: #94ebd6; margin-left: 10px;">
			<h4>Data Pesanan</h4>
				<div class="body-card-3">
					<p><?php $sql = mysqli_query($connect,"SELECT count(*) AS jumlah FROM pesanan"); 
						$reslut = mysqli_fetch_array($sql);
						echo "{$reslut['jumlah']}";
					?></p>
				</div>
		</div>
	</div>
</body>
</html>