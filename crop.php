<?php

    require_once("connect.php");

    $rest_json = file_get_contents("php://input");
    $_POST = json_decode($rest_json, true);

    $mem_id     = $_POST["mem_id"];
    $vegetable  = $_POST["vegetable"];
    $breed      = $_POST["breed"];
    $standard    = $_POST["standard"];
    $tran       = $_POST["tran"];
    $tablewah   = $_POST["tablewah"];
   
    

    if (isset($_POST["vegetable"]))
    {
        
        $sql ='INSERT INTO recordcrop(vegetable, breed, standard, transplant, tablewah, mem_id) VALUES("' . $vegetable . '","' . $breed . '","' . $standard .'","' . $tran . '","' . $tablewah .'","' . $mem_id .'")';
        $result = $conn->query($sql);
        $outp = "Inserter " . $sql . "" ;
        echo json_encode($result);

    }

   

 
    $conn->close();

?>