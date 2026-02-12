<?php

include "airlineconnect.php";

if(isset($_POST['save'])){

  $Aname = $_POST["a_name"];
  $Acountry = $_POST["a_country"];
  $Fname = $_POST["f_name"];

  $sql = "INSERT INTO airline (Airline_Name, Airline_country, Flight_no) VALUE ('$Aname','$Acountry','$Fname')";

  if($conn->query($sql) === TRUE){
    header("location:airlinemanage.php");
  }
  
  else{
    echo "error".$conn->error;
  }
  
  $conn->close();

}







?>