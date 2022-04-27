<?php
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$no_pendaftaran = $_POST['no_pendaftaran'];
$rekam_medis    = $_POST['rekam_medis'];
$nama           = $_POST['nama'];
$tanggal        = $_POST['tanggal'];


// perintah SQL
$query="INSERT INTO poli_umum SET no_pendaftaran='$no_pendaftaran', rekam_medis='$rekam_medis',nama='$nama', tanggal='$tanggal'";

mysqli_query($koneksi, $query);

header("location:index.php?p=admin");
?>