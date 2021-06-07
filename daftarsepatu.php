<?php
session_start();
include('koneksi.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Sistem Pendukung Keputusan Sepatu Bola</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css" media="screen,projection" />
	<!-- <link rel="stylesheet" href="assets/css/table.css"> -->
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
	<div class="navbar-fixed">
		<nav>
			<div class="container">

				<div class="nav-wrapper">


					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

					<ul class="right hide-on-med-and-down">
						<li><a href="index.php">Home</a></li>
						<li><a href="rekomendasi.php">Rekomendasi</a></li>
						<li><a class="active" href="daftarsepatu.php">Daftar Sepatu Bola</a></li>
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




	<!-- Daftar Sepatu Start -->
	<div style="background-color: #FF8C64">
		<div class="container">
			<div class="section-card" style="padding: 50px 0px">
				<h1 style="font-size: 50px; text-align:center; color:white">DAFTAR SEPATU</h1>
				<ul>
					<li>
						
							<div class="card">
								<div class="card-content">
									<table class="table table-dark table-striped responsive-table">

										<thead>
											<tr>
												<th>
													<center>No</center>
												</th>
												<th>
													<center>Merk Sepatu</center>
												</th>
												<th>
													<center>Tipe Sepatu</center>
												</th>
												<th>
													<center>Harga</center>
												</th>
												<th>
													<center>Detail</center>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$query = mysqli_query($con, "SELECT * FROM sepatubola");
											$no = 1;
											while ($user = mysqli_fetch_array($query)) {
											?>
												<tr>
													<td>
														<center><?php echo $no ?></center>
													</td>

													<td>
														<center><?php echo $user['merk_sepatu'] ?></center>
													</td>
													<td>
														<center><?php echo $user['tipe_sepatu'] ?></center>
													</td>
													<td>
														<center><?php echo 'Rp.' . ' ' . number_format($user['harga_sepatu'], 0, ',', '.') ?></center>
													</td>
													<td>
														<center><a class="waves-effect waves-light btn" href="detail.php?detail_id=<?php echo $user['id_sepatu'] ?>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
														</center>
													</td>
												</tr>
											<?php
												$no++;
											}
											?>
										</tbody>
									</table>
								</div>
						
						
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Daftar Sepatu End -->

	<!-- Body End -->

	<!-- Footer Start -->
	<div class="footer-copyright" style="padding: 30px 0px; background-color: white">
		<div class="container">

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