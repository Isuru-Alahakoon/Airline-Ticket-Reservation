<?php

include "airlineconnect.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Airline management</title>
  <link rel="stylesheet" href="airlinemanage.css">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="add">
      <a href="airform.php">Add Airline</a>
      </div>
      <div class="tablee">
        <table border="1">
          <thead>
            <tr>
              <th>Airline Name</th>
              <th>Airline Country</th>
              <th>Flight Number</th>
              <th>Action</th>
            </tr>
          </thead>

    <?php
    
      $sql = "SELECT * FROM airline";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "
          
            <tbody>
              <tr>
                <td>$row[Airline_Name]</td>
                <td>$row[Airline_country]</td>
                <td>$row[Flight_no]</td>
                <td><a class='del' href='air_delete.php?ID=$row[airline_id]'>Delete</a>
                    <a class='up' href='airupdate.php?ID=$row[airline_id]'>Update</a></td>
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