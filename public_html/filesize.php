<?php
//include 'connectdatabase.php';
$server="localhost";
$username="prashant";
$pass="prashant1234567890@!#$";
$database="exminerdetails";
$conn = mysqli_connect($server,$username,$pass,$database);
if(!$conn){
	die("server connection field".mysqli_connect_error());
}
$select = "select *from examinertable ORDER BY id DESC LIMIT 1"; 
$query = mysqli_query($conn,$select);
$row =  mysqli_fetch_assoc($query);
if($row == null){
	echo "0";
}else{
	echo $row['filesize'];
}
// $num = mysqli_num_rows($query);
// //echo $num;
// while($row=mysqli_fetch_assoc($query)){
// 	if($row['filesize']>=0 && $row['filesize']<=480000){
// 		echo "ok";
// 		echo "<br>";
// 	}else{
// 		echo $row['filesize'];
// 	}
// }
?>