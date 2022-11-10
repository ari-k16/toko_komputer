<!DOCTYPE html>
<html>
<head>
	<title>Ubah Pelanggan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php 

include 'koneksi.php';

$no_plo = $_GET['no_plo'];

$query = $connect->query("SELECT * FROM data_pelanggan WHERE no_plo='$no_plo'");
$data = $query->fetch_assoc();

?>
	<h2 style="text-align: center;">Ubah Data Pelanggan</h2>
	<form action="#" method="POST" enctype="multipart/form-data">
		<table border="1" cellpadding="8" align="center">
			<tr>
				<td>No Plo:</td>
				<td><input type="text" name="no_plo" placeholder="NO PLO" value="<?php echo $data['no_plo']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Nama Pelanggan:</td>
				<td><input type="text" name="nama" placeholder="Nama Pelanggan" value="<?php echo $data['nama']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Alamat:</td>
				<td><textarea name="alamat" style="resize: none;" rows="3" cols="20" placeholder="Alamat"  autocomplete="#"><?php echo $data['alamat']; ?></textarea></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td><input type="text" name="kota" placeholder="Kota" value="<?php echo $data['kota']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Tempat,Tgl Lahir:</td>
				<td><input type="text" name="ttl" placeholder="Tempat,Tgl Lahir" value="<?php echo $data['ttl']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Usia</td>
				<td><input type="number" name="usia" placeholder="Usia" value="<?php echo $data['usia']; ?>" autocomplete="#"></td>
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

		if (isset($_POST['simpan'])) {
			
			$no_plo 		= $_POST['no_plo'];
			$nama_pelanggan = $_POST['nama'];
			$alamat 		= $_POST['alamat'];
			$kota 			= $_POST['kota'];
			$ttl 			= $_POST['ttl'];
			$usia 			= $_POST['usia'];

			$edit = mysqli_query($connect, "UPDATE data_pelanggan SET nama = '$nama_pelanggan', alamat = '$alamat', kota = '$kota', ttl = '$ttl', usia = '$usia' WHERE no_plo = '$no_plo'");

			if ($edit) {
				echo "<div class='alert alert-info'>Berhasil merubah data</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-pelanggan.php'>";
			}else{
				echo "<div class='alert alert-danger'>Gagal merubah data</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-pelanggan.php'>";
			}
		}

		?>

</body>
</html>