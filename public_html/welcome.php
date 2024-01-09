<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location:login.php");
	exit();
}
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report Generate</title>
</head>
<style>
	:root{--main-background:rgb(rgb(236, 236, 236));}
	body{backround-color:white;user-select: none;}
	#logo-image{position:absolute;top:7px;left:-200px;border-radius:100%;width:100px;height: 100px;background-color:rgb(210, 210, 210);box-shadow:3px 3px 2px  1px rgb(145, 145, 145); z-index: 1;}
	#logo-image1{position:absolute;top:17px;left:-189px;border-radius:100%;width:80px;height: 80px;background-color:rgb(210, 210, 210);box-shadow:inset -1px -1px 1px 0px rgb(255, 255, 255),inset 1px 1px 1px 0px rgb(149, 144, 144); z-index: 2;}
	#logo-name{margin-top: 0px;user-select: none;position: absolute;top:-10px;left: 16px;margin-bottom: 100px;font-size: 12px;font-family: cursive;}
	.ln{color:rgb( 198, 24, 7 , 1.0);font-weight: bolder;}
	#side{width:250px;height: 500px;margin-left: -10px;margin-top: -10px;border:1px solid #a4a4a4;z-index: 1;background: rgb(240, 240, 240);padding-top: 170px;box-shadow: 0px 8px 30px 0.1px rgb(255, 255, 255);}
	#top{width: 1020px;margin-top: 4px;margin-left: 0px;height: 0px;position: absolute;left:252px;background: rgb(246,245,245);box-shadow: 0px 1px 2px 0.1px rgb( 46, 41, 41 );}
	span{width: 196px;text-align: center;background: rgb(230, 230, 230);color: rgb( 113,105 ,105);font-weight: bolder;border:1px solid #b0b0b0;margin-left:16px;font-family: sans-serif;padding: 10px 10px 10px 10px;border-top-right-radius: 5px;font-size: 11px;box-shadow:  0px 0px 0px 0px rgb( 48, 43, 42 );user-select: none;display: block;margin-top:10px;}
	span:hover{box-shadow: inset 1px 1px 2px 0.1px #0fff1e; background:#97f49d;}
	.firstbox{width:363px;border:1px solid gray;height: 40px;background: var(--main-background);position: absolute;top:400px;left:300px ;text-align: center;border-radius: 4px;}
	.firstbox h6{color:#575353;text-align: center;position: absolute;left: 75px;z-index: 10;font-family: sans-serif;font-weight: bolder;font-size: 12px;}
	.firstbox img{color:#fff;position: absolute;left: 14px;z-index: 10;}
	.firstbox5{width:363px;height: 40px;background: var(--main-background);position: absolute;top:510px;border:1px solid gray;left:300px;text-align:center;border-radius: 4px;}
	.firstbox h6{color:#575353;text-align: center;position: absolute;top:-8px;left: 170px;z-index: 10;font-family: sans-serif;font-weight: bolder;font-size: 10px;}
	.firstbox5 h6{color:#575353;text-align: center;position: absolute;top:-8px;left: 170px;z-index: 10;font-family: sans-serif;font-weight: bolder;font-size: 10px;}
	#na ul{position: absolute;z-index: 2;top:380px;left: 300px;font-size: 12px;color: whitesmoke;}
	#na1 ul{position: absolute;z-index: 2;top:380px;left: 510px;font-size: 12px;color: whitesmoke;}
	#singlefile{background: rgb(249, 249, 249);border-radius: 3px;box-shadow: 0px 0px 0px 1px rgb(227, 227, 227);position: absolute;top:360px;left: 280px;width: 400px;height: 100px;}
	#twofile{background: rgb(249, 249, 249);border-radius: 3px;box-shadow: 0px 0px 0px 1px rgb(227, 227, 227);position: absolute;top:470px;left: 280px;width: 400px;height: 100px;}
	h5{font-size: 12px;}
	a{text-decoration: none;}
	.demo-pdf{position: absolute;top:310px;left:300px;color:#df3737;font-family: sans-serif;font-size: 9px;text-shadow: 2px 2px 4px grey;}
	#dashboard{width:1030px;background:rgba(238, 233, 233);height: 260px;position: absolute;top:50px;left:270px;box-shadow: 0px 0px 0px 1px #dbdbdb;border-radius: 5px;}
	.box1{margin:10px; text-align: center;width:200px;font-family: sans-serif;font-size: 11px;font-weight: bolder;}
	.accountinformation{width:200px;height: 10px;border-radius: 4px;background-color: rgba(238, 233, 233);margin:10px;}
	.accountinformation1{width:120px;height: 8px;border-radius: 4px;background-color: rgb(  248, 55, 28  );margin-top: 1px;box-shadow: 0px 0px 6px 0.1px rgb( 255, 31, 0 )}
	.percentage{line-height: 21px;}
	#info{width: 600px;height: 270px;background:rgb(242,242,242);border-radius:6px;position: absolute;top:300px;left:443px;box-shadow: 0px 0px 0px 1px #f4f4f4;border:1px solid grey;}
	#graphy{width:2px;height: 200px;background-color: rgb(115, 115, 115);position:absolute;left:60px;top:20px;}
	#graphx{width:300px;height: 2px;background-color: rgb(115, 115, 115);position:absolute;left:60px;top:218px;}
	#defx{color: rgb(123, 121, 121) ;font-family: sans-serif;position: absolute;top:236px;left: 111px;font-weight: bolder;font-size: 14px;}
	.eg{margin:35px 0px 0px 40px;font-family: sans-serif;font-size: 15px;font-weight: bolder;color:rgb( 123, 121, 121 );}
	#ma{position: absolute;top:11px;left: 396px;font-family: sans-serif;font-size: 8px;font-weight: bolder;}
	.ma{margin-top: 10px;color:rgb( 123, 121, 121 );}
	#mai{position: absolute;top:95px;left: 498px;font-family: sans-serif;font-size: 13px;font-weight: bolder;color: rgb(123,121,121);}
	.gree{width:70px;height: 18px;background-color:green;text-align: center;color:lightblue;}
	.liggree{width:70px;height: 18px;background-color:lightgreen;margin-top: 10px;text-align: center;}
	.gre{width:70px;height: 18px;background-color:grey;color:black;margin-top: 10px;text-align: center;}
	.re{width:80px;height: 18px;background-color:red;color:white;margin-top: 10px;text-align: center;}
	#l{position: absolute;top:17px;left: 228px;background-color: lightgray;width:2px;height: 200px;}
	.l{width:50px;height: 5px;background-color: lightgray;margin-top: 20px;margin-left:-60px;}
	#AL{font-size:14px;position: absolute;top:209px;left: 501px;font-family: sans-serif;font-weight: bolder;color: rgb(123,121,121);}
	#reportrecorde{position:absolute;top:10px;left:250px;}
	i{color:green;}
	#safe{position: absolute;top:70px;left: 770px;}
	.safe{width: 40px;height: 10px;background-color:rgb(26, 226, 187);margin-top:25px;}
	#safem{position: absolute;top:68px;left: 815px;}
	.safem{width: 40px;height: 10px;margin-top:25px;}
	#alert{position: absolute;top:70px;left: 870px;}
	.alert{width: 40px;height: 10px;background-color: red;margin:25px;}
	#alertm{position: absolute;top:68px;left: 915px;}
	.alertm{width: 40px;height: 10px;margin:25px;}
	#sof{padding:2px 5px 2px 5px;}
</style>
<body>
	<?php include '_navlogout.php';?>
	<div id="logo-name"><h1 class="ln" id="sof"><?php include 'softwarename.php';?></h1></div>
	<div id="top"></div>
	<div id="side">
		<a href="configuration.php"><span>configuration</span></a>
		<a href="upload-file.php"><span>Upload file</span></a>
		<a href="examiner_details_get.php"><span>Details</span></a>
		<a href="filldetails.php"><span>Advance report</span></a>
	</div>
	<div class="demo-pdf"><h1>Demo PDF</h1></div>
	<div id="singlefile"><h5 style="position: absolute;top:-10px;left: 10px;font-family: sans-serif;color: rgb( 38, 36, 36);">Single File Report Generate<h5></div>
	<!-- <div id="twofile"><h5 style="position: absolute;top:-10px;left: 10px;font-family: sans-serif;color: rgb( 38, 36, 36);">2-File Merge Report Generate<h5></div> -->
	<a href="test.html"><div class="firstbox">
		<h6>Click</h6>
	</div></a>
	<!-- <a href="testmergefile2.php"><div class="firstbox5">
		<h6>Click</h6>
	</div></a> -->
	<div id="dashboard">
		<div class="box1">
			<div class="accountinformation">
			<div id="reportrecorde">
				<h1 style="color: rgb(12,12,34);font-family: sans-serif;">Record<h1>
					<div id="a">
						<label style="font-family: sans-serif;font-size: 11px;">RECORD FILES <i><?php include 'record.php'?>/1000</i></label>
						<div id="aa">
							<div id="aaa"></div>
						</div>
					</div>
					<div id="b">
						<label style="font-family: sans-serif;font-size: 11px;">LATEST FILES RECORD SIZE&nbsp;&nbsp;<i><?php include 'filesize.php'?>&nbsp;&nbsp;Bytes</i></label>
						<div id="bb">
							<div id="bbb"></div>
						</div>
					</div>

					<div id="c">
						<label style="font-family: sans-serif;font-size: 11px;">LATEST FILES RECORD FILENAME OR DATE-TIME&nbsp;&nbsp;<i><?php include 'latestfilework.php'?></i></label>
						<div id="cc">
							<div id="ccc"></div>
						</div>
					</div>
			</div>
				<div id="safe">
					<div class="safe"></div>
					<div class="safe"></div>
					<div class="safe"></div>
				</div>
				<div id="safem">
					<div class="safem">safe</div>
					<div class="safem">safe</div>
					<div class="safem">safe</div>
				</div>
				<div id="alert">
					<div class="alert"></div>
					<div class="alert"></div>
					<div class="alert"></div>
				</div>
				<div id="alertm">
					<div class="alertm">alert</div>
					<div class="alertm">alert</div>
					<div class="alertm">alert</div>
				</div>
		</div>
	</div>
	<div id="info">
		<div id="graphx"></div>
		<div id="graphy"></div>	
		<div id="sofchan"></div>
		<div id="softupd"></div>
		<div id="sofdel"></div>
		<div id="defx">Software details U/D/A</div>

		<div>
			<div class="eg">A</div>
			<div class="eg">U</div>
			<div class="eg">D</div>
		</div>
		<div id="ma">
			<div class="ma">A - ADD SOFTWARE CONFIG </div>
			<div class="ma">U - UPDATE SOFTWARE CONFIG</div>
			<div class="ma">D - DELETE SOFTWARE CONFIG </div>
		</div>
		<div id="mai">
			<div class="gree">OK</div>
			<div class="liggree">OK</div>
			<div class="gre">OK</div>
			<div class="re">Dangerous</div>
			<div class="l"></div>
		</div>
		<div id="l"></div>
		<div id="AL">Alert Line</div>
	</div>
	<div id="logo-image"></div>
	<div id="logo-image1"></div>
	<script type="text/javascript">
		var c = "<?php include 'softwarecolor.php'?>";
		document.getElementById('sof').style.color=c;
		var d = "<?php include 'softwarebgcolor.php'?>";
		document.getElementById('sof').style.backgroundColor=d;
	</script>
	<script>
		aa.style.backgroundColor="rgb( 188, 188, 188 )";
		aa.style.width="200px";
		aa.style.height="10px";
		bb.style.backgroundColor="rgb( 188, 188, 188 )";
		bb.style.width="200px";
		bb.style.height="10px";
		cc.style.backgroundColor="rgb( 188, 188, 188 )";
		cc.style.width="200px";
		cc.style.height="10px";

		ccc.style.backgroundColor="red";
		ccc.style.width="200px";
		ccc.style.height="10px";
		var rb= "<?php include 'filesize.php'?>";
		if(rb>=1000 && rb<=100000000){
			bbb.style.width="100px";
			bbb.style.height="10px";
			bbb.style.backgroundColor="rgb( 26, 226, 187 )";
			bbb.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else{
			bbb.style.width="100px";
			bbb.style.height="10px";
			bbb.style.backgroundColor="lightgreen";
		}
		var ra =  "<?php include 'record.php'?>" ;
		if(ra=0){
			aaa.style.width="1px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=0 && ra<=100){
			aaa.style.width="20px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=101 && ra<=200){
			aaa.style.width="40px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=201 && ra<=300){
			aaa.style.width="60px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=301 && ra<=400){
			aaa.style.width="80px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=401 && ra<=500){
			aaa.style.width="100px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=501 && ra<=600){
			aaa.style.width="120px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=601 && ra<=700){
			aaa.style.width="140px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=701 && ra<=800){
			aaa.style.width="160px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=801 && ra<=900){
			aaa.style.width="180px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else if(ra>=901 && ra<=1000){
			aaa.style.width="200px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}else{
			aaa.style.width="0px";
			aaa.style.height="10px";
			aaa.style.backgroundColor="rgb( 26, 226, 187 )";
			aaa.style.boxShadow="0px 0px 10px 1px rgb( 69, 184, 155 )";
		}
	</script>
	<script type="text/javascript">
		var fcw="<?php include 'latestfilework.php' ?>";
		console.log(fcw);
		if(fcw ==""){
			ccc.style.width="200px";
			ccc.style.height="10px";
			ccc.style.backgroundColor="lightred";
		}else{
			ccc.style.width="200px";
			ccc.style.height="10px";
			ccc.style.backgroundColor="rgb(26, 226, 187)";
		}
	</script>
	<script>
		var softchange = "<?php include 'bar-graph.php'?>";
		 //var softchange = 8;
		console.log(softchange);
		if(softchange == 0){
			sofchan.style.backgroundColor="green";
			sofchan.style.width="10px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 1){
			sofchan.style.backgroundColor="green";
			sofchan.style.width="40px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 2){
			sofchan.style.backgroundColor="green";
			sofchan.style.width="60px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 3){
			sofchan.style.backgroundColor="green";
			sofchan.style.width="80px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 4){
			sofchan.style.backgroundColor="green";
			sofchan.style.width="100px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 5){
			sofchan.style.backgroundColor="green";
			sofchan.style.width="120px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 6){
			sofchan.style.backgroundColor="green";
			sofchan.style.width="140px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 7){
			sofchan.style.backgroundColor="green";
			sofchan.style.width="150px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 8){
			sofchan.style.backgroundColor="red";
			sofchan.style.width="170px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 9){
			sofchan.style.backgroundColor="red";
			sofchan.style.width="180px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else if(softchange == 10){
			sofchan.style.backgroundColor="red";
			sofchan.style.width="200px";
			sofchan.style.height="40px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}else{
			sofchan.style.backgroundColor="green";
			sofchan.style.width="0px";
			sofchan.style.height="0px";
			sofchan.style.position="absolute";
			sofchan.style.top="34px";
			sofchan.style.left="62px";
		}
	</script>
	<script>
		var softupdate = "<?php include 'bar-graphupadte.php'?>";
		console.log(softupdate);
		if(softupdate == 0){
			softupd.style.backgroundColor="lightgreen";
			softupd.style.width="10px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 1){
			softupd.style.backgroundColor="lightgreen";
			softupd.style.width="60px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 2){
			softupd.style.backgroundColor="lightgreen";
			softupd.style.width="80px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 3){
			softupd.style.backgroundColor="lightgreen";
			softupd.style.width="100px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 4){
			softupd.style.backgroundColor="lightgreen";
			softupd.style.width="120px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 5){
			softupd.style.backgroundColor="lightgreen";
			softupd.style.width="140px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 6){
			softupd.style.backgroundColor="lightgreen"
			softupd.style.width="160px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 7){
			softupd.style.backgroundColor="lightgreen";
			softupd.style.width="180px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 8){
			softupd.style.backgroundColor="lightred";
			softupd.style.width="200px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 9){
			softupd.style.backgroundColor="lightred";
			softupd.style.width="250px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else if(softupdate == 10){
			softupd.style.backgroundColor="red";
			softupd.style.width="280px";
			softupd.style.height="40px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}else{
			softupd.style.backgroundColor="lightgreen";
			softupd.style.width="0px";
			softupd.style.height="0px";
			softupd.style.position="absolute";
			softupd.style.top="84px";
			softupd.style.left="62px";
		}
	</script>
	<script>
		var softdelete = "<?php include 'bar-graphdelete.php'?>";
		console.log(softupdate);
		if(softdelete == 0){
			sofdel.style.backgroundColor="gray";
			sofdel.style.width="10px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 1){
			sofdel.style.backgroundColor="gray";
			sofdel.style.width="60px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 2){
			sofdel.style.backgroundColor="gray";
			sofdel.style.width="80px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 3){
			sofdel.style.backgroundColor="gray";
			sofdel.style.width="100px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 4){
			sofdel.style.backgroundColor="gray";
			sofdel.style.width="120px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 5){
			sofdel.style.backgroundColor="gray";
			sofdel.style.width="140px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 6){
			sofdel.style.backgroundColor="gray";
			sofdel.style.width="160px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 7){
			sofdel.style.backgroundColor="gray";
			sofdel.style.width="180px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 8){
			sofdel.style.backgroundColor="lightred";
			sofdel.style.width="200px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 9){
			sofdel.style.backgroundColor="lightred";
			sofdel.style.width="250px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else if(softdelete == 10){
			sofdel.style.backgroundColor="red";
			sofdel.style.width="280px";
			sofdel.style.height="40px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}else{
			sofdel.style.backgroundColor="lightgreen";
			sofdel.style.width="0px";
			sofdel.style.height="0px";
			sofdel.style.position="absolute";
			sofdel.style.top="134px";
			sofdel.style.left="62px";
		}
	</script>
</body>
</html>