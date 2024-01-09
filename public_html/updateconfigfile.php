<?php
$server="localhost";
$username="prashant";
$pass="prashant1234567890@!#$";
$database="report";
$conn = mysqli_connect($server,$username,$pass,$database);
if(!$conn){
	die("server connection field".mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $idnumber = $_POST['idsoftware'];
    $setsoftware = $_POST['softwarename'];
    $upsql = "UPDATE `config01` SET `softwarename`='$setsoftware' WHERE id='$idnumber'";
    $res = mysqli_query($conn,$upsql);
    if($res){
        echo "<b style='color:lightgreen;'>updated</b>";
    }else{
        echo "<b style='color:red;'>not updated</b>";
    }
}
?>

<!doctype html>
<html>
    <head>
        <title>update</title>
        <style>.form{border:1px solid grey;width:200px;padding:5%;margin:10% 10% 3% 38%;background:rgb(244, 241, 241);border-radius:1%;}</style>
    </head>
    <body>
        <div class="form">
            <form action="updateconfigfile.php" method="POST">
                <label for="idsoftware">Id:</label><br>
                <input type="number" placeholder="enter id" id="idsoftware"  name="idsoftware"/><br><br>
                <label for="softwarename">Software Name :</label><br>
                <input type="text" placeholder="set software name" name="softwarename"/><br><br>
                <button id="update">Update</button><br><br>
                <div><a href="colorconfig.php">Software color update</a></div>
            </form>
        </div>
    </body>
</html>