<?php

require_once("connect.php");

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

$mem_id    = $_GET['mem_id'];
$name      = $_POST["name"];
$lastname  = $_POST["lastname"];
//$sex       = $_POST["sex"];
$address   = $_POST["address"];
//$vocation  = $_POST["vocation"];
$telephone = $_POST["telephone"];
$email     = $_POST["email"];


$sql ="UPDATE member SET mem_name='$name', mem_lastname ='$lastname',mem_address='$address' 
    ,mem_tel='$telephone', mem_email='$email' WHERE mem_id='$mem_id'";

    if ($conn->query($sql) === TRUE){
    $outp = "Update " . $sql . "" ;
    echo json_encode($outp);

    }

$conn->close();

?>

