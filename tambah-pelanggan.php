<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pelanggan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h2 style="text-align: center;">Tambah Data Pelanggan</h2>
	<form action="#" method="POST" enctype="multipart/form-data">
		<table border="1" cellpadding="8" align="center">
			<tr>
				<td>No Plo:</td>
				<td><input type="text" name="no_plo" placeholder="NO PLO" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Nama Pelanggan:</td>
				<td><input type="text" name="nama" placeholder="Nama Pelanggan" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Alamat:</td>
				<td><textarea name="alamat" style="resize: none;" rows="3" cols="20" placeholder="Alamat" autocomplete="#"></textarea></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td><input type="text" name="kota" placeholder="Kota" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Tempat,Tgl Lahir:</td>
				<td><input type="text" name="ttl" placeholder="Tempat,Tgl Lahir" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Usia</td>
				<td><input type="number" name="usia" placeholder="Usia" autocomplete="#"></td>
			</tr>
			<tr>
				<td></td>
				<td><button name="simpan">Simpan</button>
					<input type="button"  class="btn btn-default" onclick="window.location.href='index.php?page=data-pelanggan.php'" value="Batal">
				</td>
			</tr>
	</form>
		</table>
		<?php  

		include 'koneksi.php';

			if (isset($_POST['simpan'])) {
				$no_plo = $_POST['no_plo'];
				$nama_pelanggan = $_POST['nama'];
				$alamat = $_POST['alamat'];
				$kota 	= $_POST['kota'];
				$ttl 	= $_POST['ttl'];
				$usia 	= $_POST['usia'];

				$tambah = mysqli_query($connect,"INSERT INTO data_pelanggan (no_plo,nama,alamat,kota,ttl,usia) VALUES ('$no_plo','$nama_pelanggan','$alamat','$kota','$ttl','$usia')");

				if ($tambah) {
					echo "<div class='alert alert info'>Berhasil menambahkan data</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-pelanggan.php'";
				}else{
					echo "<div class='alert alert danger'>Gagal menambahkan data</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-pelanggan.php";
				}
			}

		?>
</body>
</html>