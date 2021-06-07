<?php
	session_start();
	include "../../koneksi.php";

	$kode=$_GET['id'];
	$query=mysqli_query($con, "DELETE FROM sepatubola WHERE id_sepatu='$kode'");
	if ($query) {
		echo "<script>alert('Data Sepatu Berhasil dihapus');</script>";
		echo "<script>location.href='datasepatu.php'</script>";
	}else{
		echo "<script>alert('Data Sepatu Gagal dihapus, silakan coba lagi!');</script>";
		echo "<script>location.href='datasepatu.php'</script>";
	}
?>