<?php

$conn = new mysqli("localhost","root","","skyticket");

if($conn->connect_error){
  die("Not connected".$conn->connect_error);
}




?>