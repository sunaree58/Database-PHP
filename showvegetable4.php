<?php

header("Content-Type: application/json; charset=UTF-8");

require_once("connect.php");


//$crop_id = $_GET['crop_id'];
$sql = "SELECT * FROM vegetable WHERE veg_id=4";
$result = mysqli_query($conn , $sql);

if(mysqli_num_rows($result) > 0)
{
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
}
else
{
echo json_decode("0 result");
}

$conn->close();



?> 