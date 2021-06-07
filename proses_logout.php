<?php
	session_start();
	unset($_SESSION['username'],$_SESSION['name'],$_SESSION['pass']);
	session_destroy();
	
	
	echo "<script>alert('Logout Berhasil!'); document.location='index.php'</script>";
?>