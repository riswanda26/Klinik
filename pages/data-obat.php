<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'klinik'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}
$sql = 'SELECT kode_obat, nama_obat, jenis_obat, satuan,stok FROM data_obat';
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
} ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi Klinik</title>
<link rel="stylesheet" href="data-obat.css" type="text/css">
    
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
                <h1> DATA OBAT </h1>
                </div>    
        <!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->
                    
        <table class="table1">
        <tbody>
		<tr>
			<th>Kode Obat</th>
			<th>Nama Obat</th>
            <th>Jenis Obat</th>
			<th>Satuan</th>
            <th>Stok</th>
            <th>Edit Stok</th>
            <th>Submit</th>
		</tr>
            
        <?php  
// Perintah untuk menampilkan data


// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array($query))
{?>

		<tr>
            
			<td><?php echo $data['kode_obat'];?></td>
			<td><?php echo $data['nama_obat'];?></td>
            <td><?php echo $data['jenis_obat'];?></td>
            <td><?php echo $data['satuan'];?></td>
            <td><?php echo $data['stok'];?></td>
            <form action="edit.php?ko=<?php echo $data['kode_obat'];?>" method="POST">
            <td>   
            
                <input type = "text" name = "edit">
                <input type = "hidden" name = "kode_obat" value = "'.$data['kode_obat'].'">
               
            </td>
            <td> 
                
                <button type = "submit" name = "submit"> SUBMIT</button>
            </td>
             </form>
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
