<!doctype html>
<html>
<head>
	<link rel="stylesheet" media="print" href="upload_file_print.css" /> 
	<title>test merge</title>
	<style type="text/css">
		:root{
			--main-background:0px 0px 0px 0px rgb( 42, 49, 82 );
			--main-inset: 2px;
			--main-color:rgb( 138, 138, 138  );
		}
		#software-name{
			width: 10px;
			height: 10px;
			margin-top: -10px;
			color: rgb(199, 15, 15);
			background: rgb(  25, 23, 23  );
			font-family: cursive;
			position: absolute;
			z-index: 1;
		}
		#body{
			background: rgb(18, 18, 19);
			width: 1500px;
			overflow: hidden;
			height:700px;
			margin-top:-10px ;
			margin-left: -10px;
		}
		#box-1{
			width:200px;
			height: 200px;
			background:  rgb( 18, 18, 19 );
			display: flex;
			position: relative;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-1::before{
			width: 100px;
			height:280px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123 ),rgb(  117, 70, 211  ));
			animation: animex1 4s linear infinite;
		}
		@keyframes animex1{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-1::after{
			inset: var(--main-inset);
			content: '';
			background:rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-2{
			width:200px;
			height: 300px;
			background:  rgb(18, 18, 19);
			display: flex;
			position: relative;
			top:10px;
			left: 290px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-2::before{
			width: 100px;
			height:380px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex2 3s linear infinite;
		}
		@keyframes animex2{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-2::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-3{
			width:200px;
			height: 300px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:10px;
			left: 590px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-3::before{
			width: 100px;
			height:380px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex3 3s linear infinite;
		}
		@keyframes animex3{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-3::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-4{
			width:200px;
			height: 300px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:370px;
			left: 10px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-4::before{
			width: 100px;
			height:380px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex4 4s linear infinite;
		}
		@keyframes animex4{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-4::after{
			inset:4px;
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-5{
			width:400px;
			height: 200px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:470px;
			left: 570px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-5::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex5 4s linear infinite;
		}
		@keyframes animex5{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-5::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-6{
			width:400px;
			height: 200px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:70px;
			left: 870px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-6::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex6 4s linear infinite;
		}
		@keyframes animex6{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-6::after{
			inset: var(--main-inset);
			content: '';
			background:rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-7{
			width:200px;
			height: 300px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:370px;
			left: 1000px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-7::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex7 4s linear infinite;
		}
		@keyframes animex7{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-7::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-8{
			width:200px;
			height: 200px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:10px;
			left: 1370px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-8::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex8 4s linear infinite;
		}
		@keyframes animex8{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-8::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-9{
			width:200px;
			height: 300px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:350px;
			left: 670px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-9::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex9 3s linear infinite;
		}
		@keyframes animex9{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-9::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-10{
			width:790px;
			height: 100px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:700px;
			left: 30px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-10::before{
			width: 100px;
			height:880px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex10 4s linear infinite;
		}
		@keyframes animex10{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-10::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-11{
			width:200px;
			height: 200px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:70px;
			left: 170px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-11::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex11 4s linear infinite;
		}
		@keyframes animex11{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-11::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-12{
			width:200px;
			height: 200px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:570px;
			left: 180px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-12::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex12 4s linear infinite;
		}
		@keyframes animex12{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-12::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-13{
			width:200px;
			height: 300px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:210px;
			left: 750px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-13::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex13 4s linear infinite;
		}
		@keyframes animex13{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-13::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-14{
			width:200px;
			height: 200px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:140px;
			left: 1210px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-14::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex14 4s linear infinite;
		}
		@keyframes animex14{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-14::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-15{
			width:200px;
			height: 300px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:550px;
			left: 1360px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-15::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex15 4s linear infinite;
		}
		@keyframes animex15{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-15::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-16{
			width:400px;
			height: 150px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:670px;
			left: 1060px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-16::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex16 4s linear infinite;
		}
		@keyframes animex16{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-16::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-17{
			width:450px;
			height: 190px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:740px;
			left: 460px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-17::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex17 4s linear infinite;
		}
		@keyframes animex17{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-17::after{
			inset: var(--main-inset);
			content: '';
			background:rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#box-18{
			width:120px;
			height: 120px;
			background:  rgb( 7, 10, 32 );
			display: flex;
			position: absolute;
			top:840px;
			left: 60px;
			overflow: hidden;
			border-radius: 5px;
			justify-content: center;
			align-items: center;
			box-shadow: var(--main-background);
		}
		#box-18::before{
			width: 100px;
			height:480px;
			content: '';
			position: absolute;
			background: linear-gradient(to top,rgb( 72, 21, 123  ),rgb( 57, 73, 165 ));
			animation: animex18 4s linear infinite;
		}
		@keyframes animex18{
			0%{transform: rotate(0deg);}
			100%{transform: rotate(350deg);}
		}
		#box-18::after{
			inset: var(--main-inset);
			content: '';
			background: rgb(18, 18, 19);
			border-radius: 5px;
			position: absolute;
		}
		#det{
			width:1000px;
			height: 400px;
			position: absolute;
			background: rgb(  45, 44, 44  );
			top:100px;
			left:120px;
			/*box-shadow: inset 0px 0px 120px 10px white;*/
			border-radius: 10px;
		}
		#logoupload{
			width: 300px;
			height: 300px;
			background: white;
			position: absolute;
			top:130px;
			left: 150px;
			border-radius: 4px;
		}
		#exa{
			color:rgb( 205, 192, 192 );
			font-size: 12px;
			font-weight: bolder;
			font-family: sans-serif;
			letter-spacing: 1;
			position: absolute;
			top:130px;
			left:460px;
		}
		#examiner{
			background: rgb(  43, 41, 41 );
			outline: none;
			color:var(--main-color);
			position: absolute;
			width: 200px;
			height: 25px;
			top:150px;
			left: 460px;
			font-family: sans-serif;
			font-size: 11px;
			text-align: center;
			border:1px solid rgb(225, 225, 225 );
			border-radius:4px;
		}
		#case{
			color:rgb(  205, 192, 192  );
			font-size: 12px;
			font-weight: bolder;
			font-family: sans-serif;
			letter-spacing: 1;
			position: absolute;
			top:130px;
			left:770px;
		}
		#casefolder{
			outline: none;
			background: rgb(43, 41, 41 );
			color:var(--main-color);
			position: absolute;
			width: 180px;
			height: 25px;
			top:150px;
			left: 770px;
			font-family: sans-serif;
			font-size: 11px;
			text-align: center;
			border:1px solid rgb( 225, 225, 225);
			border-radius:4px;
		}
		#fi{
			color:rgb( 205, 192, 192 );
			font-size: 12px;
			font-weight: bolder;
			font-family: sans-serif;
			letter-spacing: 1;
			position: absolute;
			top:200px;
			left:470px;
		}
		#fir{
			outline: none;
			background: rgb(43, 41, 41 );
			position: absolute;
			color:var(--main-color);
			width: 180px;
			height: 25px;
			top:220px;
			left: 460px;
			font-family: sans-serif;
			font-size: 11px;
			text-align: center;
			border:1px solid rgb( 225, 225, 225 );
			border-radius:4px;
		}
		#dest{
			color:rgb( 205, 192, 192 );
			font-size: 12px;
			font-weight: bolder;
			font-family: sans-serif;
			letter-spacing: 1;
			position: absolute;
			top:200px;
			left:770px;
		}
		#destination{
			outline: none;
			background: rgb(43, 41, 41 );
			position: absolute;
			color:var(--main-color);
			width: 180px;
			height: 25px;
			top:220px;
			left: 770px;
			font-family: sans-serif;
			font-size: 11px;
			text-align: center;
			border:1px solid rgb(225, 225, 225  );
			border-radius:4px;
		}
		#da{
			color:rgb( 205, 192, 192 );
			font-size: 12px;
			font-weight: bolder;
			font-family: sans-serif;
			letter-spacing: 1;
			position: absolute;
			top:270px;
			left:460px;
		}
		#date{
			outline: none;
			background: rgb(43, 41, 41 );
			position: absolute;
			color:var(--main-color);
			width: 180px;
			height: 25px;
			top:290px;
			left: 460px;
			font-family: sans-serif;
			font-size: 11px;
			text-align: center;
			border:1px solid rgb( 225, 225, 225 );
			border-radius:4px;
		}
		#submit{
			padding:10px 25px 10px 25px;
			background: rgb(  58, 58, 58 );
			position: absolute;
			border-radius: 5px;
			border: 0px;
			color: white;
			font-size: 11px;
			font-weight: bolder;
			top:410px;
			left: 910px;
		}
		#submit:hover{
			box-shadow:0px 0px 2px 1px gray;
		}
			#submit:active{
			box-shadow:0px 0px 15px 1px gray;
		}
		#submit1{
			position: absolute;
			top:410px;
			left: 750px;
			border-radius: 5px;
			border: 0px;
			color: white;
			font-size: 11px;
			font-weight: bolder;
			padding:10px 25px 10px 25px;
			background: rgb(  58, 58, 58 );
		}
		#submit1:hover{
			box-shadow:0px 0px 2px 1px gray;
		}
		#submit1:active{
			box-shadow:0px 0px 15px 1px gray;
		}
		input::placeholder{
			color:rgb( 148, 148, 148 );
		}
		input[type=datetime-local]::placeholder{
			color:rgb( 148, 148, 148 );
		}
		#file2::file-selector-button {
  border: 2px solid #6c5ce7;
  padding: 10px 120px 10px 120px;
  border-radius: 0.2em;
  background-color: #a29bfe;
  position: absolute;
  top:440px;
  left: 150px;
  transition: 1s;
}

input[type="file"]::file-selector-button:hover {
  background-color: #81ecec;
  border: 2px solid #00cec9;
}
tr td{
	padding: 10px 60px 10px 60px;
	font-family: sans-serif;
	font-weight: bolder;
	font-size: 41px;
}
#n{
	color:rgb( 205, 192, 192 );
	position: absolute;
	top:270px;
	left: 770px;
	font-size: 12px;
	font-weight: bolder;
	font-family: sans-serif;
}
#number{
	color:rgb( 205, 192, 192 );
	position: absolute;
	top:290px;
	height: 25px;
	left: 770px;
	color:var(--main-color);
	font-size: 12px;
	outline: none;
	background: rgb(43, 41, 41 );
	font-weight: bolder;
	border:1px solid rgb( 225, 225, 225 );
	font-family: sans-serif;
}

#f{
	color: rgb(205, 192, 192);
	position: absolute;
	top:370px;
	left: 500px;
}
#f1{
	color: rgb(205, 192, 192);
	position: absolute;
	top:400px;
	left: 500px;
}
	</style>
