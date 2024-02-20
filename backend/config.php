<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tms";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if(!$conn){
        echo "Database Failed!!!";
    } else{
        echo '<script>console.log("Database Connection Successful.");</script>';
    }

?>