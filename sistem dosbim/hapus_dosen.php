<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_dosen = $_GET['id_dosen'];


// menghapus data dari database
mysqli_query($koneksi, "delete from dosen where id_dosen='$id_dosen'");

// mengalihkan halaman kembali ke index.php
header("location:index_dosen.php");
