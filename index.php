<!DOCTYPE html>
<html>

<head>
	<title>Sistem Pendukung Keputusan Sepatu Bola</title>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css" media="screen,projection" />
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
		$(document).ready(function() {
			$(".button-collapse").sideNav();
			$(".dropdown-button").dropdown();
		});
	</script>
</head>

<body>
	<div class="navbar-fixed">
		<nav>
			<div class="container">

				<div class="nav-wrapper">


					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

					<ul class="right hide-on-med-and-down">
						<li><a class="active" href="index.php">Home</a></li>
						<li><a href="rekomendasi.php">Rekomendasi</a></li>
						<li><a href="daftarsepatu.php">Daftar Sepatu Bola</a></li>
						<li><a href="about.php">About</a></li>
						<ul class="right hide-on-med-and-down">
							<li><a class="waves-effect waves-light btn" href="login.php">Login</a></li>
						</ul>

					</ul>
				</div>

			</div>
		</nav>
	</div>
	<!-- Body Start -->

	<!-- Jumbotron Start -->
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<h1 class="header jarak center white-text" style="font-size: 50px">SISTEM PENDUKUNG KEPUTUSAN MENGGUNAKAN METODE WEIGHTED PRODUCT</h1>
				<div class="row center">
					<h5 class="header jarak-button col s12 light" style="margin-bottom: 0px; font-size: 30px">PEMILIHAN SEPATU BOLA</h5>
				</div>
		
				<div class="row ">
					<div class="col" style="margin-left: 34%;">
						<center><a class="waves-effect waves-light btn" href="#galeri">Galeri Sepatu</a></center>
					</div>
					<div class="col">
						<center><a class="waves-effect waves-light btn" href="#merk">Merk Sepatu</a></center>
					</div>
				</div>
			
			</div>
		</div>
		<div class="parallax"><img src="assets/image/bg.jpg" alt="Sepatu"></div>
	</div>
	<!-- Jumbotron End -->

	<!-- Galeri Sepatu Start -->
	<div id="galeri" class="modal" style="width:90%">
		<div class="modal-dialog" style="width:620px;">
			<div class="modal-content" style="width: 200%;">
				<div style="background-color: #7F7F7F">
					<div class="container" style="padding: 50px 0px">
						<div class="row">
							<center>
								<h2 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color:white">GALERI SEPATU</h2>
							</center><br><br><br>
							<div class="col s4">
								<center>
									<img class="materialboxed set-same" width="300" src="assets/image/12.jpg">
								</center>
							</div>
							<div class="col s4">
								<center>
									<img class="materialboxed set-same" width="300" src="assets/image/vapor.jpg">
								</center>
							</div>
							<div class="col s4">
								<center>
									<img class="materialboxed set-same" width="300" src="https://static.nike.com/a/images/c_limit,w_318,f_auto/t_product_v1/0dffa257-fbff-45e5-9421-754da80b1c04/mercurial-superfly-8-club-mg-multi-ground-football-boot-d8z5C3.png">
								</center>
							</div>
						</div>

						<div class="row">
							<div class="col s4">
								<center>
									<img class="materialboxed set-same" src="https://s3.bukalapak.com/img/87674597092/s-330-330/data.jpeg.webp">
								</center>
							</div>
							<div class="col s4">
								<center>
									<img class="materialboxed set-same" src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/556ac078-fd7d-40d7-9f2f-0ebf6334a80b/phantom-gt-elite-fg-football-boot-rXskN1.png">
								</center>
							</div>
							<div class="col s4">
								<center>
									<img class="materialboxed set-same" src="https://www.futbolemotion.com/imagesarticulos/100608/750/bota-adidas-adipure-11pro-trx-fg-blanca-solar-blue-0.jpg">
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Galeri Sepatu End -->

	<!-- Merk Sepatu Start -->
	<div id="merk" class="modal" style="width:90%">
		<div class="modal-dialog" style="width:620px;">
			<div class="modal-content" style="width: 200%;">
				<div style="background-color: #FBF37C">
					<div class="container">
						<div class="section-card" style="padding: 50px 0px">
							<!--   Icon Section   -->
							<center>
								<h2 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73">MERK SEPATU</h2>
							</center><br><br><br>
							<ul>
								<li>
									<div class="row center">
										<div class="col">
											<img width="200" src="https://lh3.googleusercontent.com/proxy/6606qYTLDpI3RBHJBGeqfYaK0A7_uJi1Wrtfw_t6wcfZ8B9_J1gmEJzHcx0FMPE7LFNN_l73IYAJa2xYkZelLz_XqPCYcYe74dxdwB0x-cSgMaa1UUKOfBDlV9O_p30_RLibilapNzFOTuQirlDI7C2FQDVVND1y9FOt-VU9pHAD0yGs2Q=s0-d">
										</div>

										<div class="col">
											<img width="200" src="https://logodownload.org/wp-content/uploads/2014/07/adidas-logo-1.png">
										</div>
										<div class="col">
											<img width="200" src="https://i.pinimg.com/originals/d6/2e/e2/d62ee237e901fb9d16b7714b9bd165bb.png">
										</div>
										<div class="col">
											<img width="200" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/MIZUNO_logo.svg/1280px-MIZUNO_logo.svg.png">
										</div>
										<div class="col">
											<img width="200" src="https://i.pinimg.com/originals/e1/1d/e1/e11de149dcb1fb0f50f7c0097a65df74.jpg">
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Merk Sepatu End -->

	<!-- Info Start -->
	<div style="background-color: #7F7F7F">
		<div class="container">
			<div class="section-card" style="padding: 50px 0px">

				<center>
					<h5 class="header">How to use?</h5>
				</center><br>
				<p>Pilih halaman "Rekomendasi" lalu masukkan kriteria yang telah di sediakan lalu klik tombol "Recomendation" dan sistem akan menampilkan rekomendasi sepatu bola yang sesuai.</p>


			</div>
		</div>
	</div>
	</div>
	<!-- Info End -->

	<!-- Body End -->

	<!-- Footer Start -->
	<div class="footer-copyright" style="padding: 30px 0px; background-color: #efefef">
		<div class="container">
			<center>
			</center>
			<p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Sepatu Bola - Gerald Arrivaldo</p>
		</div>
	</div>
	<!-- Footer End -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.parallax').parallax();
			$('.modal').modal();
		});
	</script>
</body>

</html>