<?php

include "config.php";

if(isset($_POST['save'])){

 
  $Bdate = $_POST['bookingdate'];
  $Sno = $_POST['seatno'];
  $Price = $_POST['price'];
  $Fid = $_POST['fid'];

  $sql = "INSERT INTO tickket (Ticket_id, Booking_date, Seat_no, Price, Flight_id) VALUE ('', '$Bdate','$Sno','$Price','$Fid')";

  if($conn->query($sql) === TRUE){

    header('location:ticketmanage.php');
  
  }
  
  else{
    echo "error".$conn->error;
  }
  
  $conn->close();

}







?>