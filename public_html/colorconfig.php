<?php
$server="localhost";
$username="prashant";
$pass="prashant1234567890@!#$";
$database="report";
$conn = mysqli_connect($server,$username,$pass,$database);
if(!$conn){
	die("server connection field".mysqli_connect_error());
}
?>
<!doctype html>
<html>
    <head>
        <title>update</title>
        <style>.upc{border:1px solid grey;width:200px;height:250px;padding:5%;margin:10% 10% 10% 35%;border-radius:1%;background-color:rgb(160,160,160);font-family:arial;}</style>
    </head>
    <body>
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $idsoft = $_POST['idsoft'];
            $color = $_POST['softwarecolor'];
            $setsoftware = $_POST['softwarebgcolor'];
            $upsql = "UPDATE `config01` SET `softwarecolor`='$color',`softwarebgcolor`='$setsoftware' WHERE `id`='$idsoft'";
            $res = mysqli_query($conn,$upsql);
            if($idsoft>0 && $res){
                echo "<b style='color:lightgreen;'>updated</b>";
            }else{
                echo "<b style='color:red;'>not updated</b>";
            }
        }
        ?>
        <div class="upc">
            <form action="colorconfig.php" method="POST">
                <label for="idsoft">Id:</label><br>
                <input type="number" placeholder="enter id" id="idsoftware"  name="idsoft"/><br><br>
                <label for="softwarecolor">Software Color:</label><br>
                <input type="color" placeholder="enter id" id="softwarecolor"  name="softwarecolor"/><br><br>
                <label for="softwarecolor">Software bgcolor :</label><br>
                <input type="color" placeholder="bgcolor software " name="softwarebgcolor"/><br><br>
                <button id="update">Update</button>
            </form>
        </div>
    </body>
</html>