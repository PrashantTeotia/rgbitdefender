<?php
if(isset($_FILES['fileupload'])){
	// echo "<pre>";
	// print_r($_FILES);
	// echo "</pre>";

	$file_name = $_FILES['fileupload']['name'];
	$file_size = $_FILES['fileupload']['size'];
	$file_tmp = $_FILES['fileupload']['tmp_name'];
	$file_type = $_FILES['fileupload']['type'];

	if($_FILES['fileupload']['error'] == 0){
		move_uploaded_file($file_tmp, "upload-file/".$file_name);
		echo "<h3 style='position:absolute;top:330px;left:500px;font-family:arial;'>successfully uploaded...<h3>";
	}else{
		echo "<h3 style='position:absolute;top:330px;left:500px;font-family:arial;color:red;'>Alert!!! file select please<h3>";
	}
}
?>
<!doctype html>
<html>
<head>
	<title>upload file</title>
	<style type="text/css">
		#sof{padding:2px 5px 2px 5px;}
		#body{background: rgb(200, 200, 200);}
		.soft{position: absolute;top:10px;left:10px;color: grey;font-family: sans-serif;font-weight: bolder;}
	#upload{border:0px solid black;width: 400px;padding: 5% 5% 5% 5%;margin:10% 30% 10% 30%;background-color: rgb(138, 147, 146);border-radius: 2%;box-shadow:1px 1px 71px 1px #848484;font-family:sans-serif;;font-weight: bolder;}
	#upload:hover{color:#424053;font-family: sans-serif;}
	#progress{width: 100px;height: 100px;background-color: green;}
	input[type="file"]::file-selector-button {
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 10px;
}

	#filesubmit{padding: 10px 20px 10px 20px;}
</style>
</head>
<body id="body">
	<div class="soft"id="sof"><?php include 'softwarename.php';?></div>
	<div id="upload">
	<form action='upload-file.php' enctype="multipart/form-data" method="POST">
		<label for="fileupload"><h2>FILE UPLOAD<h2></label>
		<input type="file" name="fileupload" id="fileupload">
		<input type="submit" value="upload" id="filesubmit">
	</form>	
	<script type="text/javascript">

		var c = "<?php include 'softwarecolor.php'?>";
		document.getElementById('sof').style.color=c;

		var d = "<?php include 'softwarebgcolor.php'?>";
		document.getElementById('sof').style.backgroundColor=d;
	</script>
</div>
</body>
</html>