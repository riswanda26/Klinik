<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'klinik'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//get the value from form update
 $rm = $_GET['rm']; //get the no which will deleted
 
//query for update data in database
 $query = "DELETE from data_pasien WHERE rekam_medis = '$rm'" ;
 $hasil = mysqli_query($conn,$query);
 //see the result
 if ($hasil) {
  header("location:index.php?p=data-pasien");

}
?>