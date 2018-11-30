<?php

require_once("connect.php");


$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

$id = $_GET["record_id"];
//$crop_id = $_GET['crop_id'];




$sql = 'DELETE FROM recordcrop WHERE record_id="' . $id .'"';


if($conn->query($sql) === TRUE)
{
    $outp['status'] = "Deleted " . $id ;
    echo json_encode($outp);
}
else
{
   echo json_encode("Error" . $conn->error);
}
 
$sql1 = 'DELETE FROM cropdatail WHERE record_id="' . $id .'"';

  if($conn->query($sql1) === TRUE)
{
   // $outp = "Deleted " . $id ;
    //echo json_encode($outp);
}


$conn->close();

?>