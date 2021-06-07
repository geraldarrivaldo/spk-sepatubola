<?php
    error_reporting( ~E_NOTICE );
    require_once 'dbconfig-sepatu.php';
    
    if(isset($_GET['detail_id']) && !empty($_GET['detail_id']))
    {
        $id = $_GET['detail_id'];
        $stmt_edit = $DB_con->prepare('SELECT * FROM sepatubola WHERE id_sepatu =:uid');
        $stmt_edit->execute(array(':uid'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: index.php");
    }    
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
									<li><a  href="javascript:history.go(-1)">Back</a></li>
									<li><a  href="index.php">Home</a></li>
									<li><a href="rekomendasi.php">Rekomendasi</a></li>
									<li><a href="daftarsepatu.php">Daftar Sepatu Bola</a></li>
									<li><a href="#about.php">About</a></li>
									<ul class="right hide-on-med-and-down">
                            <li><a class="waves-effect waves-light btn" href="login.php">Login</a></li>
                        </ul>
									
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->
		

	

		<!-- Daftar SEpatu Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 50px 0px">
		      <!--   Icon Section   -->
				<center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73">DETAIL SEPATU</h4>
				</center><br>
				<ul>
				    <li>
						<div class="row">
							<div class="col s6">
                                <div class="card">
                                    <div class="card-content">
                                        <table class="responsive-table">    
                                            
                                            <tr>
                                                <td>Merk Sepatu</td>
                                                <th><?php echo $merk_sepatu; ?></th>
                                            </tr>
                                            <tr>
                                                <td>Tipe Sepatu</td>
                                                <th><?php echo $tipe_sepatu; ?></th>
                                            </tr>
                                            <tr>
                                                <td>Category</td>
                                                <th><?php echo $jenis_type; ?></th>
                                            </tr>
                                            <tr>
                                                <td>Jenis Material</td>
                                                <th><?php echo $jenis_material; ?></th>
                                            </tr>
                                            <tr>
                                                <td>Berat</td>
                                                <th><?php echo $jenis_weight; ?></th>
                                            </tr>
                                            <tr>
                                                <td>Posisi</td>
                                                <th><?php echo $jenis_position; ?></th>
                                            </tr>
                                            <tr>
                                                <td>Harga</td>
                                                <th>Rp. <?php echo number_format($harga_sepatu,0,',','.') ; ?></th>
                                            </tr>                                        
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="card">
                                    <div  class="card-content">
                                        <center><img src="<?php echo $gambar_sepatu; ?>" width="500px" class="materialboxed"></center>
                                    </div>
                                </div>
                            </div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar sepatu End -->

	   
    <!-- Body End -->

  <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 30px 0px; background-color: white">
      <div class="container">
     
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Sepatu Bola - Gerald Arrivaldo</p>
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