<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class="container">
		<u><h2 style="text-align: center;">Login</h2></u>
		<table border="1" cellpadding="6" align="center">
			<form action="#" method="POST" enctype="multipart/form-data">
				<tr>
					<td><input type="text" name="username" placeholder="Username" autofocus="" autocomplete="off"></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Password" autocomplete="off"></td>
				</tr>
				<tr>
					<td><button name="login">Login</button></td>
				</tr>
			</form>
		</table>
	</div>
</body>
</html>

<?php 

include 'koneksi.php';

if (isset($_POST['login'])) {
	
	$cek_data = mysqli_query($connect,"SELECT * FROM user WHERE username = '".$_POST['username']."' AND password ='".sha1($_POST['password'])."'");
	$data = mysqli_fetch_array($cek_data);
	$nama = $data['nama'];
	$level = $data['level'];

	if (mysqli_num_rows($cek_data) > 0) {
		session_start();
		$_SESSION['nama'] 	= $nama;
		$_SESSION['level'] 	= $level;

		if ($level == 'admin') {
			echo "<div class='alert alert-info'>Login Berhasil</div>";
			echo "<meta http-equiv='refresh' content='1;url=index.php'>";
		}else{
			echo "<div class='alert alert-danger'>Login Gagal</div>";
			echo "<meta http-equiv='refresh' content='1;url=login.php'>";
		}
	}
}

?>