<?php

// $conn = new mysqli("localhost","root","","skyticket");

// if($conn->connect_error){
//   die("Not connected".$conn->connect_error);
// }

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "skyticket";

$conn = new mysqli($hostname , $username , $password , $dbname);

if($conn -> connect_error){

    die("404 error");

}
?>