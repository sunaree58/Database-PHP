<?php

require_once("connect.php");

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

    //$mem_id = $_GET['mem_id'];
    $id         = $_GET['record_id'];
    $vegetable  = $_POST["vegetable"];
    $breed      = $_POST["breed"];
    $standard   = $_POST["standard"];
    $tran       = $_POST["tran"];
    $tablewah   = $_POST["tablewah"];



$sql ="UPDATE recordcrop SET vegetable='$vegetable', breed ='$breed',standard='$standard' 
    ,transplant='$tran', tablewah='$tablewah' WHERE record_id='$id'";

    if ($conn->query($sql) === TRUE){
    $outp = "Update " . $sql . "" ;
    echo json_encode($outp);

    }

$conn->close();

?>
