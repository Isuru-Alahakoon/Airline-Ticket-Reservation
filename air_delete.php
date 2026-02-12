<?php

  include 'airlineconnect.php';

  if(isset($_GET['ID'])){

    $ID = $_GET['ID'];

    $sql = "DELETE FROM airline WHERE airline_id='$ID'";

    if ($conn->query($sql) === TRUE) {
      header('location:airlinemanage.php');
    } else {
      echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
      }

?>