<?php
        session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi Klinik</title>

</head>
<body>
    <!-- header -->
	<div id="header">
        <div class="logo">
        </div>
        <div class="title">
            <h1> KLINIK RAWAT INAP RAHMA HUSADA CELAKET </h1>
        </div>
        
		<div class="logout">
            <?php
				if(isset($_SESSION['username']))
				{?>
			<a href="logout.php">LOGOUT</a>
			      <?php
				}
				else
				{?>
            <a href="login.php">LOGIN</a>
                <?php
				}
				?>
        </div>
		</div>
    <div id="garis"></div>
    <!-- end header -->
    
    <!-- content -->
    
    <div>
  <!--home page-->
    <?php 
      $pages_dir = 'pages';
      if(!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
          include($pages_dir.'/'.$p.'.php');
        } else {
          echo 'Halaman tidak ditemukan! T_T';
        }
      } else {
        include($pages_dir.'/home.php');
      }
    ?>
  </div>
  
    </body>
</html>