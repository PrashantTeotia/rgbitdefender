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
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="print" href="upload_file_print.css" /> 
	<!-- <link rel="stylesheet" type="text/css" href="style_screen.css" /> -->
	<title>uploade</title>
	<style>
		#bio{margin-left: 200px;}
		:root{--main-background:0px 0px 0px 0px rgb( 42, 49, 82 );--main-inset: 2px;--main-color:rgb( 138, 138, 138  );}
		#software-name{width: 10px;height: 10px;margin-top: -10px;color: rgb(199, 15, 15);background: rgb(  25, 23, 23  );font-family: cursive;position: absolute;z-index: 1;}
		#body{background: rgb(45, 45, 45);width: 1500px;overflow: hidden;height:700px;margin-top:-10px ;margin-left: -10px;}
		#box-1{width:200px;height: 200px;background:  rgb( 18, 18, 19 );display: flex;position: relative;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);}
		#box-1::before{width: 100px;height:280px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123 ),rgb(  117, 70, 211  ));}
		#box-1::after{inset: var(--main-inset);content: '';background:rgb(49, 49, 49);border-radius: 5px;position: absolute;}
		#box-2{width:200px;height: 600px;background:  rgb(18, 18, 19);display: flex;position: relative;top:-170px;left: 290px;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);}
		#box-2::before{width: 100px;height:680px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));}
		#box-2::after{inset: var(--main-inset);content: '';background: rgb(49, 49, 49);border-radius: 5px;position: absolute;}
		#box-3{width:200px;height: 300px;background:  rgb( 7, 10, 32 );display: flex;position: absolute;top:-10px;left: 590px;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);}
		#box-3::before{width: 100px;height:380px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));}
		#box-3::after{inset: var(--main-inset);content: '';background: rgb(49, 49, 49);border-radius: 5px;position: absolute;}
		#box-4{width:200px;height: 300px;background:  rgb( 7, 10, 32 );display: flex;position: absolute;top:370px;left: 10px;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);}
		#box-4::before{width: 100px;height:380px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));}
		#box-4::after{inset:4px;content: '';background: rgb(49, 49, 49);border-radius: 5px;position: absolute;}
		#box-5{width:120px;height: 180px;background:  rgb( 7, 10, 32 );display: flex;position: absolute;top:490px;left: 540px;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);}
		#box-5::before{width: 120px;height:180px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));}
		#box-5::after{inset: var(--main-inset);content: '';background: rgb(49, 49, 49);border-radius: 5px;position: absolute;	}
		#box-6{width:400px;height: 200px;background:  rgb( 7, 10, 32 );display: flex;position: absolute;top:70px;left: 870px;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);}
		#box-6::before{width: 100px;height:480px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));	}
		#box-6::after{inset: var(--main-inset);content: '';background:rgb(49, 49, 49);border-radius: 5px;position: absolute;}
		#box-7{width:200px;height: 300px;background:  rgb( 7, 10, 32 );display: flex;position: absolute;top:370px;left: 1000px;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);}
		#box-7::before{width: 100px;height:480px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));}
		#box-7::after{inset: var(--main-inset);content: '';background: rgb(49, 49, 49);border-radius: 5px;position: absolute;}
		#box-8{width:200px;height: 200px;background:  rgb( 7, 10, 32 );display: flex;position: absolute;top:10px;left: 1370px;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);}
		#box-8::before{width: 100px;height:480px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));}
		#box-8::after{inset: var(--main-inset);content: '';background: rgb(49, 49, 49);border-radius: 5px;position: absolute;}
		#box-9{width:200px;height: 300px;background:  rgb( 7, 10, 32 );display: flex;position: absolute;top:350px;left: 670px;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);
		}
		#box-9::before{width: 100px;height:480px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));	}
		#box-9::after{inset: var(--main-inset);content: '';background: rgb(49, 49, 49);border-radius: 5px;position: absolute;}
		#det{width:1000px;height: 400px;position: absolute;background: rgb(57, 57, 57);top:100px;left:120px;box-shadow: 0px 0px 120px 10px rgb(42, 40, 94);border-radius: 10px;}
		#logoupload{width: 300px;height: 300px;background: white;position: absolute;top:130px;left: 150px;border-radius: 4px;}
		#exa{color:rgb( 205, 192, 192 );font-size: 12px;font-weight: bolder;font-family: sans-serif;letter-spacing: 1;position: absolute;top:130px;left:460px;}
		#examiner{background: rgb(  43, 41, 41 );outline: none;color:var(--main-color);position: absolute;width: 200px;height: 25px;top:150px;left: 460px;font-family: sans-serif;font-size: 11px;text-align: center;border:1px solid rgb(225, 225, 225 );border-radius:4px;}
		#case{color:rgb(  205, 192, 192  );font-size: 12px;font-weight: bolder;font-family: sans-serif;letter-spacing: 1;position: absolute;top:130px;left:770px;}
		#casefolder{outline: none;background: rgb(43, 41, 41 );color:var(--main-color);position: absolute;width: 180px;height: 25px;top:150px;left: 770px;font-family: sans-serif;font-size: 11px;text-align: center;border:1px solid rgb( 225, 225, 225);border-radius:4px;}
		#fi{color:rgb( 205, 192, 192 );font-size: 12px;font-weight: bolder;font-family: sans-serif;letter-spacing: 1;position: absolute;top:200px;left:470px;}
		#fir{outline: none;background: rgb(43, 41, 41 );position: absolute;color:var(--main-color);width: 180px;height: 25px;top:220px;left: 460px;font-family: sans-serif;font-size: 11px;text-align: center;border:1px solid rgb( 225, 225, 225 );border-radius:4px;}
		#dest{color:rgb( 205, 192, 192 );font-size: 12px;font-weight: bolder;font-family: sans-serif;letter-spacing: 1;position: absolute;top:200px;left:770px;}
		#destination{outline: none;background: rgb(43, 41, 41 );position: absolute;color:var(--main-color);width: 180px;height: 25px;top:220px;left: 770px;font-family: sans-serif;font-size: 11px;text-align: center;border:1px solid rgb(225, 225, 225  );border-radius:4px;}
		#da{color:rgb( 205, 192, 192 );font-size: 12px;font-weight: bolder;font-family: sans-serif;letter-spacing: 1;position: absolute;top:270px;left:460px;}
		#date{outline: none;background: rgb(43, 41, 41 );position: absolute;color:var(--main-color);width: 180px;height: 25px;top:290px;left: 460px;font-family: sans-serif;font-size: 11px;text-align: center;border:1px solid rgb( 225, 225, 225 );border-radius:4px;}
		#submit{padding:10px 25px 10px 25px;background:rgb(43, 42, 42);position: absolute;border-radius: 5px;border: 0px;color: white;font-size: 11px;font-weight: bolder;top:410px;left: 910px;}
		#submit:hover{box-shadow:0px 0px 2px 1px gray;}
			#submit:active{box-shadow:0px 0px 15px 1px gray;}
		#submit1{position: absolute;top:410px;left: 750px;border-radius: 5px;border: 0px;color: white;font-size: 11px;font-weight: bolder;padding:10px 25px 10px 25px;background:rgb(43, 42, 42);}
		#submit1:hover{box-shadow:0px 0px 2px 1px gray;}
		#submit1:active{box-shadow:0px 0px 15px 1px gray;}
		#submit2{position: absolute;top:410px;left: 550px;border-radius: 5px;border: 0px;color: white;font-size: 11px;font-weight: bolder;padding:10px 25px 10px 25px;background:rgb(43, 42, 42);user-select: none;}
		#submit2:hover{box-shadow:0px 0px 2px 1px gray;}
		#submit2:active{box-shadow:0px 0px 15px 1px gray;}
		input::placeholder{color:rgb( 148, 148, 148 );}
		input[type=datetime-local]::placeholder{color:rgb( 148, 148, 148 );}
		#file2::file-selector-button {border: 2px solid #6c5ce7;padding: 10px 120px 10px 120px;border-radius: 0.2em;background-color: #a29bfe;position: absolute;top:440px;left: 150px;transition: 1s;}
