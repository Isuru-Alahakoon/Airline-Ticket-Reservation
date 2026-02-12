<?php

  include 'config.php';

  if(isset($_GET['ID'])){

    $ID = $_GET['ID'];

    $sql = "DELETE FROM tickket WHERE Ticket_id='$ID'";

    if ($conn->query($sql) === TRUE) {
      header('location:ticketmanage.php');
    } else {
      echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
      }

?>