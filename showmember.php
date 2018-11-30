<?php

header("Content-Type: application/json; charset=UTF-8");

require_once("connect.php");

//$userData ='';
//$sql = "SELECT id, name, email, username, lastname, sex, address, vocation, telephone FROM members ";
$mem_id = $_GET['mem_id'];
$sql = "SELECT * FROM member WHERE  mem_id=".$mem_id;
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