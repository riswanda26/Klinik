<?php
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$rekam_medis    = $_POST['rekam_medis'];
$nama           = $_POST['nama'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$umur           = $_POST['umur'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
$hp             = $_POST['hp'];
$pekerjaan      = $_POST['pekerjaan'];
$agama          = $_POST['agama'];

// perintah SQL
$query="INSERT INTO data_pasien SET rekam_medis='$rekam_medis',nama='$nama', tanggal_lahir='$tanggal_lahir', umur='$umur', jenis_kelamin=' $jenis_kelamin', alamat='$alamat', hp='$hp', pekerjaan='$pekerjaan', agama='$agama'";

mysqli_query($koneksi, $query);

header("location:index.php?p=admin")
?>