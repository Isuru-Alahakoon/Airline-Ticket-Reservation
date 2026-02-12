<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "skyticket";

    $conn = new mysqli($hostname , $username , $password , $dbname);

    if($conn->connect_error){

        echo "error 404";
    }
?>