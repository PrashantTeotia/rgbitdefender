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
	:root{
		--main-background:rgb(247,247,247);
	}
	body{
    /*background: rgb( 18, 18, 19 );*/
    background: rgb(255, 255, 255);
		user-select: none;
	}
	#logo-image{position:absolute;top:-10px;left:-200px;border-radius:100%;width:100px;height: 100px;background-color:rgb(210, 210, 210);box-shadow:3px 3px 2px  1px rgb(145, 145, 145); z-index: 1;}
	#logo-image1{position:absolute;top:0px;left:-189px;border-radius:100%;width:80px;height: 80px;background-color:rgb(210, 210, 210);box-shadow:inset -1px -1px 1px 0px rgb(255, 255, 255),inset 1px 1px 1px 0px rgb(149, 144, 144); z-index: 2;}
	#logo-name{
		margin-top: 0px;
		user-select: none;
		position: absolute;
		top:-10px;
		left: 16px;
		margin-bottom: 100px;
		font-size: 12px;
		font-family: cursive;
	}
	.ln{
		color:rgb( 198, 24, 7 , 1.0);
		font-weight: bolder;

	}
	#side{
		width:250px;
		height: 500px;
		margin-left: -10px;margin-top: -10px;
		border:1px solid #a4a4a4;
		z-index: 1;
		background: rgb(240, 240, 240);
		padding-top: 146px;
		box-shadow: 0px 8px 30px 0.1px rgb(255, 255, 255);
	}
	#top{
		width: 1020px;
		margin-top: 4px;
		margin-left: 0px;
		height: 0px;
		position: absolute;
		left:252px;
		background: rgb(246,245,245);
