<?php
// $username = $_POST['username'];
// $pass = $_POST['passd'];
// if(isset($pass) && isset($username)){
// 	echo "ok";
// }
// echo $pass;
// echo $username;
//  $conn = mysqli_connect("localhost","prashant","prashant1234567890@!#$","account") or die("connect error !!!");
//  if(!$conn){
// 	die("sorry we failed to Connection:".mysqli_connect_error());
//  }else{
//  	echo "Connection was successful<br>";
//  }
//  $que = "INSERT INTO `act` ( `uname`, `password`) VALUES ( '$username', '$pass')";
//  $result = mysqli_query($conn,$que);

//  if($result){
//  	echo " The record has been inserted successfully <br>";
//  }else{
//  	echo "The record was not inserted successfully because of this error --->".mysqli_error($conn);
//  }

// mysqli_close($conn);
$conn2 = mysqli_connect("localhost","prashant","prashant1234567890@!#$","account") or die("connection error !!!");
$que2 = "SELECT * FROM act";
$result2 = mysqli_query($conn2,$que2) or die("query error");
// echo $result2[num_rows];
$row=mysqli_fetch_assoc($result2);
//print_r($row['uname']);
$condition = true;
while($condition){
	if($row['uname'] == $row['uname']){
		echo $row['uname'];
		$condition = false;
	}else{
		echo "no";
	}
}
?>