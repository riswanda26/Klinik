<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi Klinik</title>
<link rel="stylesheet" href="stylepoli.css" type="text/css">
    
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
                     <div class="judul1">
                <h1> Pendaftaran Poli Bumil </h1>
                    </div>
                    <br>
				<form class="contact_form"  method="post" action="tambahbumil.php">
				<ul>
                <li>
                	<label for="no_pendaftaran">No Daftar:</label>
                	<input type="text" name="no_pendaftaran" placeholder="Masukkan No Pendaftaran " required oninvalid="this.setCustomValidity('Input Harus Angka!')">
					<span class="form_hint">example 000001</span>
                </li>
                				
				<li>
                	<label for="rekam_medis">No RM:</label>
                	<input type="text" name="rekam_medis" placeholder="Masukkan No Rekam Medis " required oninvalid="this.setCustomValidity('Input Harus Angka!')">
					<span class="form_hint">example RM0003</span>
                </li>    
                    
            	<li>
                	<label for="nama">Nama :</label>
                	<input type="text" name="nama" placeholder="Masukkan Nama " size=30 required oninvalid="this.setCustomValidity('Huruf a-z')">
                </li>
 
                <li>
                	<label for="tanggal">Tanggal :</label>
						<input type="date" name="tanggal" pattern="YYYY-MM-DD" required oninvalid="this.setCustomValidity('Harus diisi!')">
				</li>
				
				<li>
   					<button class="submit" type="submit" name="submit">SUBMIT</button>
				</li>
                    </ul>
                    </form>
			</div>
			</div>

        </div><!-- End Content Right -->
    </div><!-- End Content -->
  
    </body>
</html>