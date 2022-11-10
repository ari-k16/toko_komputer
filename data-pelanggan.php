<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h2 style="text-align: center;">Data Pelanggan</h2>
	<h4 style="margin-left: 140px;">DATA PELANGGAN</h4>
	<a style="margin-left: 140px; text-decoration: none;" href="tambah-pelanggan.php">Tambah Data</a><br><br>
	<table border="1" align="center" width="80%" bgcolor="#c7c6c5";>
		<tr style="background-color:#3b3832; color: #f5a70c;">
			<th>NO PLO</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>KOTA</th>
			<th>TEMPAT, TGL LAHIR</th>
			<th>USIA</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php  
		include "koneksi.php";

		$data = "SELECT * FROM data_pelanggan";
		$sql = mysqli_query($connect, $data);

		while($pelanggan=mysqli_fetch_array($sql)){
				echo "<tr>";
				echo "<td>".$pelanggan['no_plo']."</td>";
				echo "<td>".$pelanggan['nama']."</td>";
				echo "<td>".$pelanggan['alamat']."</td>";
				echo "<td>".$pelanggan['kota']."</td>";
				echo "<td>".$pelanggan['ttl']."</td>";
				echo "<td>".$pelanggan['usia']."</td>";
				echo "<td><a href='ubah-pelanggan.php?no_plo=".$pelanggan['no_plo']."'>Ubah</a></td>";
				echo "<td><a href='hapus-pelanggan.php?no_plo=".$pelanggan['no_plo']."'>Hapus</a></td>";
				echo "</tr>"."<br>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>