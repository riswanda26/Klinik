<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'klinik'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}
$sql = 'SELECT kode_dokter, nama, spesialis, umur,jenis_kelamin, alamat, hp FROM data_dokter';
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
} ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi Klinik</title>
<link rel="stylesheet" href="data.css" type="text/css">
</head>

    
    <!-- sidebar -->
    <div id="content">
    	<div class="content-left">
            <div class="boxsidebar"><a href="index.php?p=form-pasien">FORM PASIEN</a></div>
            <div class="boxsidebar"><a href="index.php?p=data-pasien">DATA PASIEN</a></div>
            <div class="boxsidebar"><a href="index.php?p=form-dokter">FORM DOKTER</a></div>
            <div class="boxsidebar"><a href="index.php?p=data-dokter">DATA DOKTER</a></div>
            <div class="boxsidebar"><a href="index.php?p=daftar-poli">DAFTAR POLI</a></div>
            <div class="boxsidebar"><a href="index.php?p=data-poli">DATA POLI</a></div>
            <div class="boxsidebar"><a href="index.php?p=data-obat">DATA OBAT</a></div>
      	
        </div><!-- End Content Left -->
        
        <div class="content-right">
            	<div class="utama">
				<div class="content">
                    
                <div class="judul">
                <h1> DATA DOKTER </h1>
                </div>    
        <!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->
        <table class="table1">
        <tbody>
		<tr>
			<th>Kode Dokter</th>
			<th>Nama</th>
            <th>Spesialis</th>
			<th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Delete</th>
		</tr>
            
        <?php  
// Perintah untuk menampilkan data


// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array($query))
{?>

		<tr>
			<td><?php echo $data['kode_dokter'];?></td>
			<td><?php echo $data['nama'];?></td>
            <td><?php echo $data['spesialis'];?></td>
            <td><?php echo $data['umur'];?></td>
            <td><?php echo $data['jenis_kelamin'];?></td>
			<td><?php echo $data['alamat'];?></td>
            <td><?php echo $data['hp'];?></td>
			<td> 
            <a href="delete_dokter.php?kd=<?php echo $data['kode_dokter'];?>" onClick="return confirm('Apakah Anda Yakin Akan Menghapus Kode Dokter <?php echo $data['kode_dokter'];?> ')"> Delete</a>
              
            </td>
		</tr>
           
 <?php }?>
   </tbody>
	</table>	
			</div>
			</div>

        </div><!-- End Content Right -->
    </div><!-- End Content -->
  
    </body>
</html>