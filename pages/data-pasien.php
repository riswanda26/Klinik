<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'klinik'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}
$sql = 'SELECT rekam_medis, nama, tanggal_lahir, umur,jenis_kelamin, alamat, hp, pekerjaan, agama FROM data_pasien';
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
                <h1> DATA PASIEN </h1>
                </div>    
        <!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->
        <table class="table1">
        <tbody>
		<tr>
			<th>No RM</th>
			<th>Nama</th>
            <th>Tanggal Lahir</th>
			<th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Pekerjaan</th>
            <th>Agama</th>
            <th>Delete</th>
		</tr>
            
        <?php  
// Perintah untuk menampilkan data

$no = 0;
                        

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array($query))
    
{?>

		<tr>
            
			<td><?php echo $data['rekam_medis'];?></td>
			<td><?php echo $data['nama'];?></td>
            <td><?php echo $data['tanggal_lahir'];?></td>
            <td><?php echo $data['umur'];?></td>
            <td><?php echo $data['jenis_kelamin'];?></td>
			<td><?php echo $data['alamat'];?></td>
            <td><?php echo $data['hp'];?></td>
            <td><?php echo $data['pekerjaan'];?></td>
			<td><?php echo $data['agama'];?></td> 
            <td> 
            <a href="delete_pasien.php?rm=<?php echo $data['rekam_medis'];?>" onClick="return confirm('Apakah Anda Yakin Akan Menghapus No RM <?php echo $data['rekam_medis'];?> ')"> Delete</a>
              
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
