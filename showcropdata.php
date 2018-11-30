<?php //แสดงข้อมูลแปลงเพาะปลูก

header("Content-Type: application/json; charset=UTF-8");

require_once("connect.php");

//$userData ='';
//$sql = "SELECT id, name, email, username, lastname, sex, address, vocation, telephone FROM members ";
//$record_id = $_GET['record_id'];
$mem_id = $_GET['mem_id'];
//$sql = "SELECT record_id,vegetable,breed,standard,transplant,DATE(record_date) as record_date  FROM recordcrop WHERE mem_id=".$mem_id;
$sql = "SELECT * FROM recordcrop WHERE mem_id=".$mem_id;
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