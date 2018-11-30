<?php

require_once("connect.php");


$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

//$record_id =  =$_GET['record_id'];
$crop_id =$_GET['crop_id'];

$sql = 'DELETE FROM cropdatail WHERE crop_id="' . $crop_id .'"';


if($conn->query($sql) === TRUE)
{
    $outp = "Deleted " .$crop_id;
    echo json_encode($outp);
}
else
{
   echo json_encode("Error" . $conn->error);
}
 
$conn->close();

?>