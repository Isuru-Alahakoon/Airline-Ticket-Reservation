<?php

include "config.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticket management</title>
  <link rel="stylesheet" href="ticketmanage.css">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="add">
      <a href="ticketform.php">Add Ticket</a>
      </div>
      <div class="tablee">
        <table>
          <thead>
            <tr>
              
              <th>Booking Date</th>
              <th>Seat Number</th>
              <th>price</th>
              <th>Flight ID</th>
              <th>Action</th>
            </tr>
          </thead>

    <?php
    
      $sql = "SELECT * FROM tickket";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "
         
            <tbody class='tbody'>
              <tr>
                
                <td>$row[Booking_date]</td>
                <td>$row[Seat_no]</td>
                <td>$row[Price]</td>
                <td>$row[Flight_id]</td>

                <td>
                    <a href='ticketdelete.php?ID=$row[Ticket_id]' class = 'del_btn'>Delete</a>
                    <a href='ticketupdate.php?ID=$row[Ticket_id]' class = 'update_btn'>Update</a>
                  </td>
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