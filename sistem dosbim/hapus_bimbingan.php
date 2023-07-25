<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_bimbingan = $_GET['id_bimbingan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from bimbingan where id_bimbingan='$id_bimbingan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index_bimbingan.php");
 
?>