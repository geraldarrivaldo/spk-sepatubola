<?php
	$server='localhost';
	$user='root';
	$pass='';
	$db='sepatubola';

	$con=mysqli_connect($server,$user,$pass);
	if($con){
		$selectdb=mysqli_select_db($con, $db);

	}
?>
