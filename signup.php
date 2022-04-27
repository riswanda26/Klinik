<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi Klinik</title>
<link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
    <!-- header -->
	<div id="header">
        <div class="logo">
        </div>
        <div class="title">
           <h1> KLINIK RAWAT INAP RAHMA HUSADA CELAKET </h1>
        </div>
		
		</div>
    <!-- end header -->
    
    <div id="garis"></div>
    
    <!-- sidebar -->
    <div id="content">
        
        <div class="content-right">
            <div class="utama">
                <br />
                <h2> <center>SISTEM INFORMASI KLINIK CHANDRA</center></h2>
                <br/><br/>
                
                <div class="form">
                    <form action="prosesdaftar.php" method="POST">
                    <div class="judul"><h2><strong><center>DAFTAR</center></strong></h2></div>
                    
                        
                        <input id="username" type="text" name="username" class="validate" placeholder="USERNAME" required>
          				
                  
          				<input id="email" type="email" name="email" class="validate" placeholder="EMAIL" required>
          			
        			                    
          				<input id="password" type="password" name="password" class="validate" placeholder="PASSWORD" required>
          			
                        <button class="submit" type="submit" name="submit">DAFTAR</button>
                    </br></br>
                    
                       <center>Sudah Punya Akun? <a href="login.php">LOGIN</a></center> 
                </form>
                </div>
                
            </div>

        </div><!-- End Content Right -->
    </div><!-- End Content -->
  
    </body>
</html>