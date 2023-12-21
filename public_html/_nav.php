<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="_nav.css">
	<title>Nav</title>
</head>
<body>
	<div id="main">
		<span class='software-name' id="sof"><?php include 'softwarename.php';?></span>
		<span class='nav-home'>Home</span>
		<a href='login.php'><span class='nav-login'>Login</span></a>
		<a href='signpup.php'><span class='nav-signup'>Signup</span></a>
		<a href='logout.php'><span class='nav-logout'>Logout</span></a>
	</div>
	<script type="text/javascript">

		var c = "<?php include 'softwarecolor.php'?>";
		document.getElementById('sof').style.color=c;

		var d = "<?php include 'softwarebgcolor.php'?>";
		document.getElementById('sof').style.backgroundColor=d;
	</script>
</body>
</html>