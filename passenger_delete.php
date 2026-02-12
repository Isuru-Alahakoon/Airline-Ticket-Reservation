<?php

  include 'connect.php';

  if(isset($_GET['ID'])){

    $ID = $_GET['ID'];

    $sql = "DELETE FROM Passenger WHERE Passenger_id='$ID'";

    if ($conn->query($sql) === TRUE) {
      header("Location: passengermanage.php");
    } else {
      echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
      }

?>