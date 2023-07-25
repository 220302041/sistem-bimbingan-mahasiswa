<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	<!-- <title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title> -->
</head>

<body>
	<h1 class="d-flex justify-content-center align-item-center">Sistem Bimbingan Mahasiswa</h1>
	<div class="d-flex justify-content-center align-item-center" style="margin-top: 100px;">
		<div class="d-flex justify-content-center align-item-center" style="margin-top: 200px;">
			<div class="card p-4 bg-dark-subtle" charset="utf-8">
				<div class="d-flex justify-content-center align-item-center">
					<h2>Login</h2>
				</div>
				<br />
				<!-- cek pesan notifikasi -->
				<div style="width: 100%">
					<?php
					if (isset($_GET['pesan'])) {
						if ($_GET['pesan'] == "gagal") {
							echo "<div class='alert alert-danger' role='alert'>Login gagal! username atau password salah!</div>";
						} else if ($_GET['pesan'] == "logout") {
							echo "<div class='alert alert-info' role='alert'>Anda telah berhasil logout</div>";
						} else if ($_GET['pesan'] == "belum_login") {
							echo "<div class='alert alert-warning' role='alert'>Anda harus login untuk mengakses halaman admin</div>";
						}
					}
					?>
				</div>
				<form method="post" action="cek_login.php">
					<table border="0" class="w-100">
						<tr>
							<td>Username</td>
							<td>:</td>
							<td><input type="text" name="username" placeholder="username"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input type="password" name="password" placeholder="password"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" class="btn btn-primary p-1" value="LOGIN"></td>
						</tr>
					</table>
				</form>
				<!-- <style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
	body{
		font-family: 'Playfair';
	}
</style> -->
			</div>
		</div>
</body>

</html>