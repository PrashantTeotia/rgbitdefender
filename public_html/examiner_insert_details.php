
<?php
// $e = $_POST['examiner'];
// $casefolder = $_POST['casefolder'];
// $fir = $_POST['fir'];
// $destination = $_POST['destination'];
// $date = $_POST['date'];
if($_SERVER['REQUEST_METHOD']=='POST'){
 	$examiner = $_POST['examiner'];
	$casefolder = $_POST['casefolder'];
	//echo $casefolder;
 	$fir = $_POST['fir'];
	//echo $fir;
 	$destination = $_POST['destination'];
 	//echo $destination;
 	$date = $_POST['date'];
 	//echo $date;
 	$file = $_FILES['image'];
 	//echo "ok";
 	$filename = $file['name'];
 	$fullpath = $file['full_path'];
 	$filetype = $file['type'];
 	$tempname = $file['tmp_name'];
 	$filesize = $file['size'];
 	echo $filename;
 $conn = mysqli_connect("localhost","prashant","prashant1234567890@!#$","exminerdetails") or die("connect error !!!");
 if(!$conn){
	die("sorry we failed to Connection:".mysqli_connect_error());
 }else{
 	echo "Connection was successful<br>";
 }
$que = "INSERT INTO `examinertable`( `examiner`, `casefolder`, `fir`, `destination`, `date`, `filname`, `filefullpath`, `filetype`, `filetempname`, `filesize`) VALUES ('$examiner','$casefolder','$fir','$destination','$date','$filename','$fullpath','$filetype','$tempname','$filesize')";
 $result = mysqli_query($conn,$que);

 if($result){
 	echo " The record has been inserted successfully <br>";
 }else{
 	echo "The record was not inserted successfully because of this error --->".mysqli_error($conn);
 }


}
?>