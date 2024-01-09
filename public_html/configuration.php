<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location:login.php");
	exit();
}
?>
<?php
 include 'connect2database.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
	//$fileuploadpath = $_POST['fileuploadpath'];
	$softwarenamechaange = $_POST['softwarechangename'];
	//$deletefolderinserver = $_POST['deletefolderinserver'];
	//$makefolderinserver = $_POST['makefolderinserver'];
	$softwarecolor = $_POST['softwarecolor'];
	$softwarebackgroundcolor = $_POST['softwarebackgroundcolor'];
	$sql = "INSERT INTO `config01`(`softwarename`, `softwarecolor`, `softwarebgcolor`) VALUES ('$softwarenamechaange','$softwarecolor','$softwarebackgroundcolor')";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "<h1 style='color:green;font-family:arial;'>insert data...</h1>";
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>configuration</title>
	<style type="text/css">
		body{
			/* user-select:none; */
			background-image:url('software-images/sigmund-AIIC6wCqkQc-unsplash.jpg');
			background-repeat: no-repeat;
			background-size:100% 150%;
		}
		:root{
			--main-padding:10px;
		}
		#details{font-family: arial;font-size: 21px;font-weight: bolder;color:#611882;position: absolute;top:23%;left:9%;}
		h1{text-decoration: none;}
		#sof{text-decoration: none;margin-left: 19%;}
		form{margin-top:9%;margin-left:50%;background-color:rgba(12,12,12,0.3); padding:20px;border-radius:4px;}
		
		label{color: rgb(255, 255, 255);font-family: arial;font-size: 13px;font-weight:bolder;}
		input{outline: none;width: 230px;height:20px ;border:1px solid rgb(140, 141, 139);border-radius: 2px;}
		input:focus{background: rgb( 183, 185, 182 ,0.9);border:1px solid rgb( 201, 202, 200 );border-radius:5px ;}
		button{padding:6px 20px 6px 20px;}
		.filepath{padding:var(--main-padding);}
		.Software{padding: var(--main-padding);}
		.deletefolder{padding: var(--main-padding);}
		.mkdir{padding: var(--main-padding);}
		.software-name-color{padding: var(--main-padding);}
		#box-details{position: absolute;top:450px;left:57%;color:red;}
		span{display: inline-block;padding: 10px 48px 10px 48px; background:rgb(191, 193, 192);margin-left:20px;border-radius:4px;color:rgb( 139, 140, 140 );font-weight: lighter;font-family:sans-serif;box-shadow: 2px 2px 6px 1px grey;}
		span:hover{background-color:rgb(191, 193, 192);box-shadow: 1px 1px 6px 1px grey;color:rgb(19, 51, 51);}
		input[type="color"]{
			width:100px;
			height: 50px;
			border:1px solid grey;
		}

	</style>
</head>
<body>
	<form action="configuration.php" method="POST">
		<div class="filepath">
			<label for="" class="l1">File upload path&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="fileuploadpath" disabled><br>
		</div>
		<div class="Software">
			<label for="" class="l2">Software change name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="softwarechangename"><br>
		</div>
		<div class="deletefolder">
			<label for="" class="l3"disabled>Delete Folder in server&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="deletefolderinserver" disabled><br>
		</div>
		<div class="mkdir">
			<label for="" class="l4">Make Folder in  server&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="makefolderinserver" disabled><br>
		</div>
		<div class="software-name-color">
			<label for="" class="l5">software color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="color" name="softwarecolor"><br>
		</div>
		<div class="software-name-color">
			<label for="" class="l6">software background color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="color" name="softwarebackgroundcolor" value="#ffffff" id="color"><br>
		</div>
		<div class="save">
			<button type="submit">save</button>
		</div>
	</form>
	<div id="box-details">
		<!-- <a href="deleteconfiguration.php"><span>Delete </span></a> -->
		<a href="selectconfiguration.php"><span>Details </span></a>
		<a href="updateconfigfile.php"><span>Update</span></a>
		<!-- <a href="#"><span>Add configuration file</span></a> -->
	</div>
	<div id="details">
		<h1 id='sof'><?php include 'softwarename.php';?></h1>
		<h1>CONFIGURATION FILE</h1>
	</div>
	<script type="text/javascript">

		var c = "<?php include 'softwarecolor.php'?>";
		document.getElementById('sof').style.color=c;

		var d = "<?php include 'softwarebgcolor.php'?>";
		document.getElementById('sof').style.backgroundColor=d;
	</script>
</body>
</html>