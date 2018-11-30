<?php

    require_once("connect.php");

    $rest_json = file_get_contents("php://input");
    $_POST = json_decode($rest_json, true);
    
    $record_id        = $_POST["record_id"];
   // $id               = $_GET["record_id"];
    
    $plantingactivity = $_POST["c1"];
    $expenses         = $_POST["c2"];
    $date             = $_POST["myDate"];
    
    $number_sales     = $_POST["c4"];
    $sale_price       = $_POST["c5"];
    $revenue          = $_POST["c3"];






    if (isset($_POST["c1"]))
    {
        
        $sql ='INSERT INTO cropdatail(record_id,plantingactivity,expenses,date,revenue,number_sales,sale_price ) VALUES ("' . $record_id  . '","' . $plantingactivity . '","' . $expenses  . '","' . $date  . '","' . $revenue  . '","' . $number_sales  . '","' . $sale_price  . '")';
        $result = $conn->query($sql);
        $outp = "Inserter " . $sql . "" ;
        echo json_encode($result);

    }


 
    $conn->close();

?>

 