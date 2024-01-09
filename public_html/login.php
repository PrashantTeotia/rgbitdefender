<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="_nav.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="signup.css"> -->
	<title>signup</title>
	<style>h1{color:#434b53;}
	body{background-image:url('software-images/pexels-lukas-590016.jpg');background-size:100% 190%; background-repeat: no-repeat;}
	.successful{width:100%;height: 20px;background-color:rgb( 180, 255, 160 );position: absolute;top:33px;font-size: 11px;padding: 5px;left:0px;}.error{width:100%;height: 20px;background-color:rgb( 254, 84, 76 );position: absolute;top:33px;font-size: 11px;padding: 5px;left:0px;}label{font-weight: bolder;}
	button{background-color: rgb(27, 89, 204);}
#main{background: rgb( 225, 223, 223 );width: 102%;height: 40px;margin-top:-10px;margin-left:-10px;box-shadow:0px 0px 10px rgb(159, 159, 159); }
span{display: inline-block; padding:15px 10px 5px 10px;font-size:13px;font-family: arial;color: rgb(  151, 150, 150  );font-weight:bolder; }
span:hover{color:rgb( 55, 54, 54 );cursor:default;}
.software-name{color: rgb( 55, 54, 54);font-weight: bolder;font-family: sans-serif;letter-spacing: 1px;}



.form{margin:0px 10% 10% 27%;}
h1{text-align: center;font-family: sans-serif;}
input[type]{width:72%;height: 25px;background: white;border: 1px solid rgb( 177, 177, 177 );border-radius:4px; }
input:focus{outline:2px solid rgb(0, 87, 249  );}
label{text-align: left;font-size:12px;font-family:arial; color:rgb(113, 113, 114);letter-spacing: 1px;}
p{font-size: 11px;font-family: sans-serif;color:rgb(113, 113, 114);}
button{background: rgb(0, 87, 249 );padding: 1.10% 34% 1.10% 34%;border:0px;border-radius: 3px;color: rgb( 237, 243, 255);font-weight: bolder;}
button:active{box-shadow: 0px 0px 4px 1px rgb( 0, 76, 219 );}
</style>
</head>
<body>
	<?php
	$login=false;
	$err=false;
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
		$exits = false;
		$sql = "select * from accounttable where username='$username' AND password='$password'";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		if($num == 1){
			$login =true;
			echo "ok";
			session_start();
			$_SESSION['loggedin']=true;
			$_SESSION['username']=$username;
			header("location:welcome.php");
			echo "ok";
		}else{
			$err=false;
			$showERROR ="<div class='error'><strong>invalid credentials</strong></div>";
			echo $showERROR;
		}
	}
	?>
	<?php require '_nav.php'?>
	<h1>Login to our <?php include 'softwarename.php';?></h1>
	<div class='form'>
		<form action="login.php" method="POST">
			<div class="username">
				<label>Username</label><br>
				<input type="text" name="username"placeholder="Username"><br><br>
			</div>
			<div class="Password">
				<label>Password</label><br>
				<input type="Password" name="password"placeholder="password"><br><br>
			</div>
			<button type="submit" class='signup'>Login</button>
		</form>
	</div>
	
</body>
</html>