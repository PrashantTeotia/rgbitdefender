<?php
include 'connect2database.php';
$select = "SELECT * FROM `config01`";
$query = mysqli_query($conn,$select);
if($query){
	while($row=mysqli_fetch_assoc($query)){
		echo "<h6>Configuration File".$row["id"]."</h6>";
		echo '
		<table style="margin-left:10%;font-size:15px;font-family:arial;border-collapse: collapse;border-radius: 6px;color: rgb( 82, 82, 82 );border-radius:6px;box-shadow:0px 0px 70px 1px rgb( 109, 109, 109);background: rgb(  204, 204, 204 );">
		<tr>
		<th style="border-bottom: 2px solid rgb( 204, 204, 204 );">Id</th>
		<th>Software Name</th>
		<th>Software Color</th>
		<th>Software Background Color</th>
		</tr>
		<tr>
		<td>'.$row["id"].'</td>
		<td>'.$row["softwarename"].'</td>
		<td>'.$row["softwarecolor"].'</td>
		<td>'.$row["softwarebgcolor"].'</td>
		</tr>
		</table>
		';
	}
}else{
	echo "<h1>record not found...</h1>";
}

?>


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
<!Doctype html>
<html>
<head>
	<title>Select</title>
	<style>
		body{background: rgb(213, 207, 207);}
		h6{text-align: center;}
		th{border:0px solid grey;padding:5px 10px 5px 10px;background-color: rgb(155, 152, 152);}
		td{border:0px solid grey;padding:5px 10px 5px 10px;background-color: rb( 238, 238, 238);}
		#configd{border:1px solid aliceblue;box-shadow:  inset 0px 0px 10px 1px rgb(172,172,172);padding:10px;border-radius: 10px;width:300px;position: absolute;top:200px;left: 900px;font-weight: bolder;font-family: sans-serif;}

	</style>
</head>
<body>
	<img src="image/pointer/previews/preview.png"width="200px"height="100px"style="position: absolute;top:20px;left:800px;">
	<div id="configd">
		<form action="selectconfiguration.php" method="POST">
			<label> ID</label>
			<input type="number" placeholder="enter id" name="idnum"/>
			<button type="submit" id="deleteconfig">Delete</button>
		</form>
	</div>
</body>
</html>