<?php
include 'connect2database.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$data = $_POST['idnum'];
	$sqldelete = "DELETE FROM `config01` WHERE id = '$data'";
	$re = mysqli_query($conn,$sqldelete);
	if($re){
		echo "<h1 style='position:absolute;top:10px;color:white;font-family:arial;'>delete data</h1>";
	}else{
		echo "<h1 style='position:absolute;top:10px;color:white;font-family:arial;'>not deleted</h1>";
	}
}	


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>configuration data delete</title>
	<style type="text/css">
		:root{
			--main-padding:10px;
		}
		
		body{user-select: none;}
		#details{font-family: arial;font-size: 21px;font-weight: bolder;color:whitesmoke;position: absolute;top:23%;left:9%;}
		h1{text-decoration: none;font-size: 29px; margin-left: 0px;}
		.sof{text-decoration: none;margin-left: 14%;}
		form{margin-top:9%;margin-left:50%; }
		body{
			background: rgb(18, 18, 19);
		}
		label{color: rgb( 138, 138, 138 );font-family: arial;font-size: 13px;}
		input{outline: none;width: 230px;height:20px ;border:1px solid rgb(140, 141, 139);border-radius: 2px;}
		input:focus{background: rgb( 183, 185, 182 ,0.9);border:1px solid rgb( 201, 202, 200 );border-radius:5px ;}
		button{padding:6px 20px 6px 20px;}
		.filepath{padding:var(--main-padding);}
		.Software{padding: var(--main-padding);}
		.deletefolder{padding: var(--main-padding);}
		.mkdir{padding: var(--main-padding);}
		.software-name-color{padding: var(--main-padding);}
		#data-id{padding: var(--main-padding);}
	</style>
</head>
<body>
	<form action="deleteconfiguration.php" method="POST">
		<div id="data-id">
			<label for='idata' class="idata">Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="number" name="idata" id="idata" ><br>
		</div>
		<!-- <div class="filepath">
			<label for="" class="l1">File upload path&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="fileuploadpath" disabled><br>
		</div>
		<div class="Software">
			<label for="" class="l2">Software change name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="softwarechangename" disabled><br>
		</div>
		<div class="deletefolder">
			<label for="" class="l3">Delete Folder in server&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="deletefolderinserver" disabled><br>
		</div>
		<div class="mkdir">
			<label for="" class="l4">Make Folder in  server&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="makefolderinserver"disabled><br>
		</div>
		<div class="software-name-color">
			<label for="" class="l5">software color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="softwarecolor" disabled><br>
		</div>
		<div class="software-name-color">
			<label for="" class="l6">software background color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="softwarebackgroundcolor" disabled><br>
		</div>-->
		<div class="save">
			<button type="submit">Delete</button>
		</div>
	</form>
	<div id="details">
		<h1 class='sof'><?php include 'softwarename.php';?></h1>
		<h1>CONFIGURATION FILE DATA DELETE</h1>
	</div>
</body>
</html>