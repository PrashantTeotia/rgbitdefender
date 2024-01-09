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
        <title>Fill Report information</title>
        <style>
            body{user-select:none;}
            h1{color:white;}
            h3{text-decoration:underline;}
            body{background-image:url('software-images/pexels-pixabay-357514.jpg');background-size:100% 180%;  background-repeat: no-repeat;}
        form{font-size:13px;font-family:arial;background-color:rgba(168, 168, 168,0.5);border:1px solid #b7b7b7;padding:20px;width:1000px;border-top-left-radius:10px;border-top-right-radius:10px;margin-left:10%;margin-top:10%;box-shadow:inset 0px 0px 200px 1px rgb(227, 222, 222);}
        label{margin-left:10px;}
        img{position:absolute;top:35%;left:68%;}
        #logoimagei{position: absolute;top: 70%;left:940px;}
        #logoimage{position: absolute;top:70%;left:854px;}
        input{border-radius:4px;border-top:1px solid grey;box-shadow:inset 0px 2px 10px 1px rgb(155, 155, 155);color:rgb(3, 145, 32);}
        footer{text-align:center;}
        #reset{font-family:arial;padding:5px 20px;}
    </style>
    </head>
<body>
    <h1><?php include 'softwarename.php';?></h1>
    <form action="#"  enctype="multipart/form-data">
        <h3>Report Details</h3>
        <label for="caseid">Case Id</label>
        <input type="number" name="caseid" id="caseid"/>
        <label for="jsonfile">Select json file</label>
        <input type="file" name="jsonfile" id="jsonfile"/><br><br>
        <label for="examiner">Examiner</label>
        <input type="text" name="examiner" id="examiner"/>
        <label for="casetype">Case Type</label>
        <input type="text" name="casetype" id="casetype"/><br><br>
        <label for="date">Date</label>
        <input type="date" name="date" id="date"/>
        <label for="time">Time</label>
        <input type="time" name="time" id="time"/><br><br>
        <label for="fir">Complaint/F.I.R</label>
        <input type="text" name="fir" id="fir"/>
        <label for="evidence">Evidence description</label>
        <input type="text" name="evidence"/><br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address"/><br><br>
        <img width="200px" height="200px" id="logo"/>
        <label id="logoimage" for="file">Select logo</label>
        <input type="file" name="logoimage" id="logoimagei"/>
        <button type="submit">SUBMIT</button><br><br><br><br>
        <hr>
        <footer><button id="reset" type="reset">reset</button>&nbsp;&nbsp;<i>Back</i></footer>
    </form>
</body>
</html>