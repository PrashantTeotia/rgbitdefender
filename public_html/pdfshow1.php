<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $file = $_FILES['file'];
    $data = $file['name'];
    //echo $data;
    // print_r($file['name']);
    // $data = file_get_contents('upload-file/'.$file['name']);
    // $data =json_decode($data,JSON_FORCE_OBJECT);
    // // echo "<pre>";
    // // print_r($data);
    // // echo "</pre>";

}
echo $data;

?>