<?php
include "connect.php";

//$record_id =$_GET['record_id'];
$record_id = $_REQUEST['record_id'];

//echo "SQL WHERE record_id = " . $record_id;
?>

<meta http-equiv ="Content-Type" content="text/html;"charset=utf-8"/>

<table width="70%" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="30" style="font-weight:bold; text-align:center;"> ชื่อผู้เพาะปลูก </td>
        <td style="font-weight:bold; text-align:center;"> นามสกุล </td>
        <td style="font-weight:bold; text-align:center;"> ที่อยู่ </td>
        <td style="font-weight:bold; text-align:center;"> เบอร์ติดต่อ </td>
        <td style="font-weight:bold; text-align:center;"> ชื่อผัก </td>
        <td style="font-weight:bold; text-align:center;"> ได้รับมาตราฐาน </td>
        <td style="font-weight:bold; text-align:center;"> กิจกรรมการเพาะปลูก </td>
        <td style="font-weight:bold; text-align:center;"> วันที่ </td>
    </tr>
<?php
  $sql="SELECT m.mem_name,m.mem_lastname,m.mem_address,m.mem_tel, r.vegetable, r.standard, c.date, c.plantingactivity 
  FROM recordcrop r 
  INNER JOIN cropdatail c 
  ON r.record_id = c.record_id 
  INNER JOIN member m 
  ON r.mem_id = m.mem_id
  WHERE  r.record_id = '$record_id'";
  
   //echo $sql; //ใช้ดีบักค่าออกมาดู
  // exit(0);
  $query=mysqli_query($conn,$sql); 

  while ($data= mysqli_fetch_array($query)) {
      # code...

  ?>
  <tr>
  <td height="34"  style="text-align:center;"> <?php echo $data['mem_name']?></td>
  <td style="text-align:center;"> <?php echo $data['mem_lastname']?></td>
  <td style="text-align:center;"> <?php echo $data['mem_address']?> </td>
  <td style="text-align:center;"> <?php echo $data['mem_tel']?> </td>
  <td style="text-align:center;"> <?php echo $data['vegetable']?> </td>
  <td style="text-align:center;"> <?php echo $data['standard']?> </td>
  <td style="text-align:center;"> <?php echo $data['plantingactivity']?> </td>
  <td style="text-align:center;"> <?php echo $data['date']?> </td>
</tr>
<?php
  }
?>
</table>
<?php mysqli_close($conn);?>


