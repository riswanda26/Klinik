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
				<div class="content">
                     <div class="judul1">
                <h1> Penambahan Data Dokter </h1>
                    </div>
                    <br>
				<form class="contact_form"  method="post" action="tambahdokter.php">
				<ul>
                <li>
                	<label for="kode_dokter">Kode Dokter:</label>
                	<input type="text" name="kode_dokter" placeholder="Masukkan Kode Dokter" required oninvalid="this.setCustomValidity('Input Harus Angka!')">
					<span class="form_hint">example 000003</span>
                </li>
				
            	<li>
                	<label for="nama">Nama :</label>
                	<input type="text" name="nama" placeholder="Masukkan Nama Dokter" size=30 required oninvalid="this.setCustomValidity('Huruf a-z')">
                </li>
				
				
				<li>
                	<label for="spesialis">Spesialis:</label>
                	<input type="text" name="spesialis" placeholder="Spesialisasi" required oninvalid="this.setCustomValidity('Harus diisi!')">
                </li>
                
                <li>
                	<label for="umur">Umur :</label>
						<input type="number" name="umur" placeholder="Umur" required oninvalid="this.setCustomValidity('Harus diisi!')">
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
                	<input type="number" name="hp" placeholder="Masukkan Nomor Hp Anda" required oninvalid="this.setCustomValidity('Input Harus Angka!')">
					<span class="form_hint">example 085755575047</span>
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