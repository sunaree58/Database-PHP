<?php
     
     require_once("connect.php");

     $rest_json = file_get_contents("php://input");
     $getdata = json_decode($rest_json); 
     
     $username = $getdata->username;
     $password = $getdata->password;
      $arr = array();
     
      $sql = "SELECT * FROM admin WHERE ad_username = '$username' AND ad_password = '$password'";
      $result = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);
      if($num > 0)
            $arr['status'] ='2';


      if($num > 0){
         while ($row = mysqli_fetch_assoc($result)){
              $arr[] = $row;
      }
      echo json_encode($arr);
}
     
      else{
            echo json_encode(null);
      }

      
    
    $conn->close();
     

?>
