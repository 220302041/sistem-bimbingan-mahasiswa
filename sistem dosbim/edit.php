<!-- <!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body> -->
<?php
include 'header.php';
include 'sidebar.php';
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<!-- <h2>DATA MAHASISWA</h2>
	<br/> -->
	</div>
	<br />
	<br />
	<h3>EDIT DATA MAHASISWA</h3>
	<br />
	<a class="btn btn-success" href="index_mahasiswa.php">KEMBALI</a>
	<br />
	<br />
	<?php
	include 'koneksi.php';
	$id_mahasiswa = $_GET['id_mahasiswa'];
	$data = mysqli_query($koneksi, "select * from mahasiswa where id_mahasiswa='$id_mahasiswa'");
	function active_radio_button($value, $input)
	{
		// apabilan value dari radio sama dengan yang di input
		$result =  $value == $input ? 'checked' : '';
		return $result;
	}
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_mahasiswa" value="<?php echo $d['id_mahasiswa']; ?>">
						<input type="text" name="nama_mahasiswa" value="<?php echo $d['nama_mahasiswa']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis kelamin</td>
					<td>
						<input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $d['jenis_kelamin']) ?>>Perempuan
						<input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $d['jenis_kelamin']) ?>>Laki-Laki
					</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>
						<!-- //Untuk menampilkan pilihan kelas -->
						<select name="kelas">
							<option value="Pilih Kelas">Pilih Kelas</option>
							<option value="TI-1A">TI-1A</option>
							<option value="TI-1B">TI-1B</option>
							<option value="TI-1C">TI-1C</option>
							<option value="TI-1D">TI-1D</option>
							       
						</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td><input type="number" name="no_telepon" value="<?php echo $d['no_telepon']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="btn btn-info"></td>
				</tr>
			</table>
		</form>
	<?php
	}
	?>

	</body>

	</html>