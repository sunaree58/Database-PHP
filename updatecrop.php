<?php

    require_once("connect.php");

    $rest_json = file_get_contents("php://input");
    $_POST = json_decode($rest_json, true);

    $id         = $_GET["record_id"];
    $vegetable  = $_POST["vegetable"];
    $breed      = $_POST["breed"];
    $standard    = $_POST["standard"];
    $tran       = $_POST["tran"];
    $tablewah   = $_POST["tablewah"];
   
    

        
        $sql ='UPDATE  recordcrop SET (vegetable, breed, standard, transplant, tablewah, record_id) VALUES("' . $vegetable . '","' . $breed . '","' . $standard .'","' . $tran . '","' . $tablewah .'","' . $record_id .'")';
        $result = $conn->query($sql);
        $outp = "Inserter " . $sql . "" ;
        echo json_encode($result);

    

 
    $conn->close();

?>