<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Jenis Produk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h2 style="text-align: center;">Tambah Data Jenis Produk</h2>
	<form action="#" method="POST" enctype="multipart/form-data">
		<table border="1" cellpadding="8" align="center">
			<tr>
				<td>Kode:</td>
				<td><input type="text" name="kode" placeholder="Kode Jenis Produk" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Nama:</td>
				<td><input type="text" name="nama" placeholder="Nama Jenis Produk" autocomplete="#"></td>
			</tr>
			<tr>
				<td></td>
				<td><button name="simpan">Simpan</button>
					<input type="button"  class="btn btn-default" onclick="window.location.href='index.php?page=data-jenisproduk.php'" value="Batal">
				</td>
			</tr>
	</form>
		</table>
		<?php  

		include 'koneksi.php';

			if (isset($_POST['simpan'])) {
				$kode 	= $_POST['kode'];
				$nama 	= $_POST['nama'];

				$tambah = mysqli_query($connect,"INSERT INTO jenis_produk (kode,nama) VALUES ('$kode','$nama')");

				if ($tambah) {
					echo "<div class='alert alert info'>Berhasil menambahkan data</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-jenisproduk.php'";
				}else{
					echo "<div class='alert alert danger'>Gagal menambahkan data</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-jenisproduk.php";
				}
			}

		?>
</body>
</html>