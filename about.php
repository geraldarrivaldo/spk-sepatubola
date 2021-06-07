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
									<li><a href="index.php">Home</a></li>
									<li><a href="rekomendasi.php">Rekomendasi</a></li>
                                    <li><a href="daftarsepatu.php">Daftar Sepatu Bola</a></li>
                                    <li><a class="active" href="about.php">About</a></li>
									<ul class="right hide-on-med-and-down">
										<li><a class="waves-effect waves-light btn" href="login.php">Login</a></li>
								</ul>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->
		

        <center><span class="title">About</span></center>
       <center> <img  width="300" src="data:image/jpeg;base64,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">
       </center>
       <center><span class="title">Gerald Arrivaldo</span></center>
       <center><span class="title">00000020733</span></center>
    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 60px 0px; background-color: white">
      <div class="container">
      	<center>
					<!-- <img src="assets/image/logo.png" style="height: 40px; width: auto; margin-top: 12px"> -->
      	</center>
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Sepatu Bola - Gerald Arrivaldo</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>