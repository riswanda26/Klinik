<?php
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$kode_dokter    = $_POST['kode_dokter'];
$nama           = $_POST['nama'];
$spesialis      = $_POST['spesialis'];
$umur           = $_POST['umur'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
$hp             = $_POST['hp'];

// perintah SQL
$query="INSERT INTO data_dokter SET kode_dokter='$kode_dokter',nama='$nama', spesialis='$spesialis', umur='$umur', jenis_kelamin=' $jenis_kelamin', alamat='$alamat', hp='$hp'";

mysqli_query($koneksi, $query);

header("location:index.php?p=admin");
?>