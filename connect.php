<?php

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, Content-Type");

        //$servername = "127.0.0.1";
        $SERVERNAME = "localhost";
        $USERNAME = "root";
        $PASSWORD = "";
        $DBNAME = "foodtraceability";

        $conn = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);
        mysqli_set_charset($conn,"utf8");
        if($conn->connect_error)
        {
            die("Connection failed " . $conn->connect_error);
        }

?>