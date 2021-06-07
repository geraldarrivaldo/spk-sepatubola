<?php
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['pass'];
	include"koneksi.php";
	

	$admin=mysqli_query($con, "select * from user where username='$username' and password='$password'");
	$tot=mysqli_num_rows($admin);
	$r=mysqli_fetch_array($admin);
	if ($tot>0){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['username']=$r['username'];
		$_SESSION['level']=$r['level'];
	if($r['level']=='admin'){
	echo"<script>location.href='admin/index.php'</script>";
		
	}
	// elseif ($r['level']=='petugas') {
	// echo"<script>location.href='Petugas/index.php'</script>";	
	// }

	}else{
		echo "<script>alert('akun salah')</script>";
		echo "<script>location.href='login.php'</script>";
	}


?>