input[type="file"]::file-selector-button:hover {background-color: #81ecec;border: 2px solid #00cec9;}
tr td{padding: 10px 60px 10px 60px;font-family: sans-serif;font-weight: bolder;font-size: 41px;}
#n{color:rgb( 205, 192, 192 );position: absolute;top:270px;left: 770px;font-size: 12px;font-weight: bolder;font-family: sans-serif;}
#number{color:rgb( 205, 192, 192 );position: absolute;top:290px;height: 25px;left: 770px;color:var(--main-color);font-size: 12px;outline: none;background: rgb(43, 41, 41 );font-weight: bolder;border:1px solid rgb( 225, 225, 225 );font-family: sans-serif;}
#f{color: rgb(205, 192, 192);position: absolute;top:370px;left: 500px;}
#progressbox{box-shadow:0px 0px 100px 1px grey;width:400px;height:100px;background:rgb(12,12,12,0.5);position: absolute;top:40%;left:30%;display: none;border-radius:6px;}
#e{width:0px;height: 20px;background: green;display: none;margin: 50px}
#output{width:300px;height:300px;position: absolute;top:129px;left:149px;border:0px solid red;}
#sof{padding: 2px 5px 2px 5px;}
</style>
</head>
<body id="mainbody">
	<div id="returnphp"><i style="position: absolute;top:10px;left:40px;color:green;z-index: 1;"><?php include 'examiner_insert_details.php'?></i></div>
	<div id="box">
	<div id="software-name"><h1 id="sof"><?php include 'softwarename.php'?></h1></div>
	<div id="body">
	<div id="box-1"></div>
	<div id="box-2"></div>
	<div id="box-3"></div>
	<div id="box-4"></div>
	<div id="box-5"></div>
	<div id="box-6"></div>
	<div id="box-7"></div>
	<div id="box-8"></div>
	<div id="box-9"></div>
	<div id="det"></div>
	<div id="logoupload">
		<img id="logoup" width="300px"height="300px" style="background: rgb( 64, 64, 64 );" />
	</div>
</div>
	<form action="examiner_insert_details.php" method="post" enctype="multipart/form-data" >
		<div id="up">
			<input type="file" id="file2" name="image" multiple />
			<div id="output">
				<img id="output1" width="300px" height="300px">
			</div>
		</div>
		<div id="up">
			<label id='f'>file upload
			<input type="file" id="fileget" name="image" multiple /></label>
		</div>
		<div id="first-1">
			<label id="exa">Examiner:</label>
			<input type="text" placeholder="enter examiner" id="examiner" name="examiner" required />
		</div>
		<div id="first-2">
			<label id="case">Case Folder:</label>
			<input type="text" placeholder="enter casefolder" name="casefolder" id="casefolder" required />
		</div>
		<div id="first-3">
			<label id="fi">F.I.R:</label>
			<input type="text" placeholder="enter F.I.R" name="fir" id="fir"required/>
		</div>
		<div id="first-4">
			<label id="dest">Location:</label>
			<input type="text" placeholder="enter location " name="destination" id="destination"required/>
		</div>
		<div id="first-5">
			<label id="da">Date-Time:</label>
			<input type="datetime-local" name="date"  id="date" required />
		</div>
		<div id="first-5">
			<label id="n">SNO.</label>
			<input type="number"  id="number" required />
		</div>
		<div id="sub">
			<button type="submit"  id="submit">Submit</button>
			<span id="submit1"  onclick="progress()">Show PDF</span>
			<!-- <span id="submit2" >JSON to PDF</span> -->
		</div>
	</form>

	<div id="reportdetails"></div>
	<div id="logo">
		<!-- <img id="lo" width="200px" height="200px"> -->
	</div>
</div>
	<div id="progressbox"><b style="font-family: sans-serif;color: whitesmoke;position: absolute;top:10px;left: 10px;">please wait...</b>
		<div id="e"></div>
	</div>
	<script type="text/javascript">

		var c = "<?php include 'softwarecolor.php'?>";
		document.getElementById('sof').style.color=c;

		var d = "<?php include 'softwarebgcolor.php'?>";
		document.getElementById('sof').style.backgroundColor=d;
	</script>
	<script>
		const input = document.querySelector("input");
const output = document.getElementById("output1");
// let imagesArray = []
input.addEventListener("change", () => {
   const file = input.files;
   // console.log(file[0].name);
   output.src="upload-images/"+file[0].name;


   //
   console.log(file);
})
			// var file1= document.getElementById('file2').files[0];

		function progress(){
			box.style.opacity="0";
			 output.style.opacity="0";
			progressbox.style.display="block";
			e.style.display="block";
			var pri = setInterval(anime,10);
			var h =0;
			function anime(){
				if(h == 300){
					clearInterval(pri);
					e.style.display="none";
					progressbox.style.display="none";
					box.style.opacity="0.9";
					function submitdata(){
			var examiner = document.getElementById('examiner').value;
			var casefolder = document.getElementById('casefolder').value;
			var fir = document.getElementById('fir').value;
			var destination = document.getElementById('destination').value;
			var date = document.getElementById('date').value;
			var file = document.getElementById('fileget').files[0];
			var file1= document.getElementById('file2').files[0];
			console.log(file.name);
			//submit1.style.display="none";

			


			if(examiner!=""){
				async function foo(){
					const response = await fetch(`upload-file/${file.name}`);
					let dataget = await response.json();
					console.log(dataget);
					console.log(dataget.report.appProperties);

						var log = document.createElement('img');
						log.id="im";
						log.src=`upload-images/${file1.name}`;
						document.body.appendChild(log);
						im.style.width="500px";
						im.style.height="500px";

						//   logo page

						var log1 = document.createElement('img');
						log1.id="im2";
						log1.src=`upload-images/${file1.name}`;
						document.body.appendChild(log1);
						im2.style.width="400px";
						im2.style.height="400px";

						

						//        additional details

						var g = document.createElement('div');
						g.id="bio";
						g.innerHTML=`<table id="table1">
						<tr><td>Examiner</td>
						<td>${examiner}</td></tr>
						<tr><td>Case Folder</td>
						<td>${casefolder}</td></tr>
						<tr><td>F.I.R</td>
						<td>${fir}</td></tr>
						<tr><td>Destination</td>
						<td>${destination}</td></tr>
						<tr><td>Date Time</td>
						<td>${date}</td></tr></table>`;
						document.body.appendChild(g);

						//   upper line page 3

						var lineup3 = document.createElement('div');
						lineup3.id="lineup3"
						lineup3.style.width="1000px";
						lineup3.style.height="4px";
						lineup3.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(lineup3);

						//  platform image

						var log2 = document.createElement('img');
						log2.id='im3';
						log2.src='upload-file/android.png';
						document.body.appendChild(log2);

						//    appdetails

						var app = document.createElement('div');
						app.id="appProperties";
						app.innerHTML=`<table id="table2">
						<tr><th><i>App Properties</i></th></tr>
						<tr><td class='tx'>App name</td><td class='txi'>${dataget.report.appProperties.name}</td></tr>
						<tr><td class='tx'>App Version</td><td class='txi'>${dataget.report.appProperties.version}</td></tr>
						<tr><td class='tx'>VersionCode</td><td class='txi'>${dataget.report.appProperties.versionCode}</td></tr>
						<tr><td class='tx'>packageName</td><td class='txi'>${dataget.report.appProperties.packageName}</td></tr>
						<tr><td class='tx'>platform</td><td class='txi'>${dataget.report.appProperties.platform}</td></tr>
						<tr><td class='tx'>md5</td><td class='txi'>${dataget.report.appProperties.md5}</td></tr>
						<tr><td class='tx'>sha256</td><td class='txi'>${dataget.report.appProperties.sha256}</td></tr>
						<tr><td class='tx'>packageSize</td><td class='txi'>${dataget.report.appProperties.packageSize}</td></tr>
						<tr><td class='tx'>sdkVersion</td><td class='txi'>${dataget.report.appProperties.sdkVersion}</td></tr>
						</table>`;
						document.body.appendChild(app);
						//console.log(apProperties);

						// lower line page 3

						var linelo3 = document.createElement('div');
						linelo3.id="linelo3";
						linelo3.style.width="1000px";
						linelo3.style.height="2px";
						linelo3.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo3);

						// upper line page 4

						var lineup4 = document.createElement('div');
						lineup4.id="lineup4";
						lineup4.style.width="1000px";
						lineup4.style.height="2px";
						lineup4.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(lineup4);

						// app bio

						var apbio = document.createElement('div');
						apbio.id='appbio';
						apbio.innerHTML=`<h3>App bio</h3><h2>${dataget.report.appProperties.name}</h2><h5>ABOUT APP</h5><p class="biopar">${dataget.report.distribution.marketData[0].description}</p>`;
						document.body.appendChild(apbio);

						// lower line page 4

						// var linelo4 = document.createElement('div');
						// linelo4.id="linelo4";
						// linelo4.style.width="1000px";
						// linelo4.style.height="2px";
						// linelo4.style.backgroundColor="rgb( 122, 120, 120 )";
						// document.body.appendChild(linelo4);

						

						//  App Permissions Summary 

						var lineup6 = document.createElement('div');
						lineup6.id="lineup6";
						lineup6.style.width="1000px";
						lineup6.style.height="2px";
						lineup6.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(lineup6);

						var headi1 = document.createElement('div');
						headi1.className='headi';
						headi1.innerHTML='<h3>App Permissions Summary</h3>';
						document.body.appendChild(headi1);

						for(var i in dataget.report.androidAnalysis.usesPermission){
							if(dataget.report.androidAnalysis.usesPermission[i].description){
								var userper = document.createElement('div');
								userper.className=`userper`;
								userper.innerHTML=`<h3>${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p>`;
								document.body.appendChild(userper);
								if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
									var userper = document.createElement('div');
									userper.className=`userper1`;
									userper.innerHTML=`<h3 style="color:red;">${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p><img src="upload-images/dang.png" width="50px" height="50px"></p>`;
									document.body.appendChild(userper);
								}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
									var userper = document.createElement('div');
									userper.className=`userper`;
									userper.innerHTML=`<h3 style="color:rgb( 42, 255, 4 );">${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p>${dataget.report.androidAnalysis.usesPermission[i].dangerous}</p>`;
									document.body.appendChild(userper);
								}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == ""){
									var userper = document.createElement('div');
									userper.className=`userper`;
									userper.innerHTML=`<h3 style="color:rgb( 42, 255, 4 );">${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p>${dataget.report.androidAnalysis.usesPermission[i].dangerous}</p>`;
									document.body.appendChild(userper);
								}else{
									console.log('no found dangerous');
								}
				}
							}

					// lower line page 16

						var linelo16i = document.createElement('div');
						linelo16i.id="linelo16i";
						linelo16i.style.width="1000px";
						linelo16i.style.height="2px";
						linelo16i.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo16i);

					//                     OWASP Summary

					var ow = document.createElement('div');
					ow.id = "owasp";
					ow.innerHTML = "<h2>OWASP Summary</h2><p>The OWASP summary contains results of the testing that was performed on the application against the OWASP Top 10 MobileCategories.</p>";
					document.body.appendChild(ow);

					var ow1 = document.createElement('div');
					ow1.id = "owasp1";
					ow1.innerHTML = `<span><img src='image/shieldgreen/previews/preview.png' width='50px' height='50px'></span><span>Categories that passed the have a green shield.</span>`;
					document.body.appendChild(ow1);

					var ow2 = document.createElement('div');
					ow2.id = "owasp2";
					ow2.innerHTML = `<span><img src='image/shieldred/previews/preview.png' width='50px' height='50px'></span><span>Categories that failed have a red shield.</span>`;
					document.body.appendChild(ow2);

					var ow3 = document.createElement('div');
		 			ow3.id='owasp3';
		 			ow3.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M1/previews/preview.png'width='40px' height='40px'/></span><span>M1<br>Improper Platform Usage</span></div><div><h6><b class='green'>o</b>&nbsp;&nbsp;No problems found.</h6></div>";
		 			document.body.appendChild(ow3);

		 			var ow4 = document.createElement('div');
		 			ow4.id='owasp4';
		 			ow4.innerHTML="<div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M2/previews/preview.png'width='40px' height='40px'/></span><span>M2<br>Insecure Data Storage</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The app uses the primary external storage.</p><p><b class='red'>o</b>&nbsp;&nbsp;The content provider is not protected by signature permission and exported in the AndroidManifest.xml file. Content providers offer a structured storage mechanism that can be limited to this application or exported to allow access by other applications.</p><p><b class='red'>o</b>&nbsp;&nbsp;The application is using a database that is not encrypted. The lack of encryption could lead to PII or sensitive data leakage if stored in the database.</p></div>";
		 			document.body.appendChild(ow4);

		 			var ow5 = document.createElement('div');
		 			ow5.id='owasp5';
		 			ow5.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M3/previews/preview.png'width='40px' height='40px'/></span><span>M3<br>Insecure Communications</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow5);

		 			var ow6 = document.createElement('div');
		 			ow6.id='owasp6';
		 			ow6.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M4/previews/preview.png'width='40px' height='40px'/></span><span>M4<br>Insecure Authentication</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow6);

		 			var ow7 = document.createElement('div');
		 			ow7.id='owasp7';
		 			ow7.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M5/previews/preview.png'width='40px' height='40px'/></span><span>M5<br>Insufficient Cryptography</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow7);

		 			var ow8 = document.createElement('div');
		 			ow8.id='owasp8';
		 			ow8.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M6/previews/preview.png'width='40px' height='40px'/></span><span>M6<br>Insecure Authorization</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow8);

		 			var ow9 = document.createElement('div');
		 			ow9.id='owasp9';
		 			ow9.innerHTML="<div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M7/previews/preview.png'width='40px' height='40px'/></span><span>M7<br>Insecure Authorization</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The Android certificate failed the JAR signer verification testing.</p></div>";
		 			document.body.appendChild(ow9);

		 			// lower line page 17

						var linelo17i = document.createElement('div');
						linelo17i.id="linelo17i";
						linelo17i.style.width="1000px";
						linelo17i.style.height="2px";
						linelo17i.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo17i);

						var ow10 = document.createElement('div');
		 				ow10.id='owasp10';
		 				ow10.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M8/previews/preview.png'width='40px' height='40px'/></span><span>M8<br>Code Tampering</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 				document.body.appendChild(ow10);

		 				var ow11 = document.createElement('div');
		 					ow11.id='owasp11';
		 					ow11.innerHTML="<div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M9/previews/preview.png'width='40px' height='40px'/></span><span>M9<br>Reverse Engineering</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;This application exposes source level metadata symbols and fails the testing outlined by OWASP Mobile Top 10 covered under category M9: Reverse Engineering</p></div>";
		 				document.body.appendChild(ow11);

		 				var ow12 = document.createElement('div');
		 					ow12.id='owasp12';
		 					ow12.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M10/previews/preview.png'width='40px' height='40px'/></span><span>M10<br>Extraneous Functionality</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 				document.body.appendChild(ow12);

		 				// lower line page 18

						var linelo18i = document.createElement('div');
						linelo18i.id="linelo18i";
						linelo18i.style.width="1000px";
						linelo18i.style.height="2px";
						linelo18i.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo18i);

		 				// Security Risks Summary

		 				var srs = document.createElement('div');
		 				srs.id="srs";
		 				srs.innerHTML=`<h2>Risk Type security/privacy </h2>`;
		 				document.body.appendChild(srs);

		 				var srsp = document.createElement('div');
		 				srsp.id="srsp";
		 				srsp.innerHTML="<p>The security/privacy summary focuses on risks contained in the application. These risks include (but are not limited to): risky functionality and code use, application capabilities, critical vulnerabilities and threats.</p>";
		 				document.body.appendChild(srsp);

		 				for(var g in dataget.report.scanDetails){
		 					if(dataget.report.scanDetails[g].importance == "Low"){
		 						var sca = document.createElement('div');
		 					sca.className="sca";
		 					sca.style.backgroundColor="rgb( 203, 48, 252 )";
		 					sca.innerHTML=`<h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		 					<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		 					<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		 					<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		 					<h4>Importance</h4><p>${dataget.report.scanDetails[g].importance}</p>`;
		 					document.body.appendChild(sca);
		 					}else if(dataget.report.scanDetails[g].importance == "High"){
		 						var sca = document.createElement('div');
		 					sca.className="sca";
		 					sca.style.backgroundColor="orange";
		 					sca.innerHTML=`<h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		 					<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		 					<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		 					<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		 					<h4>Importance</h4><p>${dataget.report.scanDetails[g].importance}</p>`;
		 					document.body.appendChild(sca);
		 					}else if(dataget.report.scanDetails[g].importance == "Medium"){
		 						var sca = document.createElement('div');
		 					sca.className="sca";
		 					sca.style.backgroundColor="yellow";
		 					sca.innerHTML=`<h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		 					<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		 					<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		 					<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		 					<h4>Importance</h4><p>${dataget.report.scanDetails[g].importance}</p>`;
		 					document.body.appendChild(sca);
		 					}
		 					
		 				}
		 				var sha11 = document.createElement('div');
		 				sha11.className="sha11";
		 				 sha11.innerHTML=`<h2>CERTIFICATE</h4> `;
		 				 document.body.appendChild(sha11);

		 				//console.log(dataget.report.certificate['SHA1 fingerprint']);
		 				var sha1 = document.createElement('div');
		 				sha1.className="sha1";
		 				 sha1.innerHTML=`<h4>SHA1 fingerprint</h4><p>${dataget.report.certificate['SHA1 fingerprint']}</p>
		 				 <h4>SHA256 fingerprint</h4><p>${dataget.report.certificate['SHA256 fingerprint']}</p>
		 				 <h4>serial number</h4><p>${dataget.report.certificate['serialNumber']}</p>
		 				 <h4>Valid From</h4><p>${dataget.report.certificate['validFrom']}</p>
		 				 <h4>Valid To</h4><p>${dataget.report.certificate['validTo']}</p> `;
		 				 document.body.appendChild(sha1);
		 					
		 				var cer = document.createElement('div');
		 					cer.className="cer";
		 					cer.innerHTML=`<h2>CERTIFICATE->OWNER</h2>`;
		 					document.body.appendChild(cer);

		 				for(var g1 in dataget.report.certificate.owner){
		 					 console.log(g1);
		 					var cer1 = document.createElement('div');
		 					cer1.className="cer1";
		 					cer1.innerHTML=`<h4>${g1}</h4><p>${dataget.report.certificate.owner[g1]}</p>`;
		 					document.body.appendChild(cer1);
		 				}

								// local frameworks used
								var localfr=document.createElement('div');
								localfr.className='localfr';
								localfr.innerHTML="<h2>LOCAL FRAMEWORKS USED</h2>";
								document.body.appendChild(localfr);

								for(var i in dataget.report.androidAnalysis.thirdParty){
									//console.log(i,dataget.report.androidAnalysis.thirdParty[i].name);
									//console.log(i,dataget.report.androidAnalysis.thirdParty[i]);
									var lf = document.createElement('div');
									lf.className = "thirdparty";
									lf.innerHTML=`<h4>name</h4><p>${dataget.report.androidAnalysis.thirdParty[i].name}</p><h4>description</h4><p>${dataget.report.androidAnalysis.thirdParty[i].description}</p><h4>referenceURL</h4><a href='${dataget.report.androidAnalysis.thirdParty[i].referenceURL}'><p>${dataget.report.androidAnalysis.thirdParty[i].referenceURL}</p></a><h4>type</h4><p>${dataget.report.androidAnalysis.thirdParty[i].type}</p>`;
									document.body.appendChild(lf);
								}


								// lower line page 6

						 var linelorser3 = document.createElement('div');
						 linelorser3.className="linelorser3";
						 linelorser3.style.width="1000px";
						 linelorser3.style.height="2px";
						 linelorser3.style.backgroundColor="rgb( 122, 120, 120 )";
						 document.body.appendChild(linelorser3);

						 // heading network communication

								var ntc = document.createElement('div');
								ntc.className="netcom";
								ntc.innerHTML=`<h2>NETWORK COMMUNICATIONS SUMMARY</h2>`;
								document.body.appendChild(ntc);

								 for(var server in dataget.report.communications.URI){
								 	var servercommunication = document.createElement('div');
								 	servercommunication.className="servercom";
								 	servercommunication.innerHTML=`<h4>${dataget.report.communications.URI[server].serverInfo.country}</h4><table class='sercom'>
								 	<tr>
								 	<td>city</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.city}</td>
								 	</tr>
								 	<tr>
								 	<td>ip</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.ip}</td>
								 	</tr>
								 	<tr>
								 	<td>allocatedDate</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.allocatedDate}</td>
								 	</tr>
								 	<tr>
								 	<td>ASName</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.ASName}</td>
								 	</tr>
								 	<tr>
								 	<td>ASNumber</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.ASNumber}</td>
								 	</tr>
								 	<tr>
								 	<td>latitude</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.latitude}</td>
								 	</tr>
								 	<tr>
								 	<td>longitude</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.longitude}</td>
								 	</tr>
								 	<tr>
								 	<td>bgpPrefix</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.bgpPrefix}</td>
								 	</tr>
								 	</table>`;
								 	document.body.appendChild(servercommunication);
								 	//console.log(dataget.report.communications.URI[server].serverInfo.bgpPrefix);
								 }
								//console.log(dataget.report.communications.URI);



				}
				 foo();
				
			}

		}
		submitdata();

				}else{
					e.style.backgroundColor="green";
					e.style.width=h+"px";
					e.style.height="15px";
					h++;
				}
			}


		}
	</script>
	<script type="text/javascript">
		function logo_upload(evt){
				let image = document.getElementById('logoup');
				image.src = URL.createObjectURL(evt.target.files[0]);
				
				
			}
		
	</script>
</body>
</html>