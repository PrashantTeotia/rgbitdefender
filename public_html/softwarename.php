<?php
include 'connect2database.php';
$select = "SELECT * FROM `config01`";
$query = mysqli_query($conn,$select);
$num = mysqli_num_rows($query);

if($num==1){
	$row=mysqli_fetch_assoc($query); 
	echo $row['softwarename'];
}else{
	echo "rGBitdefender";
}
?>