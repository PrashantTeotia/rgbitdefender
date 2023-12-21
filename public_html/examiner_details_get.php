<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>GET DATA</title>
	<style type="text/css">
		body{background:rgb(213, 207, 207);}
		#table{width: 800px;margin-left: 12%;margin-top:3%;border-collapse: collapse;font-family:sans-serif ;background: rgb(  204, 204, 204 );color: rgb( 82, 82, 82 );border-radius: 6px;box-shadow:0px 0px 70px 1px rgb( 109, 109, 109);}
		#table tr th{border-bottom: 2px solid rgb( 204, 204, 204 );padding: 10px;font-size: 11px;word-wrap: normal;}
		#table tr td{font-size: 11px;padding: 10px;background: rgb(  238, 238, 238 );/*			border-bottom: 1px solid rgb(118,118,118);*/}
		h1{color:rgb( 155, 156, 154 );font-family: sans-serif;text-align: center;}
		button{background: rgb(255, 11, 11);color: rgb(12,16,1);border:0px solid red;padding: 8px;border-radius:35px; }
		#deletedata{position: absolute;top:29px;left:907px;color:whitesmoke;font-family: sans-serif;font-weight: bolder;border-radius: 10px;border: 1px solid aliceblue;padding: 10px;box-shadow: inset 0px 0px 10px 1px rgb(172,172,172);}
	</style>
</head>
	<body>
		<h1 style="position: absolute;top:5px;left:5px;font-size: 14px;font-family:sans-serif;"><?php include 'softwarename.php';?></h1>
		<h1>Details</h1>
		<form action="examiner_details_get.php" method="POST">
			<div id="deletedata">
				<label for="enterid">Enter id no.</label>
				<input type="number" name="enterid" id="enterid" />
				<button type="submit" id="del">Delete</button>
			</div>
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$identer = $_POST['enterid'];
		$conn1 = mysqli_connect("localhost","prashant","prashant1234567890@!#$","exminerdetails") or die("connect error !!!");
		$delque = "DELETE FROM examinertable WHERE id='$identer'";
		$queryresult = mysqli_query($conn1,$delque);
		if($queryresult){
			echo "<h1 style='position:absolute;top:10px;left:20px;font-family:sans-serif;color:#64ac64;'>Permanent Delete data&nbsp;&nbsp;&nbsp;&nbsp;".$identer."</h1>";
		}else{
			echo "not found";
		}
	} 
	?>
		<table id="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Examiner name</th>
					<th>Case Folder</th>
					<th>F.I.R</th>
					<th>Destination</th>
					<th>Date Time</th>
					<th>File Name</th>
					<th>File Path</th>
					<th>File Type</th>
					<th>File Tmp Name</th>
					<th>File Size</th>
				</tr>
			</thead>
			<tbody>
				<?php

 				$conn = mysqli_connect("localhost","prashant","prashant1234567890@!#$","exminerdetails") or die("connect error !!!");
 				
				 $que = "SELECT * FROM examinertable";
				 //$que = "INSERT INTO `act` ( `uname`, `password`) VALUES ( '$username', '$pass')";
				 $result = mysqli_query($conn,$que);

				if(!$result){
					die("invalid query:".$connection->error);
				}

				while($row=mysqli_fetch_assoc($result)){
					echo "<tr>
					<td>".$row['id']."</td>
					<td>".$row['examiner']."</td>
					<td>".$row['casefolder']."</td>
					<td>".$row['fir']."</td>
					<td>".$row['destination']."</td>
					<td>".$row['date']."</td>
					<td>".$row['filname']."</td>
					<td>".$row['filefullpath']."</td>
					<td>".$row['filetype']."</td>
					<td>".$row['filetempname']."</td>
					<td>".$row['filesize']."</td>
					</tr>";
				}
				mysqli_close($conn);
				?>
			</tbody>
		</table>
	</body>
</html>

