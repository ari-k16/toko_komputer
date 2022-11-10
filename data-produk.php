<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h2 style="text-align: center;">Data Produk</h2>
	<h4 style="margin-left: 140px;">DATA PRODUK</h4>
	<a style="margin-left: 140px; text-decoration: none;" href="tambah-produk.php">Tambah Data</a><br><br>
	<table border="1" align="center" width="80%" bgcolor="#c7c6c5";>
		<tr style="background-color:#3b3832; color: #f5a70c;">
			<th>KODE PRODUK</th>
			<th>JENIS PRODUK</th>
			<th>TIPE</th>
			<th>SPESIFIKASI</th>
			<th>MERK</th>
			<th>HARGA DISTRIBUTOR</th>
			<th>HARGA COUSTUMER</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php  
		include "koneksi.php";

		$data = "SELECT * FROM produk";
		$sql = mysqli_query($connect, $data);

		while($produk = mysqli_fetch_array($sql)){
				echo "<tr>";
				echo "<td>".$produk['kode']."</td>";
				echo "<td>".$produk['jenis']."</td>";
				echo "<td>".$produk['tipe']."</td>";
				echo "<td>".$produk['spesifikasi']."</td>";
				echo "<td>".$produk['merk']."</td>";
				echo "<td>".$produk['harga_dist']."</td>";
				echo "<td>".$produk['harga_cust']."</td>";
				echo "<td><a href='ubah-produk.php?kode=".$produk['kode']."'>Ubah</a></td>";
				echo "<td><a href='hapus-produk.php?kode=".$produk['kode']."'>Hapus</a></td>";
				echo "</tr>"."<br>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>