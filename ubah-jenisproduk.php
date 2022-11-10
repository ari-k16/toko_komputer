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

$query = $connect->query("SELECT * FROM jenis_produk WHERE kode='$kode'");
$data = $query->fetch_assoc();

?>
	<h2 style="text-align: center;">Ubah Jenis Produk</h2>
	<form action="#" method="POST" enctype="multipart/form-data">
		<table border="1" cellpadding="8" align="center">
			<tr>
				<td>Kode:</td>
				<td><input type="text" name="kode" placeholder="Kode" disabled="" value="<?php echo $data['kode']; ?>" autocomplete="#"></td>
			</tr>
			<tr>
				<td>Nama:</td>
				<td><input type="text" name="nama" placeholder="Nama Jenis Produk" value="<?php echo $data['nama']; ?>" autocomplete="#"></td>
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

		if (isset($_POST['simpan'])) {
			
			// $kode 		= $_POST['kode'];
			$nama 			= $_POST['nama'];

			$edit = mysqli_query($connect, "UPDATE jenis_produk SET nama = '$nama' WHERE kode = '$kode'");

			if ($edit) {
				echo "<div class='alert alert-info'>Berhasil merubah data</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-jenisproduk.php'>";
			}else{
				echo "<div class='alert alert-danger'>Gagal merubah data</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?page=data-jenisproduk.php'>";
			}
		}

		?>

</body>
</html>