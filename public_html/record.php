<?php
$server="localhost";
$username="prashant";
$pass="prashant1234567890@!#$";
$database="exminerdetails";
$conn = mysqli_connect($server,$username,$pass,$database);
if(!$conn){
	die("server connection field".mysqli_connect_error());
}
$select = "SELECT * FROM `examinertable` ";
$query = mysqli_query($conn,$select);
$num = mysqli_num_rows($query);
echo $num;
?>