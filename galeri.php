<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
	<link href="css/docs.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>
	<script src="js/docs.js"></script>
    
    <style>
	</style>
	
<title>Selamat Datang di Website Kami</title>

</head>

<body class="metro">
	<header class="bg-darkCobalt" data-load="atasan.php"></header>
    
    <div class="" data-load="slider.php"></div>
	<br />
    <div class="container grid">
		<div class="border padding15">
        <div class="row">
			<div class="span7">
				<legend>ORKEZ</legend>
				<div class="carousel" id="imgSlide">
					<div class="slide">
						<img src="images/orkes/camelia.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/orkes/family.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/orkes/new-nirwana.jpg" class="cover1"/>
					</div>
					<div class="slide">
						<img src="images/orkes/pasta.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/orkes/primadona.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/orkes/rama.jpg" class="cover1" />
					</div>
				<div class="slide">
						<img src="images/orkes/romansa.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/orkes/shakura.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/orkes/tromic.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/orkes/tepos.jpg" class="cover1" />
					</div>
				</div>
			</div>
			<div class="span7">
				<legend>Pengajian Umum</legend>
				<div class="carousel" id="imgSlide1">
					
					<div class="slide">
						<img src="images/pengajian/anwar-zahid.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/pengajian/habib-abdurrohman-bin-umar-bin-hafidz.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/pengajian/habib-lutfi.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/pengajian/habib-syech-abdul-qodir.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/pengajian/habib-zaenal-abidin.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/pengajian/kh-drs-muhammad-ali-asyidiq.jpg" class="cover1" />
					</div>
					
				</div>
			</div>
        </div>
		</div>
		
		<div class="border padding15">
        <div class="row">
			<div class="span7">
				<legend>Band Indie Jepara</legend>
				<div class="carousel" id="imgSlide2">
					<div class="slide">
						<img src="images/band/salic_band.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/band/skawan_band.jpg" class="cover1"/>
					</div>
					<div class="slide">
						<img src="images/band/furnesse_band.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/band/vegetarian.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/band/rahasia.jpg" class="cover1" />
					</div>
				</div>
			</div>
			<div class="span7">
				<legend>Galeri Persijap</legend>
				<div class="carousel" id="imgSlide3">
					<div class="slide">
						<img src="images/persijap/club.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/persijap/persijap.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/persijap/persijap-jepara.jpg" class="cover1" />
					</div>
				</div>
			</div>
        </div>
		</div>
		
		<div class="border padding15">
        <div class="row">
			<div class="span7">
				<legend>Galeri Jepara Vacation</legend>
				<div class="carousel" id="imgSlide4">
					<div class="slide">
						<img src="images/vacation/jateng-jepara-pantai-kartini-2.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/vacation/peta-wisata-jepara.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/vacation/potensi-wisata-jepara.png" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/vacation/karimunjawa" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/vacation/pulau-karimunjawa.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/vacation/tiarapark-waterbom.jpg" class="cover1" />
					</div>
				</div>
			</div>
        </div>
		</div>
	</div>
    <footer class="dark" data-load="bawahan.html"></footer>
	
	<script>
		$(function(){
			$("#imgSlide").carousel({
				effect: 'slide',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
			$("#imgSlide1").carousel({
				effect: 'fade',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
			$("#imgSlide2").carousel({
				effect: 'slowdown',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
			$("#imgSlide3").carousel({
				effect: 'switch',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
			$("#imgSlide4").carousel({
				effect: 'switch',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
		})
	</script>
</body>
</html>
