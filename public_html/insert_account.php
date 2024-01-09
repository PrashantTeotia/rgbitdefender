<?php
$conn2 = mysqli_connect("localhost","prashant","prashant1234567890@!#$","account") or die("connection error !!!");
$que2 = "SELECT * FROM act";
$result2 = mysqli_query($conn2,$que2) or die("query error");
$row=mysqli_fetch_assoc($result2);
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