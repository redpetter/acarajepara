<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet"


    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    
    <style>
    </style>

<title>Tentang Jepara</title>

</head>

<body class="metro">
	<header class="bg-darkCobalt" data-load="atasan.php"></header>
    
    <div class="" data-load="sampul1.html"></div>
	<br />

    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    <div class="container row">
        <div class="grid fluid">
            <div class="border padding20">
				<?php
					if($_GET['post']=='profil'){
						$is="Profil";
					}else if($_GET['post']=='sejarah'){
						$is="Sejarah";
					}else if($_GET['post']=='wisata'){
						$is="Pariwisata yang ada di";
					}else if($_GET['post']=='kuliner'){
						$is="Kuliner khas di";
					}else if($_GET['post']=='budaya'){
						$is="Kebudayaan";
					}
				?>
				<legend class="text-right"><h2><?php echo $is; ?> Kota Ukir</h2></legend>
                        <?php
						$comot=	mysql_query("SELECT * FROM setup_jepara where kat_jepara='$_GET[post]'");   
						while($ngisi=	mysql_fetch_array($comot)){
							if ($ngisi['judul_jepara']!=""){ 
						?>					
							<div class="span4">
							<legend><h3><?php echo $ngisi['judul_jepara']; ?></h3></legend>
							</div>
						<?php
							}
							echo $ngisi['konten_jepara'];
							echo "<br />";
						}
						?>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    
    <footer class="dark" data-load="bawahan.html"></footer>
</body>
</html>