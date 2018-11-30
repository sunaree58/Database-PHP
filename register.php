<?php

//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Headers: Origin, Content-Type");

require_once("connect.php");

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

$names     = $_POST["name"];
$lastname  = $_POST["lastname"];
$sex       = $_POST["sex"];
$address   = $_POST["address"];
$vocation  = $_POST["vocation"];
$telephone = $_POST["telephone"];
$email     = $_POST["email"];
$username  = $_POST["username1"];
$password  = $_POST["password1"];
    //$check ="SELECT id FROM members WHERE username = '$username'";
    //$result1 = mysqli_query($conn,$check);
   //$num = mysqli_num_rows($result1);

 //if($num > 0){
        //echo "Nooooo!!!";
   // }

//else{


    if (isset($_POST["name"])){


        $sql ="SELECT * FROM `member` WHERE `username` = '". $username . "'";

        $result = $conn->query($sql);

        if($result->num_rows == 0){
            $sql ="INSERT INTO member(mem_name, mem_lastname, mem_sex, mem_address, mem_vocation, mem_tel, mem_email, username, password) VALUES ('" . $names . "','" . $lastname . "','" . $sex ."','" . $address . "','" . $vocation . "','" . $telephone . "','" . $email . "','" . $username . "','" . $password . "')";

            $result = $conn->query($sql);
            // $outp = "Inserter " . $sql . "" ;
            // echo json_encode($outp);
            $output = array(
                'status' => true
            );
            echo json_encode($output);
        }else{
            $output = array(
                'status' => false
            );
            echo json_encode($output);
        }





        

    }
    
    
//}

$conn->close();

?>









