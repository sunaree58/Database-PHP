<?php
     
     require_once("connect.php");

     $rest_json = file_get_contents("php://input");
     $getdata = json_decode($rest_json); 
     
     $username = $getdata->username;
     $password = $getdata->password;
      $arr = array();
      $userData ='';
      $sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);
      if($num > 0)
            $arr['status'] ='1';

      
           

      //  $sql1 = "SELECT * FROM admin WHERE ad_username = '$username' AND ad_password = '$password'";
      //  $result1 = mysqli_query($conn,$sql1);
      //  $num1 = mysqli_num_rows($result1);
      //    if( $num1 > 0)
      //        $arr['status'] ='2';
            
      //        if($num1 > 0){
      //             while ($row = mysqli_fetch_assoc($result1)){
      //                   $arr[] = $row;
      //             }
      //             echo json_encode($arr);
      //       }
//==================================================
      //$sql = "SELECT username, password FROM members";
   /*   $result = mysqli_query($conn , $sql);
  
      if(mysqli_num_rows($result) > 0)
      {
          $outp = array();
          $outp = $result->fetch_all(MYSQLI_ASSOC);
          echo json_encode($outp);
      }
      else
      {
          echo json_encode("0 result");
      } */

//==================================================

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
