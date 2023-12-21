<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="_nav.css">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title>signup</title>
	<style>h1{color:#434b53;}body{background-color: #c1c6ca;}.successful{width:100%;height: 20px;background-color:rgb( 180, 255, 160 );position: absolute;top:33px;font-size: 11px;padding: 5px;left:0px;}.error{width:100%;height: 20px;background-color:rgb( 254, 84, 76 );position: absolute;top:33px;font-size: 11px;padding: 5px;left:0px;}label{font-weight: bolder;}</style>
</head>
<body>
	<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$server = "localhost";
		$user = "prashant";
		$dbpassword="prashant1234567890@!#$";
		$database = "re_user";
		$conn = mysqli_connect($server,$user,$dbpassword,$database);
		if(!$conn){
			die("error".mysqli_connect_error());
		}
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		// if(isset($username=$_POST['username']) || isset($password=$_POST['password'])|| isset($cpassword=$_POST['cpassword'])){
		// 	echo "ok";
		// }
		$showmessage=false;
		$err=false;
		//$exits = false;
		$existsql="SELECT * FROM accounttable WHERE username='$username'";
		$result = mysqli_query($conn,$existsql);
		$numExistRows=mysqli_num_rows($result);
		if($numExistRows>0){
			//$exits=true;
			echo "<div class='error'><b> account not created Username Already Exists</b></div>";
		}else{
			$exits=false;
		if($password == $cpassword){
			$sql = "INSERT INTO accounttable (`username`, `password`,`cpassword`,`date`) VALUES ('$username','$password','$cpassword',current_timestamp())";
			$result = mysqli_query($conn,$sql);
		
		if($result){
			$showmessage=true;
			echo "<div class='successful'><b>successfully account created...</b></div>";
		}
		}else{
			//$err = true;
			echo "<div class='error'><b> account not created</b></div>";
		}
	}
	}
	?>
	<?php require '_nav.php'?>
	<h1>Signup to our <?php include 'softwarename.php';?></h1>
	<div class='form'>
		<form action="signpup.php" method="POST">
			<div class="username">
				<label>Username</label><br>
				<input type="text" name="username"placeholder="Enter username"><br><br>
			</div>
			<div class="Password">
				<label>Password</label><br>
				<input type="Password" name="password"placeholder="Enter password"><br><br>
			</div>
			<div class="confirm Password">
				<label>Confirm Password</label><br>
				<input type="Password" name="cpassword"placeholder="Enter Confirm password"><br>
			</div>
			<p>Make save to type the same password</p>
			<button type="submit" class='signup'>Signup</button>
		</form>
	</div>
</body>
</html>