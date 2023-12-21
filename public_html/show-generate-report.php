<!doctype html>
<html>
<head>
	<title>show-generate-report</title>
</head>
<style>
	body{background: rgb( 18, 18, 19 );user-select: none;}
	#logo-name{margin-top: 0px;user-select: none;position: absolute;top:-10px;left: 16px;margin-bottom: 100px;font-size: 19px;font-family: cursive;}
	.ln{color:rgb( 198, 24, 7 , 1.0);font-weight: bolder;}
	#side{width:250px;height: 700px;margin-left: -10px;background: rgb(0,0,0,0.5);padding-top: 80px;box-shadow: 0px 8px 3px 0.1px rgb(  46, 41, 41 );}
	#top{width: 1670px;margin-top: -10px;margin-left: -10px;height: 0px;background: rgb(0,0,0,0.5);
		//box-shadow: 0px 60px 180px 1px whitesmoke;
		box-shadow: 0px 2px 3px 0.1px rgb( 46, 41, 41 );


	}
	span{
		color:whitesmoke;
		width: 150px;
		background: rgb( 56, 56, 56  );
		color: rgb( 124, 114, 112 );
		font-weight: lighter;
		padding: 10px 10px 10px 10px;
		border-top-right-radius: 5px;
		font-size: 11px;
		//border:1px solid rgb(  34, 33, 33 );
		box-shadow:  1px 1px 6px 0.1px rgb( 48, 43, 42 );
		user-select: none;
		display: block;
		margin-top:10px;
	}
	span:hover{
		//box-shadow: inset 1px 1px 2px 0.1px whitesmoke;
		border:1px solid rgb( 41, 37, 37 );
	}
	
	.firstbox{
		width:150px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:100px;
		left:300px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox1:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox2:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox3:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox4:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 75px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 12px;
	}
	.firstbox img{
		color:#fff;
		position: absolute;
		left: 14px;
		z-index: 10;
	}
	.firstbox::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate 3s linear infinite;
	}
	.firstbox::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox1{
		width:150px;
		height: 40px;
		background: rgb( 58, 56, 55  );
		position: absolute;
		top:100px;
		left:460px ;
		align-items: center;
		justify-content: center;
		display: flex;

		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox1::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate1 10s linear infinite;
	}
	.firstbox1::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate1{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox1 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 75px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 12px;
	}
	.firstbox1 img{
		color:#fff;
		position: absolute;
		left: 14px;
		z-index: 10;
	}
	.firstbox2{
		width:150px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:100px;
		left:620px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox2::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate2 10s linear infinite;
	}
	.firstbox2::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate2{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox2 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 75px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 12px;
	}
	.firstbox2 img{
		color:#fff;
		position: absolute;
		left: 14px;
		z-index: 10;
	}
	.firstbox3{
		width:160px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:100px;
		left:780px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox3::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate3 3s linear infinite;
	}
	.firstbox3::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate3{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox3 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 75px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 12px;
	}
	.firstbox3 img{
		color:#fff;
		position: absolute;
		left: 14px;
		z-index: 10;
	}
	.firstbox4{
		width:150px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:100px;
		left:950px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox4::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate4 3s linear infinite;
	}
	.firstbox4::after{
		content: '';
		position: absolute;
		inset: 4px;
		background:rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate4{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox4 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 75px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox4 img{
		color:#fff;
		position: absolute;
		left: 14px;
		z-index: 10;
	}
	.firstbox5{
		width:170px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:220px;
		left:300px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox5::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate5 4s linear infinite;
	}
	.firstbox5::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate5{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox5 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox5 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox5:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox6 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox6 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox6:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox6{
		width:170px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:220px;
		left:480px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox6::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate6 5s linear infinite;
	}
	.firstbox6::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate6{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox7{
		width:170px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:220px;
		left:660px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox7::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate3 3s linear infinite;
	}
	.firstbox7::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate7{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox7 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox7 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 39px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox7:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox8{
		width:170px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:220px;
		left:840px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox8::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate8 3s linear infinite;
	}
	.firstbox8::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate8{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox8 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox8 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox8:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox9{
		width:170px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:220px;
		left:1020px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox9::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate9 4s linear infinite;
	}
	.firstbox9::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate9{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox9 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox9 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox9:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox10{
		width:170px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:270px;
		left:300px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox10::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate10 5s linear infinite;
	}
	.firstbox10::after{
		content: '';
		position: absolute;
		inset: 1px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate10{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox10 img{
		color:#fff;
		position: absolute;
		left: 10px;
		z-index: 10;
	}
	.firstbox10 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 38px;
		z-index: 10;
		font-family: sans-serif;
		font-weight:lighter;
		font-size: 10px;
	}
	.firstbox10:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox11{
		width:170px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:270px;
		left:480px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox11 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox11 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox11::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate11 3s linear infinite;
	}
	.firstbox11::after{
		content: '';
		position: absolute;
		inset: 1px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate11{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox11:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox12{
		width:170px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:270px;
		left:660px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox12::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate12 3s linear infinite;
	}
	.firstbox12::after{
		content: '';
		position: absolute;
		inset: 2px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate12{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox12 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox12 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox12:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox13{
		width:170px;
		height: 40px;
		background: rgb( 58, 56, 55 );
		position: absolute;
		top:270px;
		left:840px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox13::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate13 4s linear infinite;
	}
	.firstbox13::after{
		content: '';
		position: absolute;
		inset: 1px;
		background: rgb( 58, 56, 55 );
		border-radius: 4px;
	}
	@keyframes animate13{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox13 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox13 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox13:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox14{
		width:200px;
		height: 110px;
		background: rgb(58, 56, 55);
		position: absolute;
		top:390px;
		left:300px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox14::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			//background: linear-gradient(#00cfff,#d400d4);
			//animation:animate14 5s linear infinite;
	}
	.firstbox14::after{
		content: '';
		position: absolute;
		inset: 1px;
		background: rgb(58, 56, 55);
		border-radius: 4px;
	}
	@keyframes animate14{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox14 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox14 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox14:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox15{
		width:200px;
		height: 110px;
		background: rgb(58, 56, 55);
		position: absolute;
		top:390px;
		left:510px ;
		align-items: center;
		justify-content: center;
		display: flex;
		overflow: hidden;
		border-radius: 4px;
	}
	.firstbox15::before{
		    content: '';
			position: absolute;
			width:40px;
			height: 240px;
			background: linear-gradient(#00cfff,#d400d4);
			//animation:animate15 3s linear infinite;
	}
	.firstbox15::after{
		content: '';
		position: absolute;
		inset: 1px;
		background: rgb(58, 56, 55);
		border-radius: 4px;
	}
	@keyframes animate15{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox15 img{
		color:#fff;
		position: absolute;
		left: 12px;
		z-index: 10;
	}
	.firstbox15 h6{
		color:#fff;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: lighter;
		font-size: 10px;
	}
	.firstbox15:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	#na ul{
		position: absolute;
		z-index: 2;
		top:380px;
		left: 300px;
		font-size: 12px;
		color: whitesmoke;
	}
	#na1 ul{
		position: absolute;
		z-index: 2;
		top:380px;
		left: 510px;
		font-size: 12px;
		color: whitesmoke;
	}
	#singlefile{
		background: rgb( 69, 69, 69 );
		border-radius: 3px;
		box-shadow: 0px 0px 4px 0.1px rgb( 47, 47, 47 );
		position: absolute;
		top:60px;
		left: 280px;
		width: 930px;
		height: 100px;
	}
	#twofile{
		background: rgb( 69, 69, 69 );
		border-radius: 3px;
		box-shadow: 0px 0px 4px 0.1px rgb( 47, 47, 47 );
		position: absolute;
		top:170px;
		left: 280px;
		width: 930px;
		height: 170px;
	}
	#threefile{
		background: rgb( 69, 69, 69 );
		border-radius: 3px;
		box-shadow: 0px 0px 4px 0.1px rgb( 47, 47, 47 );
		position: absolute;
		top:350px;
		left: 280px;
		width: 930px;
		height: 170px;
	}
	a{
		text-decoration: none;
	}
</style>
<body>
	<div id="logo-name"><h1 class="ln">RGBitdefender</h1></div>
	<div id="top"></div>
	<div id="side">
		<a href="http://localhost/projectre001/php/configuration.php"><span>configuration</span></a>
		<span>Upload file</span>
		<span>Show folder</span>
		<span>Create report</span>
		<a href="http://localhost/projectre001/php/examiner_details_get.php"><span>show details</span></a>
		<a href="upload_file.php"><span>Advance report</span></a>
	</div>
	<div id="singlefile"><h5 style="position: absolute;top:-10px;left: 10px;font-family: sans-serif;color: rgb( 38, 36, 36);">Single File Report Generate<h5></div>
	<div id="twofile"><h5 style="position: absolute;top:-10px;left: 10px;font-family: sans-serif;color: rgb( 38, 36, 36);">2-File Merge Report Generate<h5></div>
	<div id="threefile"><h5 style="position: absolute;top:-10px;left: 10px;font-family: sans-serif;color: rgb( 38, 36, 36);">3-File Merge Report Generate<h5></div>
	<a href="http://localhost/projectre001/upload_file.php"><div class="firstbox">
		<img src="http://localhost/projectre001/image/email/previews/preview.png" width="32px" height="32px" />
		<h6>Email</h6>
	</div></a>

	<a href="http://localhost/projectre001/upload_file.php"><div class="firstbox1">
		<img src="http://localhost/projectre001/image/getapp/previews/getapps.png" width="32px" height="32px" />
		<h6>Getapps</h6>
	</div></a>

	<a href="http://localhost/projectre001/upload_file.php"><div class="firstbox2">
		<img src="http://localhost/projectre001/image/spotify/previews/spotify.png" width="32px" height="32px" />
		<h6>Spotify</h6>
	</div></a>

	<a href="http://localhost/projectre001/upload_file.php"><div class="firstbox3">
		<img src="http://localhost/projectre001/image/WIFI/previews/wifi.png" width="32px" height="32px" />
		<h6>wifipassword<br>cracker</h6>
	</div></a>

	<a href="http://localhost/projectre001/upload_file.php">
	<div class="firstbox4">
		<img src="http://localhost/projectre001/image/skyscanner/previews/skyscanner.png" width="32px" height="32px" />
		<h6>Sky Scanner</h6>
	</div></a>
	
	<a href="http://localhost/projectre001/LOGIN/testmergefile2.php"><div class="firstbox5">
		<img src="http://localhost/projectre001/image/skyscanner/previews/skyscanner.png" width="25px" height="25" />
		<h6>sky scanner/email</h6>
		<img src="http://localhost/projectre001/image/email/previews/preview.png" width="25" height="25" style="position: relative;top:0px;left: 70px;" />
	</div></a>
	<a href="http://localhost/projectre001/LOGIN/testmergefile2.php"><div class="firstbox6">
		<img src="http://localhost/projectre001/image/skyscanner/previews/skyscanner.png" width="25px" height="25" />
		<h6>sky scanner/wifipc</h6>
		<img src="http://localhost/projectre001/image/WIFI/previews/wifi.png" width="25" height="25" style="position: relative;top:0px;left: 70px;" />
	</div></a>
	<a href="http://localhost/projectre001/LOGIN/testmergefile2.php"><div class="firstbox7">
		<img src="http://localhost/projectre001/image/skyscanner/previews/skyscanner.png" width="25px" height="25" />
		<h6>sky scanner/getapps</h6>
		<img src="http://localhost/projectre001/image/getapp/previews/getapps.png" width="25" height="25" style="position: relative;top:0px;left: 75px;" />
	</div></a>
	<a href="http://localhost/projectre001/LOGIN/testmergefile2.php"><div class="firstbox8">
		<img src="http://localhost/projectre001/image/getapp/previews/getapps.png" width="25px" height="25" />
		<h6>getapps/wifipc</h6>
		<img src="http://localhost/projectre001/image/WIFI/previews/wifi.png" width="25" height="25" style="position: relative;top:0px;left:70px;" />
	</div></a>
	<a href="http://localhost/projectre001/LOGIN/testmergefile2.php"><div class="firstbox9">
		<img src="http://localhost/projectre001/image/getapp/previews/getapps.png" width="25px" height="25" />
		<h6>getapps/wifipc</h6>
		<img src="http://localhost/projectre001/image/spotify/previews/spotify.png" width="25" height="25" style="position: relative;top:0px;left:70px;" />
	</div></a>
	<a href="http://localhost/projectre001/LOGIN/testmergefile2.php"><div class="firstbox10">
		<img src="http://localhost/projectre001/image/getapp/previews/getapps.png" width="25px" height="25" />
		<h6>getapps/skyscanner</h6>
		<img src="http://localhost/projectre001/image/skyscanner/previews/skyscanner.png" width="25" height="25" style="position: relative;top:0px;left:70px;" />
	</div></a>
	<a href="http://localhost/projectre001/LOGIN/testmergefile2.php"><div class="firstbox11">
		<img src="http://localhost/projectre001/image/getapp/previews/getapps.png" width="25px" height="25" />
		<h6>getapps/email</h6>
		<img src="http://localhost/projectre001/image/email/previews/preview.png" width="25" height="25" style="position: relative;top:0px;left:70px;" />
	</div></a>
	<a href="http://localhost/projectre001/LOGIN/testmergefile2.php"><div class="firstbox12">
		<img src="http://localhost/projectre001/image/spotify/previews/spotify.png" width="25px" height="25" />
		<h6>spotify/wifipc</h6>
		<img src="http://localhost/projectre001/image/WIFI/previews/wifi.png" width="25" height="25" style="position: relative;top:0px;left:70px;" />
	</div></a>
	<a href="testmergefile2.php"><div class="firstbox13">
		<img src="http://localhost/projectre001/image/spotify/previews/spotify.png" width="25px" height="25" />
		<h6>spotify/getapps</h6>
		<img src="http://localhost/projectre001/image/getapp/previews/getapps.png" width="25" height="25" style="position: relative;top:0px;left:70px;" />
	</div></a>
	<div class="firstbox14">
		<img src="http://localhost/projectre001/image/spotify/previews/spotify.png" width="25px" height="25"style="position: absolute;top: 10px;left: 10px;" />
		<img src="http://localhost/projectre001/image/WIFI/previews/wifi.png" width="25" height="25" style="position: absolute;top:40px;left:10px;" />
		<img src="http://localhost/projectre001/image/email/previews/preview.png" width="25" height="25" style="position: absolute;top:70px;left:10px;" />
	</div>
	<div class="firstbox15">
		<img src="http://localhost/projectre001/image/skyscanner/previews/skyscanner.png" width="25px" height="25" style="position:absolute;top: 10px;left: 10px;" />
		<img src="http://localhost/projectre001/image/spotify/previews/spotify.png" width="25px" height="25" style="position:absolute;top:40px;left:10px;" />
		<img src="http://localhost/projectre001/image/getapp/previews/getapps.png" width="25" height="25" style="position: absolute;top:70px;left:10px;" />

	</div>
	<div id="na">
		<ul>
			<li style="padding: 10px;"><i>spotify</i></li>
			<li style="padding:10px;"><i>wifi password cracker</i></li>
			<li style="padding:5px 10px 5px 10px;"><i>email</i></li>
		</ul>
	</div>
	<div id="na1">
		<ul>
			<li style="padding: 10px;"><i>skyscanner</i></li>
			<li style="padding:10px;"><i>spotify</i></li>
			<li style="padding:5px 10px 5px 10px;"><i>getapps</i></li>
		</ul>
	</div>
</body>
</html>