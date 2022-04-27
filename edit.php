<?php
include "koneksi.php";

$ko = $_GET['ko'];
// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST


$edit         = $_POST['edit'];

// perintah SQL
$query="UPDATE data_obat SET stok='$edit' where kode_obat='$ko'";

mysqli_query($koneksi, $query);

header("location:index.php?p=data-obat");
?>