/*		box-shadow: 0px 60px 180px 1px whitesmoke;*/
		box-shadow: 0px 1px 2px 0.1px rgb( 46, 41, 41 );


	}
	span{
		width: 196px;
		text-align: center;
		background: rgb(230, 230, 230);
		color: rgb( 113,105 ,105);
		font-weight: bolder;
		border:1px solid #b0b0b0;
		margin-left:16px;
		font-family: sans-serif;
		padding: 10px 10px 10px 10px;
		border-top-right-radius: 5px;
		font-size: 11px;
/*		//border:1px solid rgb(  34, 33, 33 );*/
		box-shadow:  0px 0px 0px 0px rgb( 48, 43, 42 );
		user-select: none;
		display: block;
		margin-top:10px;
	}
	span:hover{
		box-shadow: inset 1px 1px 2px 0.1px whitesmoke;
/*		border:1px solid rgb( 41, 37, 37 );*/
	}
	
	.firstbox{
		width:150px;
		height: 40px;
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
		position: absolute;
		top:400px;
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
		color:#575353;
		text-align: center;
		position: absolute;
		left: 75px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: bolder;
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
			border:1px solid grey;
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
		border:1px solid grey;
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
		border-radius: 4px;
	}
	@keyframes animate{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox1{
		width:150px;
		height: 40px;
/*		background: rgb( 58, 56, 55  );*/
background: var(--main-background);
		position: absolute;
		top:400px;
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
		border:1px solid grey;
		inset: 2px;
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
		border-radius: 4px;
	}
	@keyframes animate1{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox1 h6{
		color:#575353;
		text-align: right;
		position: absolute;
		left: 75px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: bolder;
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
		background: rgb(228,238,228);
/*background: var(--main-background);*/
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background:rgb( 58, 56, 55 );*/
background: var(--main-background);
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
		width:117px;
		height: 40px;
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
		position: absolute;
		top:510px;
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
		border:1px solid grey;
		text-align:center;
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
		color:#575353;
		text-align: center;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: bolder;
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
		color:#575353;
		text-align: right;
		position: absolute;
		left: 45px;
		z-index: 10;
		font-family: sans-serif;
		font-weight: bolder;
		font-size: 10px;
	}
	.firstbox6:hover{
		box-shadow: 0px 0px 4px 0.1px whitesmoke;
	}
	.firstbox6{
		width:170px;
		height: 40px;
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
		position: absolute;
		top:510px;
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
/*		background: rgb( 58, 56, 55 );*/
		background: var(--main-background);
		border-radius: 4px;
	}
	@keyframes animate6{
		0%{transform: rotate(0deg);}
		100%{transform: rotate(350deg);}
	}
	.firstbox7{
		width:170px;
		height: 40px;
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/background: var(--main-background);
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
/*		background: rgb( 58, 56, 55 );*/
background: var(--main-background);
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
/*		background: rgb(58, 56, 55);*/
background: var(--main-background);
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
/*		background: rgb(58, 56, 55);*/background: var(--main-background);
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
/*		background: rgb( 69, 69, 69 );*/
background: rgb(249, 249, 249);
		border-radius: 3px;
		box-shadow: 0px 0px 0px 1px rgb(227, 227, 227);
		position: absolute;
		top:360px;
		left: 280px;
		width: 400px;
		height: 100px;
	}
	#twofile{
/*		background: rgb( 69, 69, 69 );*/
background: rgb(249, 249, 249);
		border-radius: 3px;
		box-shadow: 0px 0px 0px 1px rgb(227, 227, 227);
		position: absolute;
		top:470px;
		left: 280px;
		width: 400px;
		height: 100px;
	}
	h5{font-size: 12px;}
	a{
		text-decoration: none;
	}
	.demo-pdf{position: absolute;top:310px;left:300px;color:#df3737;font-family: sans-serif;font-size: 9px;text-shadow: 2px 2px 4px grey;}
	#dashboard{width:1030px;background:rgba(238, 233, 233);height: 260px;position: absolute;top:50px;left:270px;box-shadow: 0px 0px 0px 1px #dbdbdb;border-radius: 5px;}
	.box1{margin:10px; text-align: center;width:200px;font-family: sans-serif;font-size: 11px;font-weight: bolder;}
	.accountinformation{width:200px;height: 10px;border-radius: 4px;background-color: rgb(196, 193, 193);margin:10px;}
	.accountinformation1{width:120px;height: 8px;border-radius: 4px;background-color: rgb(  248, 55, 28  );margin-top: 1px;box-shadow: 0px 0px 6px 0.1px rgb( 255, 31, 0 )}
	.percentage{line-height: 21px;}
/*	#demo{position: absolute;top:30px;left:270px;width:60%;height:95%;background: rgb( 246, 245, 245 );box-shadow: 0px 0px 3px 0.1px rgb(  46, 41, 41 );}*/
/*	svg circle{ fill:red; }*/
#info{width: 600px;height: 270px;background:rgb(242,242,242);border-radius:6px;position: absolute;top:278px;left:430px;box-shadow: 0px 0px 0px 1px #f4f4f4;border:1px solid grey;}
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
	<!-- 	<span>Show folder</span>
		<span>Create report</span> -->
		<a href="examiner_details_get.php"><span>Details</span></a>
		<a href="upload_file.php"><span>Advance report</span></a>
	</div>
	<div class="demo-pdf"><h1>Demo PDF</h1></div>
	<div id="singlefile"><h5 style="position: absolute;top:-10px;left: 10px;font-family: sans-serif;color: rgb( 38, 36, 36);">Single File Report Generate<h5></div>
	<div id="twofile"><h5 style="position: absolute;top:-10px;left: 10px;font-family: sans-serif;color: rgb( 38, 36, 36);">2-File Merge Report Generate<h5></div>
	<!-- <div id="threefile"><h5 style="position: absolute;top:-10px;left: 10px;font-family: sans-serif;color: rgb( 38, 36, 36);">3-File Merge Report Generate<h5></div> -->
	<a href="upload_file.php"><div class="firstbox">
		<!-- <img src="upload-images/email.png" width="25px" height="25px" style="border-radius:5px;" /> -->
		<h6>Click</h6>
	</div></a>	
	<a href="testmergefile2.php"><div class="firstbox5">
		<!-- <img src="upload-images/skyscanner.png" width="22px" height="22" style="border-radius:5px;" /> -->
		<h6>Click</h6>
		<!-- <img src="upload-images/email.png" width="22" height="22" style="position: relative;top:0px;left: 70px;border-radius:5px;" /> -->
	</div></a>
	<div id="dashboard">
		<div class="box1">
			<label>Account</label>
			<div class="accountinformation">
			<div class="accountinformation1"></div>
			<label class="percentage">60%</label>
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
		//console.log(rb);
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
		  //var softupdate = 10;
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
		  //var softupdate = 10;
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