</head>
<body id="mainbody">
	<div id="software-name"><h1><?php include 'softwarename.php';?></h1></div>
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
	<form action="http://localhost/projectre001/php/insert_account.php" method="post" enctype="multipart/form-data" >
		<div id="up">
			<input type="file" id="file2" name="image" multiple />
		</div>
		<div id="up">
			<label id='f'>file upload
			<input type="file" id="file11" name="image" multiple /></label>
		</div>
		<div id="up">
			<label id='f1'>file upload
			<input type="file" id="file12" name="image" multiple /></label>
		</div>
		<div id="first-1">
			<label id="exa">Examiner:</label>
			<input type="text" placeholder="enter the examiner" id="examiner" name="examiner" required />
		</div>
		<div id="first-2">
			<label id="case">Case Folder:</label>
			<input type="text" placeholder="enter the casefolder" name="casefolder" id="casefolder" required />
		</div>
		<div id="first-3">
			<label id="fi">F.I.R:</label>
			<input type="text" placeholder="enter the F.I.R" name="fir" id="fir"required/>
		</div>
		<div id="first-4">
			<label id="dest">Destination:</label>
			<input type="text" placeholder="enter the Destination" name="destination" id="destination"required/>
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
			<button type="submit"  id="submit" disabled>Submit</button>
			<span id="submit1" class="su" onclick=" submit3()">PDF</span>
		</div>
	</form>
	<script type="text/javascript">
		function submit3(){
			var file4 = document.getElementById('file2').files[0];
			var log = document.createElement('img');
						log.id="im";
						log.src=`upload-images/${file4.name}`;
						document.body.appendChild(log);
						im.style.width="500px";
						im.style.height="500px";

						//   logo page

						var log1 = document.createElement('img');
						log1.id="im2";
						log1.src=`upload-images/${file4.name}`;
						document.body.appendChild(log1);
						im2.style.width="400px";
						im2.style.height="400px";
			//var file1 = document.getElementById('file11').files[0];
			var examiner = document.getElementById('examiner').value;
			var casefolder = document.getElementById('casefolder').value;
			var fir = document.getElementById('fir').value;
			var destination = document.getElementById('destination').value;
			var date = document.getElementById('date').value;
			//var file = document.getElementById('fileget').files[0];
			var file1= document.getElementById('file2').files[0];
			//console.log(file.name);
			submit1.style.display="none";
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
			
			 foo1();
			 foo2();
		}
		 async function foo1(){
			var file1 = document.getElementById('file11').files[0];
			
			const response = await fetch(`upload-file/${file1.name}`);
					let dataget = await response.json();
					console.log(dataget);
					console.log(dataget.report.appProperties);
						

						

						

						//        additional details

						

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
						log2.src='http://localhost/project-management/fphp/report/android.png';
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
						console.log(dataget.report.appProperties.name);
						var apbio = document.createElement('div');
						apbio.id='appbio';
						apbio.innerHTML=`<h3>App bio</h3><h2>${dataget.report.appProperties.name}</h2><h5>ABOUT APP</h5><p>${dataget.report.distribution.marketData[0]}</p>`;
						document.body.appendChild(apbio);

						// lower line page 4

						var linelo4 = document.createElement('div');
						linelo4.id="linelo4";
						linelo4.style.width="1000px";
						linelo4.style.height="2px";
						linelo4.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo4);

						

						//  App Permissions Summary 

						var lineup6 = document.createElement('div');
						lineup6.id="lineup6";
						lineup6.style.width="1000px";
						lineup6.style.height="2px";
						lineup6.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(lineup6);

						var headi = document.createElement('div');
						headi.className='headi';
						headi.innerHTML='<h3>App Permissions Summary</h3>';
						document.body.appendChild(headi);

						for(var i in dataget.report.androidAnalysis.usesPermission){
							if(dataget.report.androidAnalysis.usesPermission[i].description){
								var userper = document.createElement('div');
								userper.className=`userper`;
								userper.innerHTML=`<h3>${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p>`;
								document.body.appendChild(userper);
								if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
									var userper = document.createElement('div');
									userper.className=`userper`;
									userper.innerHTML=`<h3>${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p>${dataget.report.androidAnalysis.usesPermission[i].dangerous}</p>`;
									document.body.appendChild(userper);
									}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
								var userper = document.createElement('div');
								userper.className=`userper`;
								userper.innerHTML=`<h3>${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p>${dataget.report.androidAnalysis.usesPermission[i].dangerous}</p>`;
								document.body.appendChild(userper);
						}else{
							console.log('no found dangerous');
						}
					}
				
				}
					// 	for(var i=0;i<=4;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }
					// 	// lower line page 5

					// 	var linelo5i = document.createElement('div');
					// 	linelo5i.id="linelo5i";
					// 	linelo5i.style.width="1000px";
					// 	linelo5i.style.height="2px";
					// 	linelo5i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo5i);

					// 	//       lower line page 05

					// 	// var linelo5 = document.createElement('div');
					// 	// linelo5.id="linelo5";
					// 	// linelo5.style.width="1000px";
					// 	// linelo5.style.height="2px";
					// 	// linelo5.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	// document.body.appendChild(linelo5);

					// 	//   upper line page 05
					// 	// var lineup51 = document.createElement('div');
					// 	// lineup51.id="lineup51";
					// 	// lineup51.style.width="1000px";
					// 	// lineup51.style.height="2px";
					// 	// lineup51.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	// document.body.appendChild(lineup51);


					// 	//06

					// 	for(var i=5;i<=10;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }
					// 	// upper line page 5

					// 	for(var i=11;i<=16;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// 	// lower line page 5

					// 	var linelo7i = document.createElement('div');
					// 	linelo7i.id="linelo7i";
					// 	linelo7i.style.width="1000px";
					// 	linelo7i.style.height="2px";
					// 	linelo7i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo7i);

					// 	for(var i=17;i<=22;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }
					// 	// lower line page 5

					// 	var linelo8i = document.createElement('div');
					// 	linelo8i.id="linelo8i";
					// 	linelo8i.style.width="1000px";
					// 	linelo8i.style.height="2px";
					// 	linelo8i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo8i);


					// 	//23

					// 	for(var i=23;i<=28;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// 	// lower line page 9

					// 	var linelo9i = document.createElement('div');
					// 	linelo9i.id="linelo9i";
					// 	linelo9i.style.width="1000px";
					// 	linelo9i.style.height="2px";
					// 	linelo9i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo9i);

					// 	//29

					// 	for(var i=29;i<=34;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// 	// lower line page 10

					// 	var linelo10i = document.createElement('div');
					// 	linelo10i.id="linelo10i";
					// 	linelo10i.style.width="1000px";
					// 	linelo10i.style.height="2px";
					// 	linelo10i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo10i);


					// 	//35

					// 	for(var i=35;i<=40;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }
					// 	// lower line page 11

					// 	var linelo11i = document.createElement('div');
					// 	linelo11i.id="linelo11i";
					// 	linelo11i.style.width="1000px";
					// 	linelo11i.style.height="2px";
					// 	linelo11i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo11i);

					// 	//41

					// 	for(var i=41;i<=46;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// // lower line page 12

					// 	var linelo12i = document.createElement('div');
					// 	linelo12i.id="linelo12i";
					// 	linelo12i.style.width="1000px";
					// 	linelo12i.style.height="2px";
					// 	linelo12i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo12i);

					// // 47-52
					// for(var i=47;i<=52;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// // lower line page 13

					// 	var linelo13i = document.createElement('div');
					// 	linelo13i.id="linelo13i";
					// 	linelo13i.style.width="1000px";
					// 	linelo13i.style.height="2px";
					// 	linelo13i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo13i);

					// 	// 53-58
					// for(var i=53;i<=58;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// // lower line page 14

					// 	var linelo14i = document.createElement('div');
					// 	linelo14i.id="linelo14i";
					// 	linelo14i.style.width="1000px";
					// 	linelo14i.style.height="2px";
					// 	linelo14i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo14i);



					// 	//59-64
					// 	for(var i=59;i<=64;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// // lower line page 15

					// 	var linelo15i = document.createElement('div');
					// 	linelo15i.id="linelo14i";
					// 	linelo15i.style.width="1000px";
					// 	linelo15i.style.height="2px";
					// 	linelo15i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo15i);

					// 	//59-64
					// 	for(var i=64;i<=66;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);
					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

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
					ow1.innerHTML = `<span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png' width='50px' height='50px'></span><span>Categories that passed the have a green shield.</span>`;
					document.body.appendChild(ow1);

					var ow2 = document.createElement('div');
					ow2.id = "owasp2";
					ow2.innerHTML = `<span><img src='http://localhost/projectre001/image/shieldred/previews/preview.png' width='50px' height='50px'></span><span>Categories that failed have a red shield.</span>`;
					document.body.appendChild(ow2);

					var ow3 = document.createElement('div');
		 			ow3.id='owasp3';
		 			ow3.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M1/previews/preview.png'width='40px' height='40px'/></span><span>M1<br>Improper Platform Usage</span></div><div><h6><b class='green'>o</b>&nbsp;&nbsp;No problems found.</h6></div>";
		 			document.body.appendChild(ow3);

		 			var ow4 = document.createElement('div');
		 			ow4.id='owasp4';
		 			ow4.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M2/previews/preview.png'width='40px' height='40px'/></span><span>M2<br>Insecure Data Storage</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The app uses the primary external storage.</p><p><b class='red'>o</b>&nbsp;&nbsp;The content provider is not protected by signature permission and exported in the AndroidManifest.xml file. Content providers offer a structured storage mechanism that can be limited to this application or exported to allow access by other applications.</p><p><b class='red'>o</b>&nbsp;&nbsp;The application is using a database that is not encrypted. The lack of encryption could lead to PII or sensitive data leakage if stored in the database.</p></div>";
		 			document.body.appendChild(ow4);

		 			var ow5 = document.createElement('div');
		 			ow5.id='owasp5';
		 			ow5.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M3/previews/preview.png'width='40px' height='40px'/></span><span>M3<br>Insecure Communications</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow5);

		 			var ow6 = document.createElement('div');
		 			ow6.id='owasp6';
		 			ow6.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M4/previews/preview.png'width='40px' height='40px'/></span><span>M4<br>Insecure Authentication</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow6);

		 			var ow7 = document.createElement('div');
		 			ow7.id='owasp7';
		 			ow7.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M5/previews/preview.png'width='40px' height='40px'/></span><span>M5<br>Insufficient Cryptography</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow7);

		 			var ow8 = document.createElement('div');
		 			ow8.id='owasp8';
		 			ow8.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M6/previews/preview.png'width='40px' height='40px'/></span><span>M6<br>Insecure Authorization</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow8);

		 			var ow9 = document.createElement('div');
		 			ow9.id='owasp9';
		 			ow9.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M7/previews/preview.png'width='40px' height='40px'/></span><span>M7<br>Insecure Authorization</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The Android certificate failed the JAR signer verification testing.</p></div>";
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
		 				ow10.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M8/previews/preview.png'width='40px' height='40px'/></span><span>M8<br>Code Tampering</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 				document.body.appendChild(ow10);

		 				var ow11 = document.createElement('div');
		 					ow11.id='owasp11';
		 					ow11.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M9/previews/preview.png'width='40px' height='40px'/></span><span>M9<br>Reverse Engineering</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;This application exposes source level metadata symbols and fails the testing outlined by OWASP Mobile Top 10 covered under category M9: Reverse Engineering</p></div>";
		 				document.body.appendChild(ow11);

		 				var ow12 = document.createElement('div');
		 					ow12.id='owasp12';
		 					ow12.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M10/previews/preview.png'width='40px' height='40px'/></span><span>M10<br>Extraneous Functionality</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
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
		 					var sca = document.createElement('div');
		 					sca.className="sca";
		 					sca.innerHTML=`<h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		 					<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		 					<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		 					<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		 					<h4>Importance</h4><p>${dataget.report.scanDetails[g].importance}</p>`;
		 					document.body.appendChild(sca);
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
		 				// var cer = document.createElement('div');
		 				// console.log(dataget.report.certificate);
		 				// 	// cer.className="cer";
		 				// for(var oi in dataget.report.certificate){
		 				// 	 var cer = document.createElement('div');
		 				// 		console.log(oi,dataget.report.certificate[oi]);
		 				// 		 cer.innerHTML=`<h4>${oi}</h4><p>${dataget.report.certificate[oi]}</p> `;
		 				// 		 document.body.appendChild(cer);
		 			
		 				// 	// cer.innerHTML=`<h2>CERTIFICATE-SHA1 fingerprint</h2><p>${dataget.report.certificate}</p>`;
		 				// 	document.body.appendChild(cer);
		 					

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



		 			// 	for(scandetail=0;scandetail<=92;scandetail++){
		 			// 		if(dataget.report.scanDetails[scandetail].riskType == "security"){
		 			// 			//let lists=[1,2,3];
		 			// 			//var df = dataget.report.scanDetails[scandetails].riskType;
		 			// 			//console.log(df);
		 			// 			// console.log(lists.concat(df));
		 			// 			// console.log(lists);
		 			// 		var srsd=document.createElement('div');
		 			// 		srsd.className="srsd";
		 			// 		srsd.innerHTML=`<span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/>${dataget.report.scanDetails[scandetail].importance}</span><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/>${dataget.report.scanDetails[scandetail].kind}</span><h6>DESCRIPTION</h6><p>${dataget.report.scanDetails[scandetail].description}</p>`;
					// 	 	document.body.appendChild(srsd);

		 			// 	}else {
		 			// 		console.log("do not found");
		 			// 	}
		 			// }

		 			// lower line page 19

						// var linelo19i = document.createElement('div');
						// linelo19i.id="linelo19i";
						// linelo19i.style.width="1000px";
						// linelo19i.style.height="2px";
						// linelo19i.style.backgroundColor="rgb( 122, 120, 120 )";
						// document.body.appendChild(linelo19i);

		 				// var srs = document.createElement('div');
		 				// srs.id="srs";
		 				// srs.innerHTML=`<h2>Risk Type ${dataget.report.scanDetails[1].riskType}</h2>`;
		 				// document.body.appendChild(srs);

		 				
						


					
						
						

						

						

						

						// 		// Markets heading

						// 		for(m=0;m<=92;m++){
						// 			if(dataget.report.scanDetails[m].kind == 'Markets'){
						// 				var ma = document.createElement('div');
						// 				ma.className = "ma";
						// 				ma.innerHTML = `<h3>${dataget.report.scanDetails[m].kind}</h3>`;
						// 				document.body.appendChild(ma);
						// 				break;
						// 			}else{
						// 				console.log('no found markets...');
						// 			}
						// 		}

						// 		for(MARKETS=0;MARKETS<=92;MARKETS++){
						// 			if(dataget.report.scanDetails[MARKETS].kind == "Markets"){
						// 				console.log(dataget.report.scanDetails[MARKETS].kind);
						// 				 var markets = document.createElement('div');
						// 				 markets.className = "markets";
						// 				 markets.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[MARKETS].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[MARKETS].description}</p>`; 
						// 				 document.body.appendChild(markets);
						// 				}else{
						// 					console.log('no found markets...');
						// 				}
						// 		}

						// 		// Mobile advertising heading

						// 		for(mo=0;mo<=92;mo++){
						// 			if(dataget.report.scanDetails[mo].kind == 'Mobile Advertising'){
						// 				var mob = document.createElement('div');
						// 				mob.className = "mob";
						// 				mob.innerHTML = `<h3>${dataget.report.scanDetails[mo].kind}</h3>`;
						// 				document.body.appendChild(mob);
						// 				break;
						// 			}else{
						// 				console.log('no found mobile advertising...');
						// 			}
						// 		}

						// 		for(MOBILE=0;MOBILE<=92;MOBILE++){
						// 			if(dataget.report.scanDetails[MOBILE].kind == "Mobile Advertising"){
						// 				console.log(dataget.report.scanDetails[MOBILE].kind);
						// 				 var mobile = document.createElement('div');
						// 				 mobile.className = "mobile";
						// 				 mobile.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[MOBILE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[MOBILE].description}</p>`; 
						// 				 document.body.appendChild(mobile);
						// 				}else{
						// 					console.log('no found mobile advertising...');
						// 				}
						// 		}

						// 		// network heading

						// 		for(n=0;n<=92;n++){
						// 			if(dataget.report.scanDetails[n].kind == 'Network'){
						// 				var ne = document.createElement('div');
						// 				ne.className = "ne";
						// 				ne.innerHTML = `<h3>${dataget.report.scanDetails[n].kind}</h3>`;
						// 				document.body.appendChild(ne);
						// 				break;
						// 			}else{
						// 				console.log('no found network...');
						// 			}
						// 		}

						// 		for(NETWORK=0;NETWORK<=92;NETWORK++){
						// 			if(dataget.report.scanDetails[NETWORK].kind == "Network"){
						// 				console.log(dataget.report.scanDetails[NETWORK].kind);
						// 				 var network = document.createElement('div');
						// 				 network.className = "network";
						// 				 network.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[NETWORK].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[NETWORK].description}</p>`; 
						// 				 document.body.appendChild(network);
						// 				}else{
						// 					console.log('no found network...');
						// 				}
						// 		}

						// 		// network security heading

						// 		for(nst=0;nst<=92;nst++){
						// 			if(dataget.report.scanDetails[nst].kind == 'Network Security'){
						// 				var ns = document.createElement('div');
						// 				ns.className = "ns";
						// 				ns.innerHTML = `<h3>${dataget.report.scanDetails[nst].kind}</h3>`;
						// 				document.body.appendChild(ns);
						// 				break;
						// 			}else{
						// 				console.log('no found network security...');
						// 			}
						// 		}

						// 		for(NETWORKs=0;NETWORKs<=92;NETWORKs++){
						// 			if(dataget.report.scanDetails[NETWORKs].kind == "Network Security"){
						// 				console.log(dataget.report.scanDetails[NETWORKs].kind);
						// 				 var networks = document.createElement('div');
						// 				 networks.className = "networks";
						// 				 networks.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[NETWORKs].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[NETWORKs].description}</p>`; 
						// 				 document.body.appendChild(networks);
						// 				}else{
						// 					console.log('no found network security...');
						// 				}
						// 		}

						// 		// package manager heading

						// 		for(pm=0;pm<=92;pm++){
						// 			if(dataget.report.scanDetails[pm].kind == 'Package Manager'){
						// 				var pma = document.createElement('div');
						// 				pma.className = "pma";
						// 				pma.innerHTML = `<h3>${dataget.report.scanDetails[pm].kind}</h3>`;
						// 				document.body.appendChild(pma);
						// 				break;
						// 			}else{
						// 				console.log('no found package manager...');
						// 			}
						// 		}

						// 		for(PACKAGE=0;PACKAGE<=92;PACKAGE++){
						// 			if(dataget.report.scanDetails[PACKAGE].kind == "Network Security"){
						// 				console.log(dataget.report.scanDetails[PACKAGE].kind);
						// 				 var package = document.createElement('div');
						// 				 package.className = "package";
						// 				 package.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[PACKAGE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[PACKAGE].description}</p>`; 
						// 				 document.body.appendChild(package);
						// 				}else{
						// 					console.log('no found package manager...');
						// 				}
						// 		}

						// 		// possible payload heading

						// 		for(pp=0;pp<=92;pp++){
						// 			if(dataget.report.scanDetails[pp].kind == 'Possible Payload'){
						// 				var ppl = document.createElement('div');
						// 				ppl.className = "ppl";
						// 				ppl.innerHTML = `<h3>${dataget.report.scanDetails[pp].kind}</h3>`;
						// 				document.body.appendChild(ppl);
						// 				break;
						// 			}else{
						// 				console.log('no found possible payload...');
						// 			}
						// 		}

						// 		for(POSSIBLE=0;POSSIBLE<=92;POSSIBLE++){
						// 			if(dataget.report.scanDetails[POSSIBLE].kind == "Possible Payload"){
						// 				console.log(dataget.report.scanDetails[POSSIBLE].kind);
						// 				 var possible = document.createElement('div');
						// 				 possible.className = "possible";
						// 				 possible.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[POSSIBLE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[POSSIBLE].description}</p>`; 
						// 				 document.body.appendChild(possible);
						// 				}else{
						// 					console.log('no found possible payload...');
						// 				}
						// 		}

						// 		// Security heading

						// 		for(s=0;s<=92;s++){
						// 			if(dataget.report.scanDetails[s].kind == 'Security'){
						// 				var se = document.createElement('div');
						// 				se.className = "se";
						// 				se.innerHTML = `<h3>${dataget.report.scanDetails[s].kind}</h3>`;
						// 				document.body.appendChild(se);
						// 				break;
						// 			}else{
						// 				console.log('no found security...');
						// 			}
						// 		}

						// 		for(SECURITY=0;SECURITY<=92;SECURITY++){
						// 			if(dataget.report.scanDetails[SECURITY].kind == "Security"){
						// 				console.log(dataget.report.scanDetails[SECURITY].kind);
						// 				 var security = document.createElement('div');
						// 				 security.className = "security";
						// 				 security.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[SECURITY].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[SECURITY].description}</p>`; 
						// 				 document.body.appendChild(security);
						// 				}else{
						// 					console.log('no found security...');
						// 				}
						// 		}


						// 		// Storage heading

						// 		for(st=0;st<=92;st++){
						// 			if(dataget.report.scanDetails[st].kind == 'Storage'){
						// 				var sto = document.createElement('div');
						// 				sto.className = "sto";
						// 				sto.innerHTML = `<h3>${dataget.report.scanDetails[st].kind}</h3>`;
						// 				document.body.appendChild(sto);
						// 				break;
						// 			}else{
						// 				console.log('no found storage...');
						// 			}
						// 		}

						// 		for(STORAGE=0;STORAGE<=92;STORAGE++){
						// 			if(dataget.report.scanDetails[STORAGE].kind == "Storage"){
						// 				console.log(dataget.report.scanDetails[STORAGE].kind);
						// 				 var storage = document.createElement('div');
						// 				 storage.className = "security";
						// 				 storage.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[STORAGE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[STORAGE].description}</p>`; 
						// 				 document.body.appendChild(storage);
						// 				}else{
						// 					console.log('no found storage...');
						// 				}
						// 		}

						// 		// System heading

						// 		for(sy=0;sy<=92;sy++){
						// 			if(dataget.report.scanDetails[sy].kind == 'System'){
						// 				var sys = document.createElement('div');
						// 				sys.className = "sys";
						// 				sys.innerHTML = `<h3>${dataget.report.scanDetails[sy].kind}</h3>`;
						// 				document.body.appendChild(sys);
						// 				break;
						// 			}else{
						// 				console.log('no found system...');
						// 			}
						// 		}

						// 		for(SYSTEM=0;SYSTEM<=92;SYSTEM++){
						// 			if(dataget.report.scanDetails[SYSTEM].kind == "System"){
						// 				console.log(dataget.report.scanDetails[SYSTEM].kind);
						// 				 var system = document.createElement('div');
						// 				 system.className = "system";
						// 				 system.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[SYSTEM].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[SYSTEM].description}</p>`; 
						// 				 document.body.appendChild(system);
						// 				}else{
						// 					console.log('no found system...');
						// 				}
						// 		}

						// 		// telephony heading

						// 		for(t=0;t<=92;t++){
						// 			if(dataget.report.scanDetails[t].kind == 'Telephony'){
						// 				var te = document.createElement('div');
						// 				te.className = "te";
						// 				te.innerHTML = `<h3>${dataget.report.scanDetails[t].kind}</h3>`;
						// 				document.body.appendChild(te);
						// 				break;
						// 			}else{
						// 				console.log('no found Telephony...');
						// 			}
						// 		}

						// 		for(TELEPHONY=0;TELEPHONY<=92;TELEPHONY++){
						// 			if(dataget.report.scanDetails[TELEPHONY].kind == "Telephony"){
						// 				console.log(dataget.report.scanDetails[TELEPHONY].kind);
						// 				 var telephony = document.createElement('div');
						// 				 telephony.className = "telephony";
						// 				 telephony.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[TELEPHONY].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[TELEPHONY].description}</p>`; 
						// 				 document.body.appendChild(telephony);
						// 				}else{
						// 					console.log('no found system...');
						// 				}
						// 		}

						// 		// Vulnerability heading

						// 		for(v=0;v<=92;v++){
						// 			if(dataget.report.scanDetails[v].kind == 'Vulnerability'){
						// 				var vu = document.createElement('div');
						// 				vu.className = "vu";
						// 				vu.innerHTML = `<h3>${dataget.report.scanDetails[v].kind}</h3>`;
						// 				document.body.appendChild(vu);
						// 				break;
						// 			}else{
						// 				console.log('no found vulnerability...');
						// 			}
						// 		}

						// 		for(VULNERABILITY=0;VULNERABILITY<=92;VULNERABILITY++){
						// 			if(dataget.report.scanDetails[VULNERABILITY].kind == "Vulnerability"){
						// 				console.log(dataget.report.scanDetails[VULNERABILITY].kind);
						// 				 var vulnerability = document.createElement('div');
						// 				 vulnerability.className = "vulnerability";
						// 				 vulnerability.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[VULNERABILITY].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[VULNERABILITY].description}</p>`; 
						// 				 document.body.appendChild(vulnerability);
						// 				}else{
						// 					console.log('no found vulnerability...');
						// 				}
						// 		}

						// 		// webview heading

						// 		for(w=0;w<=92;w++){
						// 			if(dataget.report.scanDetails[w].kind == 'WebView'){
						// 				var wv = document.createElement('div');
						// 				wv.className = "wv";
						// 				wv.innerHTML = `<h3>${dataget.report.scanDetails[w].kind}</h3>`;
						// 				document.body.appendChild(wv);
						// 				break;
						// 			}else{
						// 				console.log('no found webview...');
						// 			}
						// 		}

						// 		for(WEB=0;WEB<=92;WEB++){
						// 			if(dataget.report.scanDetails[WEB].kind == "WebView"){
						// 				console.log(dataget.report.scanDetails[WEB].kind);
						// 				 var web = document.createElement('div');
						// 				 web.className = "web";
						// 				 web.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[WEB].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[WEB].description}</p>`; 
						// 				 document.body.appendChild(web);
						// 				}else{
						// 					console.log('no found webview...');
						// 				}
						// 		}

						// 		// lower line page 6

						// var linelor3 = document.createElement('div');
						// linelor3.id="linelor3";
						// linelor3.style.width="1000px";
						// linelor3.style.height="2px";
						// linelor3.style.backgroundColor="rgb( 122, 120, 120 )";
						// document.body.appendChild(linelor3);

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







				
			///////////////////////////////////////////////////////////////////////////////////////////////







				 async function foo2(){
					var file2 = document.getElementById('file12').files[0];
					var file5 = document.getElementById('file2').files[0];
					const response = await fetch(`upload-file/${file2.name}`);
					let dataget = await response.json();

					var lineup13 = document.createElement('div');
						lineup13.className="lineup13"
						lineup13.style.width="1000px";
						lineup13.style.height="4px";
						lineup13.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(lineup13);
	
					//        additional details
						console.log(file2.name);
						var str = file2.name;
						var len = str.length-5;
						var sli = str.slice(0,len);
						console.log(sli);
					var second1 = document.createElement('div');
					 	second1.className="second2";
					 	second1.innerHTML=`<h2>${sli}</h2>`;
					 	document.body.appendChild(second1);
					

						// var g = document.createElement('div');
						// g.id="bio";
						// g.innerHTML=`<table id="table1">
						// <tr><td>Examiner</td>
						// <td>${examiner}</td></tr>
						// <tr><td>Case Folder</td>
						// <td>${casefolder}</td></tr>
						// <tr><td>F.I.R</td>
						// <td>${fir}</td></tr>
						// <tr><td>Destination</td>
						// <td>${destination}</td></tr>
						// <tr><td>Date Time</td>
						// <td>${date}</td></tr></table>`;
						// document.body.appendChild(g);

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
						log2.src='http://localhost/project-management/fphp/report/android.png';
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

						var linelo4 = document.createElement('div');
						linelo4.id="linelo4";
						linelo4.style.width="1000px";
						linelo4.style.height="2px";
						linelo4.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo4);

						

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
										userper.className=`userper`;
										userper.innerHTML=`<h3>${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p>${dataget.report.androidAnalysis.usesPermission[i].dangerous}</p>`;
										document.body.appendChild(userper);
									}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
										var userper = document.createElement('div');
										userper.className=`userper`;
										userper.innerHTML=`<h3>${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p>${dataget.report.androidAnalysis.usesPermission[i].dangerous}</p>`;
										document.body.appendChild(userper);
									}else{
										console.log('no found dangerous');
									}
								}
						}
					// 	for(var i=0;i<=4;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }
					// 	// lower line page 5

					// 	var linelo5i = document.createElement('div');
					// 	linelo5i.id="linelo5i";
					// 	linelo5i.style.width="1000px";
					// 	linelo5i.style.height="2px";
					// 	linelo5i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo5i);

					// 	//       lower line page 05

					// 	// var linelo5 = document.createElement('div');
					// 	// linelo5.id="linelo5";
					// 	// linelo5.style.width="1000px";
					// 	// linelo5.style.height="2px";
					// 	// linelo5.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	// document.body.appendChild(linelo5);

					// 	//   upper line page 05
					// 	// var lineup51 = document.createElement('div');
					// 	// lineup51.id="lineup51";
					// 	// lineup51.style.width="1000px";
					// 	// lineup51.style.height="2px";
					// 	// lineup51.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	// document.body.appendChild(lineup51);


					// 	//06

					// 	for(var i=5;i<=10;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else if(dataget.report.androidAnalysis.usesPermission){
					// 		console.log("empty");
					// 	}
					// }
					// 	// upper line page 5

					// 	for(var i=11;i<=16;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// 	// lower line page 5

					// 	var linelo7i = document.createElement('div');
					// 	linelo7i.id="linelo7i";
					// 	linelo7i.style.width="1000px";
					// 	linelo7i.style.height="2px";
					// 	linelo7i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo7i);

					// 	for(var i=17;i<=22;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }
					// 	// lower line page 5

					// 	var linelo8i = document.createElement('div');
					// 	linelo8i.id="linelo8i";
					// 	linelo8i.style.width="1000px";
					// 	linelo8i.style.height="2px";
					// 	linelo8i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo8i);


					// 	//23

					// 	for(var i=23;i<=28;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// 	// lower line page 9

					// 	var linelo9i = document.createElement('div');
					// 	linelo9i.id="linelo9i";
					// 	linelo9i.style.width="1000px";
					// 	linelo9i.style.height="2px";
					// 	linelo9i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo9i);

					// 	//29

					// 	for(var i=29;i<=34;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// 	// lower line page 10

					// 	var linelo10i = document.createElement('div');
					// 	linelo10i.id="linelo10i";
					// 	linelo10i.style.width="1000px";
					// 	linelo10i.style.height="2px";
					// 	linelo10i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo10i);


					// 	//35

					// 	for(var i=35;i<=40;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }
					// 	// lower line page 11

					// 	var linelo11i = document.createElement('div');
					// 	linelo11i.id="linelo11i";
					// 	linelo11i.style.width="1000px";
					// 	linelo11i.style.height="2px";
					// 	linelo11i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo11i);

					// 	//41

					// 	for(var i=41;i<=46;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// // lower line page 12

					// 	var linelo12i = document.createElement('div');
					// 	linelo12i.id="linelo12i";
					// 	linelo12i.style.width="1000px";
					// 	linelo12i.style.height="2px";
					// 	linelo12i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo12i);

					// // 47-52
					// for(var i=47;i<=52;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// // lower line page 13

					// 	var linelo13i = document.createElement('div');
					// 	linelo13i.id="linelo13i";
					// 	linelo13i.style.width="1000px";
					// 	linelo13i.style.height="2px";
					// 	linelo13i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo13i);

					// 	// 53-58
					// for(var i=53;i<=58;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// // lower line page 14

					// 	var linelo14i = document.createElement('div');
					// 	linelo14i.id="linelo14i";
					// 	linelo14i.style.width="1000px";
					// 	linelo14i.style.height="2px";
					// 	linelo14i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo14i);



					// 	//59-64
					// 	for(var i=59;i<=64;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);

					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
							

					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

					// // lower line page 15

					// 	var linelo15i = document.createElement('div');
					// 	linelo15i.id="linelo14i";
					// 	linelo15i.style.width="1000px";
					// 	linelo15i.style.height="2px";
					// 	linelo15i.style.backgroundColor="rgb( 122, 120, 120 )";
					// 	document.body.appendChild(linelo15i);

					// 	//59-64
					// 	for(var i=64;i<=66;i++){
					// 	var div= document.createElement('div');
					// 	div.className="aps1";
					// 	if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
					// 	div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"></div>`;
					// 	document.body.appendChild(div);
					// 	}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
					// 		div.innerHTML=`<div class="permission">${dataget.report.androidAnalysis.usesPermission[i].kind}
					// 	<div class="description">${dataget.report.androidAnalysis.usesPermission[i].description}</div>
					// 	</div>
					// 	<div class="dang"><img class='DANGEROUS' src='http://localhost/projectre001/image/DANGEROUS/previews/preview.png' width='100px height='100px'/></div>`;
					// 	document.body.appendChild(div);
					// 	}else{
					// 		console.log("empty");
					// 	}
					// }

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
					ow1.innerHTML = `<span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png' width='50px' height='50px'></span><span>Categories that passed the have a green shield.</span>`;
					document.body.appendChild(ow1);

					var ow2 = document.createElement('div');
					ow2.id = "owasp2";
					ow2.innerHTML = `<span><img src='http://localhost/projectre001/image/shieldred/previews/preview.png' width='50px' height='50px'></span><span>Categories that failed have a red shield.</span>`;
					document.body.appendChild(ow2);

					var ow3 = document.createElement('div');
		 			ow3.id='owasp3';
		 			ow3.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M1/previews/preview.png'width='40px' height='40px'/></span><span>M1<br>Improper Platform Usage</span></div><div><h6><b class='green'>o</b>&nbsp;&nbsp;No problems found.</h6></div>";
		 			document.body.appendChild(ow3);

		 			var ow4 = document.createElement('div');
		 			ow4.id='owasp4';
		 			ow4.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M2/previews/preview.png'width='40px' height='40px'/></span><span>M2<br>Insecure Data Storage</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The app uses the primary external storage.</p><p><b class='red'>o</b>&nbsp;&nbsp;The content provider is not protected by signature permission and exported in the AndroidManifest.xml file. Content providers offer a structured storage mechanism that can be limited to this application or exported to allow access by other applications.</p><p><b class='red'>o</b>&nbsp;&nbsp;The application is using a database that is not encrypted. The lack of encryption could lead to PII or sensitive data leakage if stored in the database.</p></div>";
		 			document.body.appendChild(ow4);

		 			var ow5 = document.createElement('div');
		 			ow5.id='owasp5';
		 			ow5.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M3/previews/preview.png'width='40px' height='40px'/></span><span>M3<br>Insecure Communications</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow5);

		 			var ow6 = document.createElement('div');
		 			ow6.id='owasp6';
		 			ow6.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M4/previews/preview.png'width='40px' height='40px'/></span><span>M4<br>Insecure Authentication</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow6);

		 			var ow7 = document.createElement('div');
		 			ow7.id='owasp7';
		 			ow7.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M5/previews/preview.png'width='40px' height='40px'/></span><span>M5<br>Insufficient Cryptography</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow7);

		 			var ow8 = document.createElement('div');
		 			ow8.id='owasp8';
		 			ow8.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M6/previews/preview.png'width='40px' height='40px'/></span><span>M6<br>Insecure Authorization</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow8);

		 			var ow9 = document.createElement('div');
		 			ow9.id='owasp9';
		 			ow9.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M7/previews/preview.png'width='40px' height='40px'/></span><span>M7<br>Insecure Authorization</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The Android certificate failed the JAR signer verification testing.</p></div>";
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
		 				ow10.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M8/previews/preview.png'width='40px' height='40px'/></span><span>M8<br>Code Tampering</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 				document.body.appendChild(ow10);

		 				var ow11 = document.createElement('div');
		 					ow11.id='owasp11';
		 					ow11.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M9/previews/preview.png'width='40px' height='40px'/></span><span>M9<br>Reverse Engineering</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;This application exposes source level metadata symbols and fails the testing outlined by OWASP Mobile Top 10 covered under category M9: Reverse Engineering</p></div>";
		 				document.body.appendChild(ow11);

		 				var ow12 = document.createElement('div');
		 					ow12.id='owasp12';
		 					ow12.innerHTML="<div class='j'><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='http://localhost/projectre001/image/M10/previews/preview.png'width='40px' height='40px'/></span><span>M10<br>Extraneous Functionality</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
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
		 					var sca = document.createElement('div');
		 					sca.className="sca";
		 					sca.innerHTML=`<h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		 					<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		 					<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		 					<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		 					<h4>Importance</h4><p>${dataget.report.scanDetails[g].importance}</p>`;
		 					document.body.appendChild(sca);
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
		 				// var cer = document.createElement('div');
		 				// console.log(dataget.report.certificate);
		 				// 	// cer.className="cer";
		 				// for(var oi in dataget.report.certificate){
		 				// 	 var cer = document.createElement('div');
		 				// 		console.log(oi,dataget.report.certificate[oi]);
		 				// 		 cer.innerHTML=`<h4>${oi}</h4><p>${dataget.report.certificate[oi]}</p> `;
		 				// 		 document.body.appendChild(cer);
		 			
		 				// 	// cer.innerHTML=`<h2>CERTIFICATE-SHA1 fingerprint</h2><p>${dataget.report.certificate}</p>`;
		 				// 	document.body.appendChild(cer);
		 					

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



		 			// 	for(scandetail=0;scandetail<=92;scandetail++){
		 			// 		if(dataget.report.scanDetails[scandetail].riskType == "security"){
		 			// 			//let lists=[1,2,3];
		 			// 			//var df = dataget.report.scanDetails[scandetails].riskType;
		 			// 			//console.log(df);
		 			// 			// console.log(lists.concat(df));
		 			// 			// console.log(lists);
		 			// 		var srsd=document.createElement('div');
		 			// 		srsd.className="srsd";
		 			// 		srsd.innerHTML=`<span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/>${dataget.report.scanDetails[scandetail].importance}</span><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/>${dataget.report.scanDetails[scandetail].kind}</span><h6>DESCRIPTION</h6><p>${dataget.report.scanDetails[scandetail].description}</p>`;
					// 	 	document.body.appendChild(srsd);

		 			// 	}else {
		 			// 		console.log("do not found");
		 			// 	}
		 			// }

		 			// lower line page 19

						// var linelo19i = document.createElement('div');
						// linelo19i.id="linelo19i";
						// linelo19i.style.width="1000px";
						// linelo19i.style.height="2px";
						// linelo19i.style.backgroundColor="rgb( 122, 120, 120 )";
						// document.body.appendChild(linelo19i);

		 				// var srs = document.createElement('div');
		 				// srs.id="srs";
		 				// srs.innerHTML=`<h2>Risk Type ${dataget.report.scanDetails[1].riskType}</h2>`;
		 				// document.body.appendChild(srs);

		 				// for(scandetails=0;scandetails<=92;scandetails++){
		 				// 	if(dataget.report.scanDetails[scandetails].riskType == "privacy"){
		 				// 		//let lists=[1,2,3];
		 				// 		//var df = dataget.report.scanDetails[scandetails].riskType;
		 				// 		//console.log(df);
		 				// 		// console.log(lists.concat(df));
		 				// 		// console.log(lists);
		 				// 	var srsd=document.createElement('div');
		 				// 	srsd.className="srsd";
		 				// 	srsd.innerHTML=`<span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/>${dataget.report.scanDetails[scandetails].importance}</span><span><img src='http://localhost/projectre001/image/shieldgreen/previews/preview.png'width='40px' height='40px'/>${dataget.report.scanDetails[scandetails].kind}</span><h6>DESCRIPTION</h6><p>${dataget.report.scanDetails[scandetails].description}</p>`;
						//  	document.body.appendChild(srsd);

		 				// }else {
		 				// 	console.log("do not found");
		 				// }

		 				// }
		 				
		 				// lower line page 20

						// var linelo20i = document.createElement('div');
						// linelo20i.id="linelo20i";
						// linelo20i.style.width="1000px";
						// linelo20i.style.height="2px";
						// linelo20i.style.backgroundColor="rgb( 122, 120, 120 )";
						// document.body.appendChild(linelo20i);

						// // Analysis
						// for(ac=0;ac<=92;ac++){
						// 	if(dataget.report.scanDetails[ac].kind == 'Accounts'){
						// 		const ana = document.createElement('div');
						// 		ana.className = "ana";
						// 		ana.innerHTML=`<div><h3>${dataget.report.scanDetails[ac].kind}</h3></div>`;
						// 		document.body.appendChild(ana);
						// 		break;
						// 	}else{
						// 		console.log('no found..');
						// 	}
						// }
						// 		for(account=0;account<=92;account++){
						// 			if(dataget.report.scanDetails[account].kind == "Accounts"){
						// 				console.log(dataget.report.scanDetails[account].kind);
						// 				 var acc = document.createElement('div');
						// 				 acc.className = "acco";
						// 				 acc.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[account].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[account].description}</p>`; 
						// 				 document.body.appendChild(acc);
						// 			}else{
						// 				console.log("not account");
						// 			}
						// 		}

								// Activity heading

								// for(act=0;act<=92;act++){
								// 	if(dataget.report.scanDetails[act].kind == 'Activity'){
								// 		var acti = document.createElement('div');
								// 		acti.className = "acti";
								// 		acti.innerHTML = `<h3>${dataget.report.scanDetails[act].kind}</h3>`;
								// 		document.body.appendChild(acti);
								// 		break;
								// 	}else{
								// 		console.log('no found Activity...');
								// 	}
								// }

								// for(activity=0;activity<=92;activity++){
								// 	if(dataget.report.scanDetails[activity].kind == "Activity"){
								// 		console.log(dataget.report.scanDetails[activity].kind);
								// 		 var activ = document.createElement('div');
								// 		 activ.className = "activ";
								// 		 activ.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[activity].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[activity].description}</p>`; 
								// 		 document.body.appendChild(activ);
								// 		}else{
								// 			console.log('no found activity');
								// 		}
								// }

								// Backup heading

						// 		for(bk=0;bk<=92;bk++){
						// 			if(dataget.report.scanDetails[bk].kind == 'Backup'){
						// 				var bku = document.createElement('div');
						// 				bku.className = "bku";
						// 				bku.innerHTML = `<h3>${dataget.report.scanDetails[bk].kind}</h3>`;
						// 				document.body.appendChild(bku);
						// 				break;
						// 			}else{
						// 				console.log('no found Activity...');
						// 			}
						// 		}

						// 		for(backup=0;backup<=92;backup++){
						// 			if(dataget.report.scanDetails[backup].kind == "Backup"){
						// 				console.log(dataget.report.scanDetails[backup].kind);
						// 				 var backup1 = document.createElement('div');
						// 				 backup1.className = "backup";
						// 				 backup1.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[backup].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[backup].description}</p>`; 
						// 				 document.body.appendChild(backup1);
						// 				}else{
						// 					console.log('no found backup');
						// 				}
						// 		}

						// 		// binary protections heading

						// 		for(bp=0;bp<=92;bp++){
						// 			if(dataget.report.scanDetails[bp].kind == 'Binary Protections Testing'){
						// 				var bin = document.createElement('div');
						// 				bin.className = "bin";
						// 				bin.innerHTML = `<h3>${dataget.report.scanDetails[bp].kind}</h3>`;
						// 				document.body.appendChild(bin);
						// 				break;
						// 			}else{
						// 				console.log('no found Binary Protections Testing...');
						// 			}
						// 		}

						// 		for(BINARY=0;BINARY<=92;BINARY++){
						// 			if(dataget.report.scanDetails[BINARY].kind == "Binary Protections Testing"){
						// 				console.log(dataget.report.scanDetails[BINARY].kind);
						// 				 var binary = document.createElement('div');
						// 				 binary.className = "binary";
						// 				 binary.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[BINARY].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[BINARY].description}</p>`; 
						// 				 document.body.appendChild(binary);
						// 				}else{
						// 					console.log('no found Binary Protections Testing...');
						// 				}
						// 		}

						// 		// calendar heading

						// 		for(cal=0;cal<=92;cal++){
						// 			if(dataget.report.scanDetails[cal].kind == 'Calendar'){
						// 				var ca = document.createElement('div');
						// 				ca.className = "ca";
						// 				ca.innerHTML = `<h3>${dataget.report.scanDetails[cal].kind}</h3>`;
						// 				document.body.appendChild(ca);
						// 				break;
						// 			}else{
						// 				console.log('no found calendar...');
						// 			}
						// 		}

						// 		for(CALENDAR=0;CALENDAR<=92;CALENDAR++){
						// 			if(dataget.report.scanDetails[CALENDAR].kind == "Calendar"){
						// 				console.log(dataget.report.scanDetails[CALENDAR].kind);
						// 				 var calendar = document.createElement('div');
						// 				 calendar.className = "calendar";
						// 				 calendar.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[CALENDAR].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[CALENDAR].description}</p>`; 
						// 				 document.body.appendChild(calendar);
						// 				}else{
						// 					console.log('no found calendar...');
						// 				}
						// 		}

						// 		// camera heading

						// 		for(cam=0;cam<=92;cam++){
						// 			if(dataget.report.scanDetails[cam].kind == 'Camera'){
						// 				var came = document.createElement('div');
						// 				came.className = "came";
						// 				came.innerHTML = `<h3>${dataget.report.scanDetails[cam].kind}</h3>`;
						// 				document.body.appendChild(came);
						// 				break;
						// 			}else{
						// 				console.log('no found camera...');
						// 			}
						// 		}

						// 		for(CAMERA=0;CAMERA<=92;CAMERA++){
						// 			if(dataget.report.scanDetails[CAMERA].kind == "Camera"){
						// 				console.log(dataget.report.scanDetails[CAMERA].kind);
						// 				 var camera = document.createElement('div');
						// 				 camera.className = "camera";
						// 				 camera.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[CAMERA].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[CAMERA].description}</p>`; 
						// 				 document.body.appendChild(camera);
						// 				}else{
						// 					console.log('no found camera...');
						// 				}
						// 		}

						// 		// cloud services heading

						// 		for(cl=0;cl<=92;cl++){
						// 			if(dataget.report.scanDetails[cl].kind == 'Cloud Services'){
						// 				var clo = document.createElement('div');
						// 				clo.className = "clo";
						// 				clo.innerHTML = `<h3>${dataget.report.scanDetails[cl].kind}</h3>`;
						// 				document.body.appendChild(clo);
						// 				break;
						// 			}else{
						// 				console.log('no found cloud services...');
						// 			}
						// 		}

						// 		for(CLOUD=0;CLOUD<=92;CLOUD++){
						// 			if(dataget.report.scanDetails[CLOUD].kind == "Cloud Services"){
						// 				console.log(dataget.report.scanDetails[CLOUD].kind);
						// 				 var cloud = document.createElement('div');
						// 				 cloud.className = "cloud";
						// 				 cloud.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[CLOUD].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[CLOUD].description}</p>`; 
						// 				 document.body.appendChild(cloud);
						// 				}else{
						// 					console.log('no found cloud services...');
						// 				}
						// 		}


						// 		// code analysis heading

						// 		for(co=0;co<=92;co++){
						// 			if(dataget.report.scanDetails[co].kind == 'Code Analysis'){
						// 				var cod = document.createElement('div');
						// 				cod.className = "cod";
						// 				cod.innerHTML = `<h3>${dataget.report.scanDetails[co].kind}</h3>`;
						// 				document.body.appendChild(cod);
						// 				break;
						// 			}else{
						// 				console.log('no found code analysis...');
						// 			}
						// 		}

						// 		for(CODE=0;CODE<=92;CODE++){
						// 			if(dataget.report.scanDetails[CODE].kind == "Code Analysis"){
						// 				console.log(dataget.report.scanDetails[CODE].kind);
						// 				 var code = document.createElement('div');
						// 				 code.className = "code";
						// 				 code.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[CODE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[CODE].description}</p>`; 
						// 				 document.body.appendChild(code);
						// 				}else{
						// 					console.log('no found code analysis...');
						// 				}
						// 		}

						// 		// contacts heading

						// 		for(con=0;con<=92;con++){
						// 			if(dataget.report.scanDetails[con].kind == 'Contacts'){
						// 				var cont = document.createElement('div');
						// 				cont.className = "cont";
						// 				cont.innerHTML = `<h3>${dataget.report.scanDetails[con].kind}</h3>`;
						// 				document.body.appendChild(cont);
						// 				break;
						// 			}else{
						// 				console.log('no found contacts...');
						// 			}
						// 		}

						// 		for(CONTACTS=0;CONTACTS<=92;CONTACTS++){
						// 			if(dataget.report.scanDetails[CONTACTS].kind == "Contacts"){
						// 				console.log(dataget.report.scanDetails[CONTACTS].kind);
						// 				 var contacts = document.createElement('div');
						// 				 contacts.className = "contacts";
						// 				 contacts.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[CONTACTS].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[CONTACTS].description}</p>`; 
						// 				 document.body.appendChild(contacts);
						// 				}else{
						// 					console.log('no found contacts...');
						// 				}
						// 		}

						// 		// content heading

						// 		for(conte=0;conte<=92;conte++){
						// 			if(dataget.report.scanDetails[conte].kind == 'Content'){
						// 				var conten = document.createElement('div');
						// 				conten.className = "conten";
						// 				conten.innerHTML = `<h3>${dataget.report.scanDetails[conte].kind}</h3>`;
						// 				document.body.appendChild(conten);
						// 				break;
						// 			}else{
						// 				console.log('no found content...');
						// 			}
						// 		}

						// 		for(CONTENT=0;CONTENT<=92;CONTENT++){
						// 			if(dataget.report.scanDetails[CONTENT].kind == "Content"){
						// 				console.log(dataget.report.scanDetails[CONTENT].kind);
						// 				 var content = document.createElement('div');
						// 				 content.className = "content";
						// 				 content.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[CONTENT].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[CONTENT].description}</p>`; 
						// 				 document.body.appendChild(content);
						// 				}else{
						// 					console.log('no found content...');
						// 				}
						// 		}

						// 		// context heading

						// 		for(contex=0;contex<=92;contex++){
						// 			if(dataget.report.scanDetails[contex].kind == 'Context'){
						// 				var contexx = document.createElement('div');
						// 				contexx.className = "contexx";
						// 				contexx.innerHTML = `<h3>${dataget.report.scanDetails[contex].kind}</h3>`;
						// 				document.body.appendChild(contexx);
						// 				break;
						// 			}else{
						// 				console.log('no found context...');
						// 			}
						// 		}

						// 		for(CONTEXT=0;CONTEXT<=92;CONTEXT++){
						// 			if(dataget.report.scanDetails[CONTEXT].kind == "Context"){
						// 				console.log(dataget.report.scanDetails[CONTEXT].kind);
						// 				 var context = document.createElement('div');
						// 				 context.className = "context";
						// 				 context.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[CONTEXT].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[CONTEXT].description}</p>`; 
						// 				 document.body.appendChild(context);
						// 				}else{
						// 					console.log('no found context...');
						// 				}
						// 		}

						// 		// cryptography heading

						// 		for(cry=0;cry<=92;cry++){
						// 			if(dataget.report.scanDetails[contex].kind == 'Cryptography'){
						// 				var cryp = document.createElement('div');
						// 				cryp.className = "cryp";
						// 				cryp.innerHTML = `<h3>${dataget.report.scanDetails[cry].kind}</h3>`;
						// 				document.body.appendChild(cryp);
						// 				break;
						// 			}else{
						// 				console.log('no found context...');
						// 			}
						// 		}

						// 		for(CRYPTOGRAPHY=0;CRYPTOGRAPHY<=92;CRYPTOGRAPHY++){
						// 			if(dataget.report.scanDetails[CRYPTOGRAPHY].kind == "Cryptography"){
						// 				console.log(dataget.report.scanDetails[CRYPTOGRAPHY].kind);
						// 				 var cryptography = document.createElement('div');
						// 				 cryptography.className = "cryptography";
						// 				 cryptography.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[CRYPTOGRAPHY].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[CRYPTOGRAPHY].description}</p>`; 
						// 				 document.body.appendChild(cryptography);
						// 				}else{
						// 					console.log('no found context...');
						// 				}
						// 		}

						// 		// Data leakage heading

						// 		for(da=0;da<=92;da++){
						// 			if(dataget.report.scanDetails[da].kind == 'Data Leakage'){
						// 				var dat = document.createElement('div');
						// 				dat.className = "dat";
						// 				dat.innerHTML = `<h3>${dataget.report.scanDetails[da].kind}</h3>`;
						// 				document.body.appendChild(dat);
						// 				break;
						// 			}else{
						// 				console.log('no found data leakage...');
						// 			}
						// 		}

						// 		for(DATA=0;DATA<=92;DATA++){
						// 			if(dataget.report.scanDetails[DATA].kind == "Data Leakage"){
						// 				console.log(dataget.report.scanDetails[DATA].kind);
						// 				 var data = document.createElement('div');
						// 				 data.className = "data";
						// 				 data.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[DATA].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[DATA].description}</p>`; 
						// 				 document.body.appendChild(data);
						// 				}else{
						// 					console.log('no found data leakage...');
						// 				}
						// 		}

						// 		// Database heading

						// 		for(db=0;db<=92;db++){
						// 			if(dataget.report.scanDetails[db].kind == 'Database'){
						// 				var dba = document.createElement('div');
						// 				dba.className = "dba";
						// 				dba.innerHTML = `<h3>${dataget.report.scanDetails[db].kind}</h3>`;
						// 				document.body.appendChild(dba);
						// 				break;
						// 			}else{
						// 				console.log('no found database...');
						// 			}
						// 		}

						// 		for(DATABASE=0;DATABASE<=92;DATABASE++){
						// 			if(dataget.report.scanDetails[DATABASE].kind == "Database"){
						// 				console.log(dataget.report.scanDetails[DATABASE].kind);
						// 				 var database = document.createElement('div');
						// 				 database.className = "database";
						// 				 database.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[DATABASE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[DATABASE].description}</p>`; 
						// 				 document.body.appendChild(database);
						// 				}else{
						// 					console.log('no found database...');
						// 				}
						// 		}

						// 		// File System heading

						// 		for(fs=0;fs<=92;fs++){
						// 			if(dataget.report.scanDetails[fs].kind == 'File System'){
						// 				var fsystem = document.createElement('div');
						// 				fsystem.className = "fsystem";
						// 				fsystem.innerHTML = `<h3>${dataget.report.scanDetails[fs].kind}</h3>`;
						// 				document.body.appendChild(fsystem);
						// 				break;
						// 			}else{
						// 				console.log('no found file system...');
						// 			}
						// 		}

						// 		for(FILE=0;FILE<=92;FILE++){
						// 			if(dataget.report.scanDetails[FILE].kind == "File System"){
						// 				console.log(dataget.report.scanDetails[FILE].kind);
						// 				 var filesystem = document.createElement('div');
						// 				 filesystem.className = "filesystem";
						// 				 filesystem.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[FILE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[FILE].description}</p>`; 
						// 				 document.body.appendChild(filesystem);
						// 				}else{
						// 					console.log('no found filesystem...');
						// 				}
						// 		}

						// 		// fingerprint heading

						// 		for(fp=0;fp<=92;fp++){
						// 			if(dataget.report.scanDetails[fp].kind == 'Fingerprint'){
						// 				var fprint = document.createElement('div');
						// 				fprint.className = "fprint";
						// 				fprint.innerHTML = `<h3>${dataget.report.scanDetails[fp].kind}</h3>`;
						// 				document.body.appendChild(fprint);
						// 				break;
						// 			}else{
						// 				console.log('no found Fingerprint...');
						// 			}
						// 		}

						// 		for(FINGERPRINT=0;FINGERPRINT<=92;FINGERPRINT++){
						// 			if(dataget.report.scanDetails[FINGERPRINT].kind == "Fingerprint"){
						// 				console.log(dataget.report.scanDetails[FINGERPRINT].kind);
						// 				 var fingerprint = document.createElement('div');
						// 				 fingerprint.className = "fingerprint";
						// 				 fingerprint.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[FINGERPRINT].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[FINGERPRINT].description}</p>`; 
						// 				 document.body.appendChild(fingerprint);
						// 				}else{
						// 					console.log('no found Fingerprint...');
						// 				}
						// 		}

						// 		// hardware heading

						// 		for(h=0;h<=92;h++){
						// 			if(dataget.report.scanDetails[h].kind == 'Hardware'){
						// 				var ha = document.createElement('div');
						// 				ha.className = "ha";
						// 				ha.innerHTML = `<h3>${dataget.report.scanDetails[h].kind}</h3>`;
						// 				document.body.appendChild(ha);
						// 				break;
						// 			}else{
						// 				console.log('no found hardware...');
						// 			}
						// 		}

						// 		for(HARDWARE=0;HARDWARE<=92;HARDWARE++){
						// 			if(dataget.report.scanDetails[HARDWARE].kind == "Hardware"){
						// 				console.log(dataget.report.scanDetails[HARDWARE].kind);
						// 				 var hardware = document.createElement('div');
						// 				 hardware.className = "fingerprint";
						// 				 hardware.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[HARDWARE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[HARDWARE].description}</p>`; 
						// 				 document.body.appendChild(hardware);
						// 				}else{
						// 					console.log('no found hardware...');
						// 				}
						// 		}

						// 		// Markets heading

						// 		for(m=0;m<=92;m++){
						// 			if(dataget.report.scanDetails[m].kind == 'Markets'){
						// 				var ma = document.createElement('div');
						// 				ma.className = "ma";
						// 				ma.innerHTML = `<h3>${dataget.report.scanDetails[m].kind}</h3>`;
						// 				document.body.appendChild(ma);
						// 				break;
						// 			}else{
						// 				console.log('no found markets...');
						// 			}
						// 		}

						// 		for(MARKETS=0;MARKETS<=92;MARKETS++){
						// 			if(dataget.report.scanDetails[MARKETS].kind == "Markets"){
						// 				console.log(dataget.report.scanDetails[MARKETS].kind);
						// 				 var markets = document.createElement('div');
						// 				 markets.className = "markets";
						// 				 markets.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[MARKETS].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[MARKETS].description}</p>`; 
						// 				 document.body.appendChild(markets);
						// 				}else{
						// 					console.log('no found markets...');
						// 				}
						// 		}

						// 		// Mobile advertising heading

						// 		for(mo=0;mo<=92;mo++){
						// 			if(dataget.report.scanDetails[mo].kind == 'Mobile Advertising'){
						// 				var mob = document.createElement('div');
						// 				mob.className = "mob";
						// 				mob.innerHTML = `<h3>${dataget.report.scanDetails[mo].kind}</h3>`;
						// 				document.body.appendChild(mob);
						// 				break;
						// 			}else{
						// 				console.log('no found mobile advertising...');
						// 			}
						// 		}

						// 		for(MOBILE=0;MOBILE<=92;MOBILE++){
						// 			if(dataget.report.scanDetails[MOBILE].kind == "Mobile Advertising"){
						// 				console.log(dataget.report.scanDetails[MOBILE].kind);
						// 				 var mobile = document.createElement('div');
						// 				 mobile.className = "mobile";
						// 				 mobile.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[MOBILE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[MOBILE].description}</p>`; 
						// 				 document.body.appendChild(mobile);
						// 				}else{
						// 					console.log('no found mobile advertising...');
						// 				}
						// 		}

						// 		// network heading

						// 		for(n=0;n<=92;n++){
						// 			if(dataget.report.scanDetails[n].kind == 'Network'){
						// 				var ne = document.createElement('div');
						// 				ne.className = "ne";
						// 				ne.innerHTML = `<h3>${dataget.report.scanDetails[n].kind}</h3>`;
						// 				document.body.appendChild(ne);
						// 				break;
						// 			}else{
						// 				console.log('no found network...');
						// 			}
						// 		}

						// 		for(NETWORK=0;NETWORK<=92;NETWORK++){
						// 			if(dataget.report.scanDetails[NETWORK].kind == "Network"){
						// 				console.log(dataget.report.scanDetails[NETWORK].kind);
						// 				 var network = document.createElement('div');
						// 				 network.className = "network";
						// 				 network.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[NETWORK].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[NETWORK].description}</p>`; 
						// 				 document.body.appendChild(network);
						// 				}else{
						// 					console.log('no found network...');
						// 				}
						// 		}

						// 		// network security heading

						// 		for(nst=0;nst<=92;nst++){
						// 			if(dataget.report.scanDetails[nst].kind == 'Network Security'){
						// 				var ns = document.createElement('div');
						// 				ns.className = "ns";
						// 				ns.innerHTML = `<h3>${dataget.report.scanDetails[nst].kind}</h3>`;
						// 				document.body.appendChild(ns);
						// 				break;
						// 			}else{
						// 				console.log('no found network security...');
						// 			}
						// 		}

						// 		for(NETWORKs=0;NETWORKs<=92;NETWORKs++){
						// 			if(dataget.report.scanDetails[NETWORKs].kind == "Network Security"){
						// 				console.log(dataget.report.scanDetails[NETWORKs].kind);
						// 				 var networks = document.createElement('div');
						// 				 networks.className = "networks";
						// 				 networks.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[NETWORKs].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[NETWORKs].description}</p>`; 
						// 				 document.body.appendChild(networks);
						// 				}else{
						// 					console.log('no found network security...');
						// 				}
						// 		}

						// 		// package manager heading

						// 		for(pm=0;pm<=92;pm++){
						// 			if(dataget.report.scanDetails[pm].kind == 'Package Manager'){
						// 				var pma = document.createElement('div');
						// 				pma.className = "pma";
						// 				pma.innerHTML = `<h3>${dataget.report.scanDetails[pm].kind}</h3>`;
						// 				document.body.appendChild(pma);
						// 				break;
						// 			}else{
						// 				console.log('no found package manager...');
						// 			}
						// 		}

						// 		for(PACKAGE=0;PACKAGE<=92;PACKAGE++){
						// 			if(dataget.report.scanDetails[PACKAGE].kind == "Network Security"){
						// 				console.log(dataget.report.scanDetails[PACKAGE].kind);
						// 				 var package = document.createElement('div');
						// 				 package.className = "package";
						// 				 package.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[PACKAGE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[PACKAGE].description}</p>`; 
						// 				 document.body.appendChild(package);
						// 				}else{
						// 					console.log('no found package manager...');
						// 				}
						// 		}

						// 		// possible payload heading

						// 		for(pp=0;pp<=92;pp++){
						// 			if(dataget.report.scanDetails[pp].kind == 'Possible Payload'){
						// 				var ppl = document.createElement('div');
						// 				ppl.className = "ppl";
						// 				ppl.innerHTML = `<h3>${dataget.report.scanDetails[pp].kind}</h3>`;
						// 				document.body.appendChild(ppl);
						// 				break;
						// 			}else{
						// 				console.log('no found possible payload...');
						// 			}
						// 		}

						// 		for(POSSIBLE=0;POSSIBLE<=92;POSSIBLE++){
						// 			if(dataget.report.scanDetails[POSSIBLE].kind == "Possible Payload"){
						// 				console.log(dataget.report.scanDetails[POSSIBLE].kind);
						// 				 var possible = document.createElement('div');
						// 				 possible.className = "possible";
						// 				 possible.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[POSSIBLE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[POSSIBLE].description}</p>`; 
						// 				 document.body.appendChild(possible);
						// 				}else{
						// 					console.log('no found possible payload...');
						// 				}
						// 		}

						// 		// Security heading

						// 		for(s=0;s<=92;s++){
						// 			if(dataget.report.scanDetails[s].kind == 'Security'){
						// 				var se = document.createElement('div');
						// 				se.className = "se";
						// 				se.innerHTML = `<h3>${dataget.report.scanDetails[s].kind}</h3>`;
						// 				document.body.appendChild(se);
						// 				break;
						// 			}else{
						// 				console.log('no found security...');
						// 			}
						// 		}

						// 		for(SECURITY=0;SECURITY<=92;SECURITY++){
						// 			if(dataget.report.scanDetails[SECURITY].kind == "Security"){
						// 				console.log(dataget.report.scanDetails[SECURITY].kind);
						// 				 var security = document.createElement('div');
						// 				 security.className = "security";
						// 				 security.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[SECURITY].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[SECURITY].description}</p>`; 
						// 				 document.body.appendChild(security);
						// 				}else{
						// 					console.log('no found security...');
						// 				}
						// 		}


						// 		// Storage heading

						// 		for(st=0;st<=92;st++){
						// 			if(dataget.report.scanDetails[st].kind == 'Storage'){
						// 				var sto = document.createElement('div');
						// 				sto.className = "sto";
						// 				sto.innerHTML = `<h3>${dataget.report.scanDetails[st].kind}</h3>`;
						// 				document.body.appendChild(sto);
						// 				break;
						// 			}else{
						// 				console.log('no found storage...');
						// 			}
						// 		}

						// 		for(STORAGE=0;STORAGE<=92;STORAGE++){
						// 			if(dataget.report.scanDetails[STORAGE].kind == "Storage"){
						// 				console.log(dataget.report.scanDetails[STORAGE].kind);
						// 				 var storage = document.createElement('div');
						// 				 storage.className = "security";
						// 				 storage.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[STORAGE].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[STORAGE].description}</p>`; 
						// 				 document.body.appendChild(storage);
						// 				}else{
						// 					console.log('no found storage...');
						// 				}
						// 		}

						// 		// System heading

						// 		for(sy=0;sy<=92;sy++){
						// 			if(dataget.report.scanDetails[sy].kind == 'System'){
						// 				var sys = document.createElement('div');
						// 				sys.className = "sys";
						// 				sys.innerHTML = `<h3>${dataget.report.scanDetails[sy].kind}</h3>`;
						// 				document.body.appendChild(sys);
						// 				break;
						// 			}else{
						// 				console.log('no found system...');
						// 			}
						// 		}

						// 		for(SYSTEM=0;SYSTEM<=92;SYSTEM++){
						// 			if(dataget.report.scanDetails[SYSTEM].kind == "System"){
						// 				console.log(dataget.report.scanDetails[SYSTEM].kind);
						// 				 var system = document.createElement('div');
						// 				 system.className = "system";
						// 				 system.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[SYSTEM].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[SYSTEM].description}</p>`; 
						// 				 document.body.appendChild(system);
						// 				}else{
						// 					console.log('no found system...');
						// 				}
						// 		}

						// 		// telephony heading

						// 		for(t=0;t<=92;t++){
						// 			if(dataget.report.scanDetails[t].kind == 'Telephony'){
						// 				var te = document.createElement('div');
						// 				te.className = "te";
						// 				te.innerHTML = `<h3>${dataget.report.scanDetails[t].kind}</h3>`;
						// 				document.body.appendChild(te);
						// 				break;
						// 			}else{
						// 				console.log('no found Telephony...');
						// 			}
						// 		}

						// 		for(TELEPHONY=0;TELEPHONY<=92;TELEPHONY++){
						// 			if(dataget.report.scanDetails[TELEPHONY].kind == "Telephony"){
						// 				console.log(dataget.report.scanDetails[TELEPHONY].kind);
						// 				 var telephony = document.createElement('div');
						// 				 telephony.className = "telephony";
						// 				 telephony.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[TELEPHONY].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[TELEPHONY].description}</p>`; 
						// 				 document.body.appendChild(telephony);
						// 				}else{
						// 					console.log('no found system...');
						// 				}
						// 		}

						// 		// Vulnerability heading

						// 		for(v=0;v<=92;v++){
						// 			if(dataget.report.scanDetails[v].kind == 'Vulnerability'){
						// 				var vu = document.createElement('div');
						// 				vu.className = "vu";
						// 				vu.innerHTML = `<h3>${dataget.report.scanDetails[v].kind}</h3>`;
						// 				document.body.appendChild(vu);
						// 				break;
						// 			}else{
						// 				console.log('no found vulnerability...');
						// 			}
						// 		}

						// 		for(VULNERABILITY=0;VULNERABILITY<=92;VULNERABILITY++){
						// 			if(dataget.report.scanDetails[VULNERABILITY].kind == "Vulnerability"){
						// 				console.log(dataget.report.scanDetails[VULNERABILITY].kind);
						// 				 var vulnerability = document.createElement('div');
						// 				 vulnerability.className = "vulnerability";
						// 				 vulnerability.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[VULNERABILITY].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[VULNERABILITY].description}</p>`; 
						// 				 document.body.appendChild(vulnerability);
						// 				}else{
						// 					console.log('no found vulnerability...');
						// 				}
						// 		}

						// 		// webview heading

						// 		for(w=0;w<=92;w++){
						// 			if(dataget.report.scanDetails[w].kind == 'WebView'){
						// 				var wv = document.createElement('div');
						// 				wv.className = "wv";
						// 				wv.innerHTML = `<h3>${dataget.report.scanDetails[w].kind}</h3>`;
						// 				document.body.appendChild(wv);
						// 				break;
						// 			}else{
						// 				console.log('no found webview...');
						// 			}
						// 		}

						// 		for(WEB=0;WEB<=92;WEB++){
						// 			if(dataget.report.scanDetails[WEB].kind == "WebView"){
						// 				console.log(dataget.report.scanDetails[WEB].kind);
						// 				 var web = document.createElement('div');
						// 				 web.className = "web";
						// 				 web.innerHTML=`<h4 class='heading4'>${dataget.report.scanDetails[WEB].importance}</h4><p class='analysisparagrape'>${dataget.report.scanDetails[WEB].description}</p>`; 
						// 				 document.body.appendChild(web);
						// 				}else{
						// 					console.log('no found webview...');
						// 				}
						// 		}

						// 		// lower line page 6

						// var linelor3 = document.createElement('div');
						// linelor3.id="linelor3";
						// linelor3.style.width="1000px";
						// linelor3.style.height="2px";
						// linelor3.style.backgroundColor="rgb( 122, 120, 120 )";
						// document.body.appendChild(linelor3);

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






		
	</script>
</body>
</html>