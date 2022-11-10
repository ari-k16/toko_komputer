<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h2 style="text-align: center;">Tambah Data Produk</h2>
	<form action="#" method="POST" enctype="multipart/form-data">
		<table border="1" cellpadding="8" align="center">
			<tr>
				<td>Kode:</td>
				<td><input type="text" name="kode" placeholder="Kode" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Jenis:</td>
				<td><input type="text" name="jenis" placeholder="Jenis Produk" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Tipe:</td>
				<td><textarea name="tipe" style="resize: none;" rows="3" cols="20" placeholder="Tipe" autocomplete="#"></textarea></td>
			</tr>
			<tr>
				<td>Spesifikasi:</td>
				<td><input type="text" name="spesifikasi" placeholder="Spesifikasi" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Merk:</td>
				<td><input type="text" name="merk" placeholder="Merk" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Harga Distributor</td>
				<td><input type="number" name="harga_dist" placeholder="Harga Distributor" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Harga Costumer</td>
				<td><input type="number" name="harga_cust" placeholder="Harga Costumer" autocomplete="#"></td>
			</tr>
			<tr>
				<td></td>
				<td><button name="simpan">Simpan</button>
					<input type="button"  class="btn btn-default" onclick="window.location.href='index.php?page=data-produk.php'" value="Batal">
				</td>
			</tr>
	</form>
		</table>
		<?php  

		include 'koneksi.php';

			if (isset($_POST['simpan'])) {
				$kode 			= $_POST['kode'];
				$jenis 			= $_POST['jenis'];
				$tipe 			= $_POST['tipe'];
				$spesifikasi 	= $_POST['spesifikasi'];
				$merk 			= $_POST['merk'];
				$harga_dist 	= $_POST['harga_dist'];
				$harga_cust		= $_POST['harga_cust'];

				$tambah = mysqli_query($connect,"INSERT INTO produk (kode,jenis,tipe,spesifikasi,merk,harga_dist,harga_cust) VALUES ('$kode','$jenis','$tipe','$spesifikasi','$merk','$harga_dist','$harga_cust')");

				if ($tambah) {
					echo "<div class='alert alert info'>Berhasil menambahkan data</div>";
					echo "<meta http-equiv='refresh' content='1;url=data-produk.php'";
				}else{
					echo "<div class='alert alert danger'>Gagal menambahkan data</div>";
					echo "<meta http-equiv='refresh' content='1;url=data-produk.php";
				}
			}

		?>
</body>
</html>