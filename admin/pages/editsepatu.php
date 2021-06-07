<!-- Modal TAMBAH -->
<?php 
session_start();
include('../../koneksi.php');
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
	<link rel="icon" type="../image/png" sizes="96x96" href="../assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			Admin
			<div class="container-fluid">
				<div id="navbar-menu">
					<!-- <form class="navbar-form navbar-right">
							<div class="input-group">
							<input type="text" value="" class="form-control" placeholder="Cari...">
								<span class="input-group-btn"><button type="button" class="btn btn-primary">Cari</button></span>
							</div>
						</form> -->
						
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
				<ul class="nav">
						<li><a href="../index.php" ><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>
						<li><a href="pages/datasepatu.php" class="active"><i class="lnr lnr-file-empty"></i> <span>Data Sepatu</span></a></li>	
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
								<h1 class="panel-title" style="font-size:25px;"><center>Edit Data Sepatu</center></h1>
							</div>
	<?php
    $kode=$_GET['id'];
    $query=mysqli_query($con, "SELECT * FROM sepatubola WHERE id_sepatu='$kode'");
    $data=mysqli_fetch_array($query);
    ?>
<div class="panel-body">
	<form method="post" name="editsepatu" action="proses_edit.php">
		<input hidden name="kd" value="<?php echo $kode?>"/>
			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">ID Sepatu</label>
				<div class="col-sm-9">
					<input type="text" name="id_sepatu" id="kode" class="form-control" placeholder="ID Sepatu" value="<?php echo $data['id_sepatu'] ?>" disabled>
				</div>
			</div>

			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">Merk Sepatu</label>
				<div class="col-sm-9">
					<input type="text" name="merk_sepatu" id="merk_sepatu" class="form-control" placeholder="Merk Sepatu" value="<?php echo $data['merk_sepatu'] ?>">
				</div>
			</div>

			<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Gambar Sepatu</label>
					<div class="col-sm-9">
						<input type="text" name="gambar_sepatu" id="gambar" class="form-control" placeholder="URL Gambar Sepatu" value="<?php echo $data['gambar_sepatu'] ?>">
					</div>
			</div>

			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">Jenis Sepatu</label>
				<div class="col-sm-9">
				<input type="text" name="tipe_sepatu" id="tipe_sepatu" class="form-control" placeholder="Jenis Sepatu" value="<?php echo $data['tipe_sepatu'] ?>">
				</div>
			</div>

			
		
			
			<!-- Kriteria Harga Start -->
			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">Kriteria Harga</label>
				<div class="col-sm-3">
					<select id="kriteria_harga_nilai" name="harga" class="form-control">
							<option value="<?php echo $data['harga'] ?>" selected><?php echo $data['harga'] ?></option>
							<?php
							$query=mysqli_query($con,"select * from kriteria_harga");
							$no=1;
							while($data=mysqli_fetch_array($query)){
								?>
							
							<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
							<?php
							$no++;}
							?>	
					</select>
				</div>

				<div class="col-sm-3">
					<label for="" class="col-sm-3 col-form-label">Bobot Harga</label>
					<div class="col-sm-9">
						<select id="kriteria_bobot_harga" name="harga_B" class="form-control">
								
								<option value="">Pilih</option>
								
								<?php
								$query=mysqli_query($con,"SELECT * FROM kriteria_bobot_Harga INNER JOIN kriteria_harga ON kriteria_bobot_harga.nilai_kriteria_harga=kriteria_harga.nilai"); 
								$no=1;
								while ($data=mysqli_fetch_array($query)){
								?>


								<option id="kriteria_bobot_harga" class="<?php echo $data['nilai_kriteria_harga']; ?>" value="<?php echo $data['bobot_kriteria_harga'];?>"><?php echo $data['bobot_kriteria_harga']; ?></option>
								<?php 
								$no++;}
								?>
						</select>
					</div>
				</div>

				<?php
				$kode=$_GET['id'];
				$query=mysqli_query($con, "SELECT * FROM sepatubola WHERE id_sepatu='$kode'");
				$data=mysqli_fetch_array($query);
				?>
				<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Harga Sepatu</label>
						<div class="col-sm-9">
							<input type="text" name="harga_sepatu" id="harga_sepatu" class="form-control" placeholder="Harga (Rp)" value="<?php echo $data['harga_sepatu'] ?>">
						</div>
					</div>		
			</div>
			<!-- Kriteria Harga End -->

			<!-- Kriteria Type Start -->
			<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Kriteria Type</label>
					<div class="col-sm-3">
						<select id="kriteria_type_nilai" name="type" class="form-control">
								<option value="<?php echo $data['type'] ?>" selected><?php echo $data['type'] ?></option>
								<?php
								$query=mysqli_query($con, "select * from kriteria_type");
								$no=1;
								while($data=mysqli_fetch_array($query)){
									?>
								
								<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
								<?php
								$no++;}
								?>	
						</select>
					</div>
	
					<div class="col-sm-3">
							<label for="" class="col-sm-3 col-form-label">Bobot Type</label>
							<div class="col-sm-9">
									<select id="kriteria_bobot_type" name="bobot_type" class="form-control">
											<option value="">Pilih</option>
											<?php
											$query=mysqli_query($con,"SELECT * FROM kriteria_bobot_type INNER JOIN kriteria_type ON kriteria_bobot_type.nilai_kriteria_type=kriteria_type.nilai"); 
											$no=1;
											while ($data=mysqli_fetch_array($query)){
											?>


											<option id="kriteria_bobot_type" class="<?php echo $data['nilai_kriteria_type']; ?>"value="<?php echo $data['bobot_kriteria_type']?>"><?php echo $data['bobot_kriteria_type']?></option>
											<?php 
											$no++;}
											?>	
										</select>
							</div>
					</div>
					
	
					<?php
					$kode=$_GET['id'];
					$query=mysqli_query($con, "SELECT * FROM sepatubola WHERE id_sepatu='$kode'");
					$data=mysqli_fetch_array($query);
					?>
					<div class="col-sm-3">
							<label for="" class="col-sm-3 col-form-label">Jenis Type</label>
							<div class="col-sm-9">
								<input type="text" name="jenis_type" id="jenis_type" class="form-control" placeholder="Jenis Type" value="<?php echo $data['jenis_type'] ?>">
							</div>
						</div>		
				</div>
				<!-- Kriteria Type End -->
		<!-- Kriteria Material Start -->
		<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Kriteria Material</label>
					<div class="col-sm-3">
						<select id="kriteria_material_nilai" name="material" class="form-control">
							<option value="<?php echo $data['material'] ?>" selected><?php echo $data['material'] ?></option>
							<?php
							$query=mysqli_query($con,"select * from kriteria_material");
							$no=1;
							while($data=mysqli_fetch_array($query)){
								?>
							
							<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
							<?php
							$no++;}
							?>	
						</select>
					</div>

					<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Bobot Material</label>
						<div class="col-sm-9">
							<select id="kriteria_material" name="bobot_material" class="form-control">
								<option value="">Pilih</option>
								<?php
								$query=mysqli_query($con,"SELECT * FROM kriteria_bobot_material INNER JOIN kriteria_material ON kriteria_bobot_material.nilai_kriteria_material=kriteria_material.nilai"); 
								$no=1;
								while ($data=mysqli_fetch_array($query)){
								?>


								<option id="kriteria_bobot_material" class="<?php echo $data['nilai_kriteria_material']; ?>"value="<?php echo $data['bobot_kriteria_material']?>"><?php echo $data['bobot_kriteria_material']?></option>
								<?php 
								$no++;}
								?>	
							</select>
						</div>
					</div>
					

					<?php
					$kode=$_GET['id'];
					$query=mysqli_query($con,"SELECT * FROM sepatubola WHERE id_sepatu='$kode'");
					$data=mysqli_fetch_array($query);
					?>
					<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Bahan Material</label>
						<div class="col-sm-9">
							<input type="text" name="jenis_material" id="jenis_material" class="form-control" placeholder="Jenis Material" value="<?php echo $data['jenis_material'] ?>">
						</div>
					</div>		
				</div>
				<!-- Kriteria material End -->

				<!-- Kriteria Weight Start -->
			<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Kriteria Weight</label>
					<div class="col-sm-3">
						<select id="kriteria_weight_nilai" name="weight" class="form-control">
								<option value="<?php echo $data['weight'] ?>" selected><?php echo $data['weight'] ?></option>
								<?php
								$query=mysqli_query($con, "select * from kriteria_weight");
								$no=1;
								while($data=mysqli_fetch_array($query)){
									?>
								
								<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
								<?php
								$no++;}
								?>	
						</select>
					</div>
	
					<div class="col-sm-3">
							<label for="" class="col-sm-3 col-form-label">Bobot Weight</label>
							<div class="col-sm-9">
									<select id="kriteria_bobot_weight" name="bobot_weight" class="form-control">
											<option value="">Pilih</option>
											<?php
												$query=mysqli_query($con, "SELECT * FROM kriteria_bobot_weight INNER JOIN kriteria_weight ON kriteria_bobot_weight.nilai_kriteria_weight=kriteria_weight.nilai"); 
												$no=1;
												while ($data=mysqli_fetch_array($query)){
												?>


												<option id="kriteria_bobot_weight" class="<?php echo $data['nilai_kriteria_weight']; ?>"value="<?php echo $data['bobot_kriteria_weight']?>"><?php echo $data['bobot_kriteria_weight']?></option>
												<?php 
												$no++;}
												?>	
										</select>
							</div>
					</div>
					
	
					<?php
					$kode=$_GET['id'];
					$query=mysqli_query($con, "SELECT * FROM sepatubola WHERE id_sepatu='$kode'");
					$data=mysqli_fetch_array($query);
					?>
					<div class="col-sm-3">
							<label for="" class="col-sm-3 col-form-label">Weight</label>
							<div class="col-sm-9">
								<input type="text" name="jenis_weight" id="jenis_weight" class="form-control" placeholder="weight (grams)" value="<?php echo $data['jenis_weight'] ?>">
							</div>
						</div>		
				</div>
				<!-- Kriteria Weight End -->

		
				<!-- Kriteria position Start -->
				<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Kriteria Position</label>
					<div class="col-sm-3">
						<select id="kriteria_position_nilai" name="position" class="form-control">
							<option value="<?php echo $data['position'] ?>" selected><?php echo $data['position'] ?></option>
							<?php
							$query=mysqli_query($con,"select * from kriteria_position");
							$no=1;
							while($data=mysqli_fetch_array($query)){
								?>
							
							<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
							<?php
							$no++;}
							?>	
						</select>
					</div>

					<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Bobot Position</label>
						<div class="col-sm-9">
							<select id="kriteria_bobot_position" name="bobot_position" class="form-control">
								<option value="">Pilih</option>
								<?php
								$query=mysqli_query($con,"SELECT * FROM kriteria_bobot_position INNER JOIN kriteria_position ON kriteria_bobot_position.nilai_kriteria_position=kriteria_position.nilai"); 
								$no=1;
								while ($data=mysqli_fetch_array($query)){
								?>
								<option id="kriteria_bobot_position" class="<?php echo $data['nilai_kriteria_position']; ?>"value="<?php echo $data['bobot_kriteria_position']?>"><?php echo $data['bobot_kriteria_position']?></option>
								<?php 
								$no++;}
								?>	
							</select>
						</div>
					</div>
					

					<?php
					$kode=$_GET['id'];
					$query=mysqli_query($con,"SELECT * FROM sepatubola WHERE id_sepatu='$kode'");
					$data=mysqli_fetch_array($query);
					?>
					<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Position</label>
						<div class="col-sm-9">
							<input type="text" name="jenis_position" id="jenis_position" class="form-control" placeholder="Jenis Position" value="<?php echo $data['jenis_position'] ?>">
						</div>
					</div>		
				</div>
				<!-- Kriteria Position End -->

			


		<button type="submit" class="btn btn-primary pull-right" >Simpan Perubahan</button>
	</form>
		
</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
						<!-- END BORDERED TABLE -->
	
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