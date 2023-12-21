<?php
include 'connectdatabase.php';
$select = "SELECT * FROM `config`";
$query = mysqli_query($conn,$select);
$num = mysqli_num_rows($query);
if($num>0){
	if($num==1){
		$a = 1;
		echo $a;
	}else if($num == 2){
		$b = 2;
		echo $b;
	}else if($num == 3){
		$c = 3;
		echo $c;
	}else if($num == 4){
		$d = 4;
		echo $d;
	}else if($num == 5){
		$e = 5;
		echo $e;
	}else if($num == 6){
		$f = 6;
		echo $f;
	}else if($num == 7){
		$g = 7;
		echo $g;
	}else if($num == 8){
		$h = 8;
		echo $h;
	}else if($num == 9){
		$i = 9;
		echo $i;
	}else if($num == 10){
		$j = 10;
		echo $j;
	}else{
		echo "Dangerous";
	}
}else{
	$cc = 0;
	echo $cc;
}
?>