<?php

header("Content-Type: application/json; charset=UTF-8");

require_once("connect.php");

//$userData ='';
//$sql = "SELECT id, name, email, username, lastname, sex, address, vocation, telephone FROM members ";
$ad_id = $_GET['ad_id'];
$sql = "SELECT * FROM admin WHERE  ad_id=".$ad_id;
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