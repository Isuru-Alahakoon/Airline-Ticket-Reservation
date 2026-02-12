<?php

  include 'connect.php';

  if(isset($_GET['ID'])){

    $ID = $_GET['ID'];

    $sql = "DELETE FROM flight WHERE Flight_id='$ID'";

    if ($conn->query($sql) === TRUE) {
      header('location:flightmanage.php');
    } else {
      echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
      }

?>