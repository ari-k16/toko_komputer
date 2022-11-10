<!DOCTYPE html>
<html>
<head>
	<title>Data Pemesanan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h2 style="text-align: center;">Data Pemesanan</h2>
	<h4 style="margin-left: 140px;">DATA PEMESANAN</h4>
	<a style="margin-left: 140px; text-decoration: none;" href="tambah-pesanan.php">Tambah Data</a><br><br>
	<table border="1" align="center" width="80%" bgcolor="#c7c6c5";>
		<tr style="background-color:#3b3832; color: #f5a70c;">
			<th>NO PESANAN</th>
			<th>NAMA</th>
			<th>TGL PESANAN</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php  
		include "koneksi.php";

		$data = "SELECT * FROM pesanan";
		$sql = mysqli_query($connect, $data);

		while($pesanan=mysqli_fetch_array($sql)){
				echo "<tr>";
				echo "<td>".$pesanan['no_pesanan']."</td>";
				echo "<td>".$pesanan['nama']."</td>";
				echo "<td>".$pesanan['tgl_pesanan']."</td>";
				// echo "<td><a href='ubah-pesanan.php?no_pesanan=".$pesanan['no_pesanan']."'>Ubah</a></td>";
				echo "<td><a href='hapus-pesanan.php?no_pesanan=".$pesanan['no_pesanan']."'>Hapus</a></td>";
				echo "</tr>"."<br>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>