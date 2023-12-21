<?php
$server="localhost";
$username="prashant";
$pass="prashant1234567890@!#$";
$database="configuration";
$conn = mysqli_connect($server,$username,$pass,$database);
if(!$conn){
	die("server connection field".mysqli_connect_error());
}
?>