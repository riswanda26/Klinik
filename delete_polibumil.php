<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'klinik'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//get the value from form update
$bumil = $_GET['bumil']; //get the no which will deleted
//query for update data in database
 $query = "DELETE from poli_bumil WHERE no_pendaftaran = '$bumil'" ;
 $hasil = mysqli_query($conn,$query);
 //see the result
 if ($hasil) {
    header("location:index.php?p=data-poli");
}
?>