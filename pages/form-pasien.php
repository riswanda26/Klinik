<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi Klinik</title>
<link rel="stylesheet" href="adminklinik.css" type="text/css">
    
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
				
                     <div class="judul1">
                <h1> Pendaftaran Pasien Baru </h1>
                    </div>
                    <br>
				<form class="contact_form"  method="post" action="tambahpasien.php">
				<ul>
                <li>
                	<label for="rekam_medis">No RM:</label>
                	<input type="text" name="rekam_medis" placeholder="Masukkan Nomor Rekam Medis" pattern=".{6,6}" required oninvalid="this.setCustomValidity('Nomor RM harus 6 digit')">
					<span class="form_hint">example RM1234</span>
                </li>
				
            	<li>
                	<label for="nama">Nama :</label>
                	<input type="text" name="nama" placeholder="Masukkan Nama Anda" size=30 required oninvalid="this.setCustomValidity('Huruf a-z')">
                </li>
				
				
				<li>
                	<label for="tanggal_lahir">Tanggal Lahir:</label>
                	<input type="date" name="tanggal_lahir" placeholder="1990-12-23" required oninvalid="this.setCustomValidity('Harus diisi!')">
                </li>
                
                <li>
                	<label for="umur">Umur :</label>
						<input type="number" name="umur" placeholder="Umur Pasien" required oninvalid="this.setCustomValidity('Harus diisi!')">
				</li>
                
				<li>
                	<label for="jenis_kelamin">Jenis Kelamin:</label>
                	<input class="pilih" type="radio" name="jenis_kelamin" value="Perempuan"/><font size=4px>Perempuan</font>
					<input class="pilih" type="radio" name="jenis_kelamin" value="Laki-laki"/><font size=4px>Laki-laki</font>
					
				</li>
				<li>
    				<label for="alamat">Alamat :</label>
    				<textarea name="alamat" cols="40" rows="6" required oninvalid="this.setCustomValidity('Harus diisi!')"></textarea>
				</li>	
				<li>
                	<label for="hp">No. Hp :</label>
                	<input type="number" name="hp" placeholder="Masukkan Nomor Hp Anda" pattern="0-9" required oninvalid="this.setCustomValidity('Input Harus Angka!')">
					<span class="form_hint">example 085755575047</span>
                </li>
				
				<li>
                	<label for="pekerjaan">Pekerjaan :</label>
                   <input type="text" name="pekerjaan" placeholder="Pekerjaan Pasien" size=30 pattern="[a-zA-Z]+" required oninvalid="this.setCustomValidity('Huruf a-z')">
                </li>
				<li>
                	<label for="agama">Agama :</label>
                    <input type="text" name="agama" size=30 placeholder="Agama Pasien" pattern="[a-zA-Z]+" required oninvalid="this.setCustomValidity('Huruf a-z')">
                </li>
				<li>
   					<button class="submit" type="submit" name="submit">SUBMIT</button>
				</li>
                    </ul>
                    </form>
			
			</div>

        </div><!-- End Content Right -->
    </div><!-- End Content -->
  
    </body>
</html>