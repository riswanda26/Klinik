<?php
$con = mysqli_connect("localhost","root","","klinik");
$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];
$submit   = $_POST['submit'];
 
if(isset($submit)){
 
 if(empty($username) or empty($password)){
 
  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('signup.php') </script>";
 }else{
 
  $pass =($_POST['password']);
  $ins = mysqli_query($con,"insert into login(username,email,password) values ('$username','$email','$pass')");
  echo "<script>alert('Data berhasil di Tambah'); window.location=('login.php');</script>";
 }
}
?>
?>