<?php
	session_start();
	include "../../koneksi.php";
	$id_sepatu=$_POST['id_sepatu'];
	$merk_sepatu=$_POST['merk_sepatu'];
    $tipe_sepatu=$_POST['tipe_sepatu'];
	$gambar_sepatu = $_POST['gambar_sepatu'];
	$harga_sepatu=$_POST['harga_sepatu'];
    $harga=$_POST['harga'];
	$harga_B =$_POST['harga_B']; 
	$jenis_type=$_POST['jenis_type'];
	$type=$_POST['type'];
	$bobot_type=$_POST['bobot_type'];
	$jenis_material=$_POST['jenis_material'];
	$material=$_POST['material'];
	$bobot_material=$_POST['bobot_material'];
	$jenis_weight=$_POST['jenis_weight'];
	$weight=$_POST['weight'];
	$bobot_weight=$_POST['bobot_weight'];
	$jenis_position=$_POST['jenis_position'];
	$position=$_POST['position'];
	$bobot_position=$_POST['bobot_position'];

	
	


	$query1=mysqli_query($con,"INSERT INTO sepatubola (id_sepatu, merk_sepatu,gambar_sepatu,tipe_sepatu,harga_sepatu,harga,harga_B,jenis_type,type,bobot_type,jenis_material,material,
	bobot_material,jenis_weight,weight,bobot_weight,jenis_position,position,bobot_position) 
	VALUE 
	('$id_sepatu', '$merk_sepatu' ,'$gambar_sepatu', '$tipe_sepatu','$harga_sepatu','$harga','$harga_B', '$jenis_type','$type', '$bobot_type','$jenis_material','$material',
	'$bobot_material','$jenis_weight','$weight','$bobot_weight','$jenis_position','$position','$bobot_position')");
	if ($query1) {
		echo "<script>alert('Data berhasil ditambahkan');</script>";
		echo "<script>location.href='../pages/datasepatu.php'</script>";
	}else{
		echo "<script>alert('Data gagal ditambahkan, silakan coba lagi!');</script>";
		echo "<script>location.href='datasepatu.php'</script>";
    }
?>