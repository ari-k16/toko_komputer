<!DOCTYPE html>
<html>
<head>
	<title>Ubah Produk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php 

include 'koneksi.php';

$kode = $_GET['kode'];

$query = $connect->query("SELECT * FROM produk WHERE kode='$kode'");
$data = $query->fetch_assoc();

?>
	<h2 style="text-align: center;">Ubah Data Produk</h2>
	<form action="#" method="POST" enctype="multipart/form-data">
		<table border="1" cellpadding="8" align="center">
			<tr>
				<td>Kode:</td>
				<td><input type="text" name="kode" placeholder="Kode" value="<?php echo $data['kode']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Jenis Produk:</td>
				<td><input type="text" name="jenis" placeholder="Jenis Produk" value="<?php echo $data['jenis']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Tipe:</td>
				<td><textarea name="tipe" style="resize: none;" rows="3" cols="20" placeholder="tipe"  autocomplete="#"><?php echo $data['tipe']; ?></textarea></td>
			</tr>
			<tr>
				<td>Spesifikasi</td>
				<td><input type="text" name="spesifikasi" placeholder="Spesifikasi" value="<?php echo $data['spesifikasi']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Merk:</td>
				<td><input type="text" name="merk" placeholder="Merk" value="<?php echo $data['merk']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Harga Distributor</td>
				<td><input type="number" name="harga_dist" placeholder="Harga Distributor" value="<?php echo $data['harga_dist']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Harga Costumer</td>
				<td><input type="number" name="harga_cust" placeholder="Harga Costumer" value="<?php echo $data['harga_cust']; ?>" autocomplete="#"></td>
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

		if (isset($_POST['simpan'])) {
			
			$kode 			= $_POST['kode'];
			$jenis 			= $_POST['jenis'];
			$tipe 			= $_POST['tipe'];
			$spesifikasi 	= $_POST['spesifikasi'];
			$harga_dist 	= $_POST['harga_dist'];
			$harga_cust 	= $_POST['harga_cust'];

			$edit = mysqli_query($connect, "UPDATE produk SET jenis = '$jenis', tipe = '$tipe', spesifikasi = '$spesifikasi', harga_dist = '$harga_dist', harga_cust = '$harga_cust' WHERE kode = '$kode'");

			if ($edit) {
				echo "<div class='alert alert-info'>Berhasil merubah data</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-produk.php'>";
			}else{
				echo "<div class='alert alert-danger'>Gagal merubah data</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-produk.php'>";
			}
		}

		?>

</body>
</html>