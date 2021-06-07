<?php
	session_start();
	include "../../koneksi.php";

	$kd=$_POST['kd'];
	$merk_sepatu=$_POST['merk_sepatu'];
	$gambar=$_POST['gambar_sepatu'];
	$tipe_sepatu=$_POST['tipe_sepatu'];


	$harga=$_POST['harga'];
	$harga_B=$_POST['harga_B'];
	$harga_sepatu=$_POST['harga_sepatu'];

	$type=$_POST['type'];
	$bobot_type=$_POST['bobot_type'];
	$jenis_type=$_POST['jenis_type'];
	
	$material=$_POST['material'];
	$bobot_material=$_POST['bobot_material'];
	$jenis_material=$_POST['jenis_material'];

	$weight=$_POST['weight'];
	$bobot_weight=$_POST['bobot_weight'];
	$jenis_weight=$_POST['jenis_weight'];

	$position=$_POST['position'];
	$bobot_position=$_POST['bobot_position'];
	$jenis_position=$_POST['jenis_position'];

	


	$query1=mysqli_query($con,"UPDATE sepatubola SET merk_sepatu='$merk_sepatu', gambar_sepatu='$gambar', tipe_sepatu='$tipe_sepatu', 
	harga='$harga', harga_B='$harga_B', harga_sepatu='$harga_sepatu', type='$type', bobot_type='$bobot_type', jenis_type='$jenis_type', weight='$weight', 
	bobot_weight='$bobot_weight', jenis_weight='$jenis_weight', position='$position', bobot_position='$bobot_position', jenis_position='$jenis_position' WHERE id_sepatu='$kd'");
	if ($query1) {
		echo "<script>alert('Berhasil diubah');</script>";
		
		echo "<script>location.href='datasepatu.php'</script>";
	}else{
		echo "<script>alert('Data gagal diubah, silakan coba lagi!');</script>";
		echo "<script>location.href='datasepatu.php'</script>";
    }
?>