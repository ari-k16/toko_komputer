<!DOCTYPE html>
<html>
<head>
	<title>Data Jenis Produk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h2 style="text-align: center;">Data Jenis Produk</h2>
	<h4 style="margin-left: 140px;">DATA JENIS PRODUK</h4>
	<a style="margin-left: 140px; text-decoration: none;" href="tambah-jenisproduk.php">Tambah Data</a><br><br>
	<table border="1" align="center" width="50%" bgcolor="#c7c6c5";>
		<tr style="background-color:#3b3832; color: #f5a70c;">
			<th>KODE PRODUK</th>
			<th>NAMA</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php  
		include "koneksi.php";

		$data = "SELECT * FROM jenis_produk";
		$sql = mysqli_query($connect, $data);

		while($jenis = mysqli_fetch_array($sql)){
				echo "<tr>";
				echo "<td>".$jenis['kode']."</td>";
				echo "<td>".$jenis['nama']."</td>";
				echo "<td><a href='ubah-jenisproduk.php?kode=".$jenis['kode']."'>Ubah</a></td>";
				echo "<td><a href='hapus-jenisproduk.php?kode=".$jenis['kode']."'>Hapus</a></td>";
				echo "</tr>"."<br>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>