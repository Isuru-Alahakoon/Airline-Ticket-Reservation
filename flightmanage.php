<?php

include "connect.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight management</title>
  <link rel="stylesheet" href="flightmanage.css">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="add">
      <a href="addflight.php">Add Flight</a>
      </div>
      <div class="tablee">
        <table>
          <thead>
            <tr>
              <th>Flight ID</th>
              <th>FLIGHT no</th>
              <th>Date</th>
              <th>Depature Time</th>
              <th>Arrival Time</th>
              <th>Destination</th>
              <th>Duration</th>
              <th>Flight Status</th>
              <th>Action</th>
            </tr>
          </thead>

    <?php
    
      $sql = "SELECT * FROM flight";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "
          
            <tbody class='tbody'>
              <tr>
                <td>$row[Flight_id]</td>
                <td>$row[Flight_no]</td>
                <td>$row[Date]</td>
                <td>$row[Depature_time]</td>
                <td>$row[Arrival_time]</td>
                <td>$row[Destination]</td>
                <td>$row[Duration]</td>
                <td>$row[Flight_status]</td>
                <td><a href='flight_del.php?ID=$row[Flight_id]' class = 'del_btn'>Delete</a>
                    <a href='flightupdate.php?ID=$row[Flight_id]' class = 'update_btn'>Update</a></td>
              </tr>
          </tbody>
          
          ";
        }
      }
      $conn->close();
    
    
    ?>
          


        </table>
      </div>
      
    </div>
  </div>
</body>
</html>