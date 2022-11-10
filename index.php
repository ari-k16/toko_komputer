<?php  

	session_start();

	include 'koneksi.php';

	$connect = new mysqli ("localhost","root","","toko_komputer");

	if (!isset($_SESSION['level'])) {
		echo "<script>alert('Anda harus login terlebih dahulu')</script>";
		echo "<script>location='login.php';</script>";
		header('location:login.php');
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Toko Komputer</title>
</head>
<body>
	<div class="container">
	<img src="./img/logo.png" style="width: 40px; float: left;">
	<h2 style="margin-left: 40px;">Toko Komputer</h2>
		<ul class="nav-menu" style="display: flex; list-style: none; text-decoration: none; margin-left: 10px;">
			<li style="margin-left: 10px;"><a style="text-decoration: none;" href="index.php?page=home">Home</a></li>
			<li style="margin-left: 10px;"><a style="text-decoration: none;" href="index.php?page=pelanggan">Data Pelanggan</a></li>
			<li style="margin-left: 10px;"><a style="text-decoration: none;" href="index.php?page=produk">Data Produk</a></li>
			<li style="margin-left: 10px;"><a style="text-decoration: none;" href="index.php?page=jenisproduk">Data Jenis Produk</a></li>
			<li style="margin-left: 10px;"><a style="text-decoration: none;" href="index.php?page=pesanan">Data Pesanan</a></li>
			<li style="margin-left: 10px;"><a style="text-decoration: none;" href="index.php?page=logout">Logout</a></li>
		</ul>

		<?php  
		if (isset($_GET['page'])) {
			if ($_GET['page']=="pelanggan") {
				include 'data-pelanggan.php';
			}
			if ($_GET['page']=="produk") {
				include 'data-produk.php';
			}
			if ($_GET['page']=="jenisproduk") {
				include 'data-jenisproduk.php';
			}
			if ($_GET['page']=="pesanan") {
				include 'data-pesanan.php';
			}
			if ($_GET['page']=="detailpesanan") {
				include 'data-detailpesanan';
			}
			elseif ($_GET['page']=="tambahpelanggan") {
				include 'tambah-pelanggan.php';
			}
			elseif ($_GET['page']=="tambahproduk") {
				include 'tambah-produk.php';
			}
			elseif ($_GET['page']=="tambahpesanan") {
				include 'tambah-pesanan.php';
			}
			elseif ($_GET['page']=="ubahpelanggan") {
				include 'ubah-pelanggan.php';
			}
			elseif ($_GET['page']=="ubahproduk") {
				include 'ubah-produk.php';
			}
			elseif ($_GET['page']=="hapuspelanggan") {
				include 'hapus-pelanggan.php';
			}
			elseif ($_GET['page']=="hapusproduk") {
				include 'hapus-produk.php';
			}
			elseif ($_GET['page']=="logout") {
				include 'logout.php';
			}
			elseif ($_GET['page']=="home") {
				include 'home.php';
			}
		}
		// else{
		// 	include 'home.php';
		// }

		?>

	</div>
</body>
</html>