<?php

include "connect.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Passenger Management</title>
  <link rel="stylesheet" href="passengermanage.css">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="add">
        <a href="passengerform.php">Add Passenger</a>
        </div>
        <br>
        <br>
      <div class="table">
        <table>
          <thead>
            <tr>
              <th>Passenger id</th>
              <th>Passenger number</th>
              <th>Passport number</th>
              <th>Passenger name</th>
              <th>Passenger email</th>
              <th>Seat number</th>
              <th>Ticket id</th>
              <th>Action</th>
            </tr>
          </thead>

    <?php
    
      $sql = "SELECT * FROM Passenger";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "
          
            <tbody class='tbody'>
              <tr>
                <td>$row[Passenger_id]</td>
                <td>$row[Passenger_no]</td>
                <td>$row[Passport_no]</td>
                <td>$row[Name]</td>
                <td>$row[Passenger_Email]</td>
                <td>$row[Seat_no]</td>
                <td>$row[Ticket_id]</td>
                <td>
                <div = 'but'>
                    <a href='passenger_delete.php?ID=$row[Passenger_id]' class = 'del_btn'>Delete</a>
                    <a href='passengerupdate.php?ID=$row[Passenger_id]' class='update_btn'>Update</a></td>
                </div>
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