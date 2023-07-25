<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$d = $_GET['id_mahasiswa'];

 //gunakan fungsi di bawah ini agar session bisa dibuat
 session_start();
    
 //hapus data dari tabel kontak
 $delete = mysqli_query($koneksi, "delete from mahasiswa where id_mahasiswa=".$d);
 
 //set session sukses
 $_SESSION["sukses"] = 'Data Berhasil Dihapus';

 
// // menghapus data dari database
// mysqli_query($koneksi,"delete from mahasiswa where id_mahasiswa=".$d);
 
// mengalihkan halaman kembali ke index.php
header("location:index_mahasiswa.php");
 
?>