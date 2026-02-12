<?php

include "connect.php";

if(isset($_POST['save'])){

  $PId = $_POST["P_id"];
  $PNo = $_POST["P_no"];
  $PsNo = $_POST["Pa_no"];
  $PName = $_POST["P_name"];
  $PEmail= $_POST["P_Email"];
  $SNo = $_POST["S_no"];
  $TId= $_POST["T_id"];

  

  $sql = "INSERT INTO Passenger (Passenger_id,Passenger_no,Passport_no,Name,Passenger_Email,Seat_no,Ticket_id) 
  VALUE ('$PId','$PNo','$PsNo','$PName','$PEmail','$SNo','$TId')";

  if($conn->query($sql) === TRUE){
    header('location:passengermanage.php');
  }
  
  else{
    echo "error".$conn->error;
  }
  
  $conn->close();

}


