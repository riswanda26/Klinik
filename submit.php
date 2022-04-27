<?php
include "koneksi.php";

$kode_obat = $_POST['kode_obat'];

$stok = $_POST['stok'];


$update = "UPDATE data_obat SET stok='$stok' where kode_obat = '$kode_obat'";
$hasil = mysql_query($update);


?>