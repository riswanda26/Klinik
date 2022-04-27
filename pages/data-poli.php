<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'klinik'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$umum = 'SELECT no_pendaftaran, rekam_medis, nama, tanggal FROM poli_umum';
$bumil= 'SELECT no_pendaftaran, rekam_medis, nama, tanggal FROM poli_bumil';
$kb = 'SELECT no_pendaftaran, rekam_medis, nama, tanggal FROM poli_kb';

$queryumum = mysqli_query($conn, $umum);
if (!$queryumum) {
	die ('SQL Error: ' . mysqli_error($conn));
} 

$querybumil = mysqli_query($conn, $bumil);
if (!$querybumil) {
	die ('SQL Error: ' . mysqli_error($conn));
} 

$querykb= mysqli_query($conn, $kb);
if (!$querykb) {
	die ('SQL Error: ' . mysqli_error($conn));
} 

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi Klinik</title>
<link rel="stylesheet" href="data-poli.css" type="text/css">
    
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
                <h1> DATA POLI </h1>
                </div>    
        <!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->
        <table class="table1">
        
            
        <!-- Tabel Umum -->
        <tbody>
            <tr>
    <th colspan="5">POLI UMUM</th>
   </tr>
		<tr>
            
			<th>No. Pendaftaran</th>
            <th>No. RM</th>
			<th>Nama</th>
			<th>Tanggal</th>
             <th>Delete</th>
		</tr>
            
<?php  
while ($dataumum = mysqli_fetch_array($queryumum))
{?>
 
		<tr>
			<td><?php echo $dataumum['no_pendaftaran'];?></td>
            <td><?php echo $dataumum['rekam_medis'];?></td>
			<td><?php echo $dataumum['nama'];?></td>
            <td><?php echo $dataumum['tanggal'];?></td>
			<td> 
                <button> <a href="delete_poliumum.php?umum=<?php echo $dataumum['no_pendaftaran'];?>" onClick="return confirm('Apakah Anda Yakin Akan Menghapus Pasien No <?php echo $dataumum['no_pendaftaran'];?> ')"> Delete</a> </button>
              
            </td>
		</tr>
           
 <?php }?>
</tbody>
            
<!-- Tabel Bumil -->
<tbody>
      <tr>
    <th colspan="5">POLI BUMIL</th>
   </tr>
		<tr>
			<th>No. Pendaftaran</th>
            <th>No. RM</th>
			<th>Nama</th>
			<th>Tanggal</th>
             <th>Delete</th>
		</tr>            
<?php  
while ($databumil = mysqli_fetch_array($querybumil))
{?>
 
		<tr>
			<td><?php echo $databumil['no_pendaftaran'];?></td>
            <td><?php echo $databumil['rekam_medis'];?></td>
			<td><?php echo $databumil['nama'];?></td>
            <td><?php echo $databumil['tanggal'];?></td>
            <td>
                <button><a href="delete_polibumil.php?bumil=<?php echo $databumil['no_pendaftaran'];?>" onClick="return confirm('Apakah Anda Yakin Akan Menghapus Pasien No <?php echo $databumil['no_pendaftaran'];?> ')"> Delete</a></button>
           </td>
		</tr>
           
 <?php }?>
    </tbody>
         <!-- Tabel Bkb -->   
<tbody>
     <tr>
    <th colspan="5">POLI KB</th>
   </tr>
		<tr>
			<th>No. Pendaftaran</th>
            <th>No. RM</th>
			<th>Nama</th>
			<th>Tanggal</th>
             <th>Delete</th>
		</tr>  
<?php  
    
            
while ($datakb = mysqli_fetch_array($querykb))
{?>
 
		<tr>
			<td><?php echo $datakb['no_pendaftaran'];?></td>
            <td><?php echo $datakb['rekam_medis'];?></td>
			<td><?php echo $datakb['nama'];?></td>
            <td><?php echo $datakb['tanggal'];?></td>
            <td>
                <button><a href="delete_polikb.php?kb=<?php echo $datakb['no_pendaftaran'];?>" onClick="return confirm('Apakah Anda Yakin Akan Menghapus Pasien No <?php echo $datakb['no_pendaftaran'];?> ')"> Delete</a></button>
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
