<?php

require_once("connect.php");

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

    //$mem_id = $_GET['mem_id'];
    $crop_id           = $_GET['crop_id'];
    $plantingactivity  = $_POST["c1"];
    $expenses      = $_POST["c2"];
    $date          = $_POST["myDate"];
    $revenue       = $_POST["c3"];
    



$sql ="UPDATE cropdatail SET plantingactivity='$plantingactivity', expenses ='$expenses',date='$date' 
    ,revenue='$revenue' WHERE crop_id='$crop_id'";

    if ($conn->query($sql) === TRUE){
    $outp = "Update " . $sql . "" ;
    echo json_encode($outp);

    }

$conn->close();

?>