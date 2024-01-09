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
		/* #box-8{width:200px;height: 200px;background:  rgb( 7, 10, 32 );display: flex;position: absolute;top:10px;left: 1370px;overflow: hidden;border-radius: 5px;justify-content: center;align-items: center;box-shadow: var(--main-background);} */
		/* #box-8::before{width: 100px;height:480px;content: '';position: absolute;background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));} */
		/* #box-8::after{inset: var(--main-inset);content: '';background: rgb(49, 49, 49);border-radius: 5px;position: absolute;} */
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
			<input type="file" id="file2" name="imag" multiple />
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
  // console.log(file);
})
			// var file1= document.getElementById('file2').files[0];

		
	</script>
</body>
</html>