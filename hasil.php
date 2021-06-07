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
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
		

	

		<!-- Daftar Sepatu Start -->
	<div style="background-color: #7D6B7D">
		<div class="container">
		    <div class="section-card" style="padding: 50px 0px">
			  <!--   Icon Section   -->
			 

			  <center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: White">HASIL REKOMENDASI SEPATU</h4>
				</center><br><br>
				<ul>
				    <li>
						
								<div class="card">
									<div class="card-content">
										<table class="table table-dark table-striped responsive-table">
                                            <thead>
                                                <tr>
                                                    <th><center>No</center></th>
													<th><center>Nama Sepatu</center></th>
													<th><center>Tipe Sepatu</center></th>
													<th><center>Harga Sepatu</center></th>
													<th><center>Detail</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<!--count($V)-->
												<?php
												
												
												$no=1;
												if(error_reporting(0)){
													
												
												for ($i=0;$i<2;$i++) {
													$sql=mysqli_query($con, "select * from sepatubola where id_sepatu='".$V[$i][1]."'");
													$user=mysqli_fetch_array($sql);
													
											?>
												<tr>
													<td><center><?php echo $no?></center></td>
													<td><center><?php echo $user['merk_sepatu']?> </center></td>
													<td><center><?php echo $user['tipe_sepatu']?></center></td>
													<td><center><?php echo 'Rp.'.' '. number_format($user['harga_sepatu'],0,',','.') ?></center></td>
													<td><center>
														<a class="waves-effect waves-light btn" href="detail.php?detail_id=<?php echo $user['id_sepatu']?>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
														</center>
												</td>
												</tr>
												<?php
												
													$no++;
												}}
												?>
                                            </tbody>
										</table>
                                    </div>
								</div>
						
				    </li>
				</ul><br><br>

				<center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: white">Penjumlahan Bobot</h4>
				</center><br><br>
				<ul>
					<li>
							<div class="row">
								<div class="card">
									<div class="card-content">
										<table class=" table table-dark table-striped responsive-table responsive-table">
											<thead>
												<tr>
													<th><center>Value Kriteria Harga</center></th>
													<th><center>Value Kriteria Type</center></th>
													<th><center>Value Kriteria Material</center></th>
													<th><center>Value Kriteria Weight</center></th>
													<th><center>Value Kriteria Position</center></th>
													<th><center>Jumlah Bobot (W)</center></th>
												</tr>
											</thead>
											<tbody>
												<!--count($W)-->
												<tr>
													<td><center><?php print_r($harga);?></center></td>
													<td><center><?php print_r($type);?></center></td>
													<td><center><?php print_r($material);?></center></td>
													<td><center><?php print_r($weight);?></center></td>
													<td><center><?php print_r($position);?></center></td>
													
													<td><center><?php print_r($W);?></center></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
					</li>
				</ul><br><br>

			   <center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: white">Normalisasi Bobot</h4>
				</center><br><br>
				<ul>
				    <li>
							<div class="row">
								<div class="card">
									<div class="card-content">
										<table class="table table-dark table-striped responsive-table responsive-table">
                                            <thead>
                                                <tr>
													<th><center>W1<br>
													Value Kriteria Harga/Jumlah Bobot
													</center></th>
													<th><center>W2<br>
													Value Kriteria Type/Jumlah Bobot
													</center></th>
													<th><center>W3<br>
														Value Kriteria Material/Jumlah Bobot
													</center></th>
													<th><center>W4<br>
														Value Kriteria Weight/Jumlah Bobot
													</center></th>
													<th><center>W5<br>
														Value Kriteria Position/Jumlah Bobot</center></th>
												
                                                </tr>
                                            </thead>
                                            <tbody>
												<!--count($W)-->
												<tr>
													<td><center><?php print_r($harga);?>/<?php print_r($W);?> = <?php print_r($W1);?></center></td>
													<td><center><?php print_r($type);?>/<?php print_r($W);?> = <?php print_r($W2);?></center></td>
													<td><center><?php print_r($material);?>/<?php print_r($W);?> = <?php print_r($W3);?></center></td>
													<td><center><?php print_r($weight);?>/<?php print_r($W);?> = <?php print_r($W4);?></center></td>
													<td><center><?php print_r($position);?>/<?php print_r($W);?> = <?php print_r($W5);?></center></td>
													
												</tr>
                                            </tbody>
										</table>

										<!-- <table class="responsive-table">
                                            <thead>
                                                <tr>
													<th><center>W Total<br>
														W1+W2+W3+W4+W5
													</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
												
												<tr><td><center><?php print_r($W1);?>+<?php print_r($W2);?>+<?php print_r($W3);?>+<?php print_r($W4);?>+<?php print_r($W5);?> = <?php print_r($WTotal);?></center></td>
												</tr>
                                            </tbody>
										</table> -->

                                    </div>
								</div>
							</div>
				    </li>
				</ul><br><br>

				<center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: white">Perhitungan Vektor S</h4>
					</center><br><br>
					<ul>
						<li>
							
								<div class="card">
									<div class="card-content">
										<table class="table table-dark table-striped responsive-table responsive-table">
											<thead>
												<tr>
													<th><center>No</center></th>
													<th><center>ID Sepatu</center></th>
													<th><center>Sepatu</center></th>
													<th><center>Perhitungan</center></th>
												</tr>
											</thead>
											<tbody>
												<!--count($S)-->
												<?php
													$no = 1;
													foreach ($S as $row) {
														# code...
														
													
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $row[1]?></center></td>
													<td><center><?php echo $row[2]. ' '. $row[3]?></center></td>
													<td><center><?php echo $row[0]?></center></td>
												</tr>
												<?php 
												$no++;
												}
												?>
												<!-- <?php
													$i = 0;
													$no = 1;
													foreach ($S as $row) {
														# code...
														
													
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $row[1]?></center></td>
													<td><center><?php echo $row[2]?></center></td>
													<td><center><?php echo $row[0]?></center></td>
												</tr>
												<?php 
												$no++;
													if (++$i == 5) break;
												}
												?> -->
											</tbody>
										</table>
									</div>
								</div>
						
						</li>
					</ul><br><br>

					<center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: white">Perhitungan Vektor V</h4>
					</center><br><br>
					<ul>
						<li>
							
								<div class="card">
									<div class="card-content">
										<table class="table table-dark table-striped responsive-table responsive-table">
											<thead>
												<tr>
													<th><center>No</center></th>
													<th><center>Tipe Sepatu</center></th>
													<th><center>Perhitungan</center></th>
												</tr>
											</thead>
											<tbody>
												<!--count($V)-->
												<?php
													
													$no = 1;
													foreach ($V as $row) {
														# code...															
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $row[1]?></center></td>
													<td><center><?php echo $row[0]?></center></td>
												</tr>
												<?php 
												$no++;
												}
												?>
												
											</tbody>
										</table>
									</div>
								</div>
							
						</li>
					</ul><br><br>
				
				<!-- <center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: white">PERHITUNGAN S TOTAL</h4>
				</center><br><br>
				<ul>
					<li>
						<div class="row">
							<div class="card">
								<div class="card-content">
									<table class="responsive-table">
										<thead>
											<tr>
												<th><center>Total Perhitungan</center></th>
											</tr>
										</thead>
										<tbody>
											count($Stotal)
											<tr>
												<td><center><?php echo $temp; ?><?php echo $Stotal; ?></center></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</li>
				</ul><br><br> -->
				<center>
			
					<a href="rekomendasi.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1" style="margin-top: 20px">Rekomendasi Ulang</a>
			
				</center>
	    	</div>
		</div>
	</div>
	<!-- Daftar Sepatu End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 30px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Sepatu Bola</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  	  $(document).ready(function(){
	      $('.parallax').parallax();
		  $('.modal').modal();
	    });
	</script>
</body>
</html>