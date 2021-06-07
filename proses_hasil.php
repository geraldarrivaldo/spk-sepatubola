
<?php
include "koneksi.php";
//WP
$harga			= $_POST['harga'];
$type			= $_POST['type'];
$material	= $_POST['material'];
$weight			= $_POST['weight'];
$position		= $_POST['position'];


echo "<script> console.log('harga',$harga, 'type',$type, 'material',$material,'weight',$weight,'position',$position);</script>";
//Jumlah Bobot
$W = $harga+$type+$material+$weight+$position;
//Menghitung W
//normalisasi bobot
$W1 = $harga/$W;
$W2	= $type/$W;
$W3	= $material/$W;
$W4	= $weight/$W;
$W5= $position/$W;

$WTotal = $W1+$W2+$W3+$W4+$W5;


//Perhitungan Vektor S
$datasepatu="select id_sepatu, merk_sepatu, tipe_sepatu, harga, harga_sepatu, harga_B,  type, bobot_type, material, bobot_material, weight, 
bobot_weight,jenis_weight, position, bobot_position from sepatubola  
WHERE (harga = '$harga' AND type = '$type' AND material = '$material' AND weight = '$weight' AND position = '$position' ) ";
$query_run = mysqli_query($con,$datasepatu);


if (mysqli_num_rows($query_run)<1) 
{
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data Sepatu Tidak ada!');
    window.location.href='rekomendasi.php';
    </script>");
}

$data=mysqli_query($con, $datasepatu);
$S=array();
$i=0;
$Stotal=0;

//harga dan berat merupakan cost
while($dataa=mysqli_fetch_array($data)){
	$hitungS=pow($dataa['harga_sepatu'],-$W1)*pow($dataa['bobot_type'],$W2)*pow($dataa['bobot_material'],$W3)
	*pow($dataa['jenis_weight'],-$W4)*pow($dataa['bobot_position'],$W5);
	$S[$i]=array($hitungS,$dataa['id_sepatu'], $dataa['merk_sepatu'],$dataa['tipe_sepatu']);
	$i++;
	$Stotal=$Stotal+$hitungS;
	echo "<script> console.log('S$i',$hitungS);</script>";

	}
	echo "<script> console.log('S total: ',$Stotal);</script>";

//Perhitungan Vektor V

$V=array();

for($dataa=mysqli_fetch_array($data),$i=0;$i<count($S);$i++){
	
	$V[$i]= array($S[$i][0]/$Stotal,$S[$i][1]);
	
}

$temp3=array();
for($b=0;$b<count($V)-1;$b++) {
for($a=$b+1;$a<count($V);$a++) {
		if($V[$b][0]<$V[$a][0]){
			$temp3=$V[$b];
			$V[$b]=$V[$a];
			$V[$a]=$temp3;
			}	
		}
	}
include "hasil.php";

?>