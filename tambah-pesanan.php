<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pesanan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<h2 style="text-align: center;">Tambah Data Pesanan</h2>
	<form action="#" method="POST" enctype="multipart/form-data">
		<table border="1" cellpadding="8" align="center">
			<tr>
				<td>No Pesanan:</td>
				<?php  
					$mt_rand = mt_rand(1, 999999);

				?>
				<td><input type="number" name="no_pesanan" readonly="#" value="<?php echo $mt_rand;  ?>" placeholder="No Pesanan" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Nama:</td>
				<td>				
					<select id="nama" name="nama" style="width: 180px;">
						<option disbled selected="">Pilih</option>
					<?php 
					 include 'koneksi.php';

					$data = "SELECT * FROM data_pelanggan";
					$sql = mysqli_query($connect,$data);

					while($pelanggan = mysqli_fetch_array($sql)) { ?>
						<option><?php echo $pelanggan['nama'] ?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tgl Pesanan:</td>
				<td><input type="date" name="tgl_pesanan" placeholder="Tgl Pesanan" autocomplete="#"></td>
			</tr>
			<tr>
				<td></td>
				<td><button name="simpan">Simpan</button>
					<input type="button"  class="btn btn-default" onclick="window.location.href='index.php?page=data-pesanan.php'" value="Batal">
				</td>
			</tr>
	</form>
		</table>


		<?php  

		include 'koneksi.php';

			if (isset($_POST['simpan'])) {
				$no_pesanan = $_POST['no_pesanan'];
				$nama 		 = $_POST['nama'];
				$tgl_pesanan = $_POST['tgl_pesanan'];

				$tambah = mysqli_query($connect,"INSERT INTO pesanan (no_pesanan,nama,tgl_pesanan) VALUES ('$no_pesanan','$nama','$tgl_pesanan')");

				if ($tambah) {
					echo "<div class='alert alert info'>Berhasil menambahkan data</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-pesanan.php'";
				}else{
					echo "<div class='alert alert danger'>Gagal menambahkan data</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-pesanan.php";
				}
			}

		?>
</body>
</html>