<?php
session_start();
include('../../koneksi.php');
if ($_SESSION['level'] == 'admin') {

?>
	<!doctype html>
	<html lang="en">

	<head>
		<title>Admin Sistem Pendukung Keputusan Sepatu Bola</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="../assets/css/main.css">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
		<link rel="stylesheet" href="../assets/css/demo.css">
		<!-- GOOGLE FONTS -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
	</head>

	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="brand">
					Admin
				</div>
				<div class="container-fluid">
					<div id="navbar-menu">
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<?php
			$username = $_SESSION['username'];
			$query = mysqli_query($con, "SELECT * FROM user where username='$username'");
			$user = mysqli_fetch_array($query);
			?>
			<!-- LEFT SIDEBAR -->
			<div id="sidebar-nav" class="sidebar">
				<div class="sidebar-scroll">
					<nav>
						<ul class="nav">
							<li><a href="../index.php"><i class="lnr lnr-home"></i> <span>Daftar Sepatu</span></a></li>
							<li><a href="../pages/datasepatu.php" class="active"><i class="lnr lnr-file-empty"></i> <span>CRUD Sepatu</span></a></li>
							<li><a href="../../proses_logout.php" class=""><i class="lnr lnr-home"></i> <span>Logout</span></a></li>

						</ul>
					</nav>
				</div>
			</div>
			<!-- END LEFT SIDEBAR -->
			<!-- MAIN -->
			<div class="main">
				<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="container-fluid">
						<div class="col-md-12">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title" style="font-size:25px;">
										<center>Data Sepatu</center>
									</h1>
								</div>
								<div class="panel-body">

									<div style="text-align:right;">
										<a class="btn btn-primary" href="tambahsepatu.php"><i class="fa fa-plus-circle" aria-hidden="true"> Tambah Sepatu</i></a>
										<br>
										<br>
									</div>

									<table class="table table-bordered">
										<thead>
											<tr>
												<th>
													<center>No</center>
												</th>
												<th>
													<center>ID</center>
												</th>
												<th>
													<center>Merk Sepatu </center>
												</th>
												<th>
													<center>Jenis Sepatu</center>
												</th>
												<th>
													<center>Harga</center>
												</th>
												<th>
													<center>Type</center>
												</th>
												<th>
													<center>Material</center>
												</th>
												<th>
													<center>Weight</center>
												</th>
												<th>
													<center>Position</center>
												</th>

												<th>
													<center>Action</center>
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
														<center><?php echo $user['id_sepatu'] ?></center>
													</td>
													<td>
														<center><?php echo $user['merk_sepatu'] ?></center>
													</td>
													<td>
														<center><?php echo $user['tipe_sepatu'] ?></center>
													</td>
													<td>
														<center><?php echo number_format($user['harga_sepatu'], 0, ',', '.') ?></center>
													</td>
													<td>
														<center><?php echo $user['jenis_type'] ?></center>
													</td>
													<td>
														<center><?php echo $user['jenis_material'] ?></center>
													</td>
													<td>
														<center><?php echo $user['jenis_weight'] . ' ' . 'grams' ?></center>
													</td>
													<td>
														<center><?php echo $user['jenis_position'] ?></center>
													</td>


													<td>
														<center>
															<a class="btn btn-warning" href="editsepatu.php?id=<?php echo $user['id_sepatu'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
															<a class="btn btn-danger" href="deletesepatu.php?id=<?php echo $user['id_sepatu'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data berikut ini?');"><i class="lnr lnr-trash"></i></a>

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
							</div>
							<!-- END BORDERED TABLE -->

							
								</div>


							</div>

						</div>
					</div>
				</div>
				<!-- END MAIN CONTENT -->
			</div>
			<!-- END MAIN -->
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2021 .Gerald Arrivaldo. 00000020733.</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="../assets/vendor/jquery/jquery.min.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../assets/scripts/klorofil-common.js"></script>
		<script src="../assets/js/jquery.chained.min.js"></script>
		<script>
			$("#kriteria_bobot_harga").chained("#kriteria_harga_nilai");
			$("#kriteria_bobot_type").chained("#kriteria_type_nilai");
			$("#kriteria_bobot_material").chained("#kriteria_material_nilai");
			$("#kriteria_bobot_weight").chained("#kriteria_weight_nilai");
			$("#kriteria_bobot_position").chained("#kriteria_position_nilai");
		</script>
	</body>

	</html>
<?php } else {
	echo "<script>alert('anda harus login')</script>";
	echo "<script>location.href='../../index.php'</script>";
} ?>