<?php

  include 'connect.php';

  if(isset($_GET['ID'])){

    $id = $_GET['ID'];

      $sql = "SELECT * FROM flight WHERE Flight_id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      $row = $result->fetch_assoc();
        
      
    } else {
      echo "0 results";
    }

      }

      if(isset($_GET['ID'])){

        if(isset($_POST['save'])){
          $idnew = $_GET['ID'];

            $Flight_no = $_POST['Flight_no'];
            $Date = $_POST['Date'];
            $Depature_time = $_POST['Depature_time'];
            $Arrival_time = $_POST['Arrival_time'];
            $Destination = $_POST['Destination'];
            $Duration = $_POST['Duration'];
            $Flight_status = $_POST['Flight_status'];

          $sql = "UPDATE flight SET Flight_no = '$Flight_no' , Date = '$Date' , Depature_time = '$Depature_time' , Arrival_time = '$Arrival_time', Destination = '$Destination', Duration = '$Duration', Flight_status = '$Flight_status' WHERE Flight_id='$idnew'";

          if ($conn->query($sql) === TRUE) {
            header('location:flightmanage.php');
          } else {
            echo "Error updating record: " . $conn->error;
          }

          $conn->close();


        }
      }

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight update</title>
  <link rel="stylesheet" href="ticketupdate.css">
</head>
<body>
<div class="container">
    <div class="content">
      <form action="" method="post">
          <!-- <div>
          <input name="a_name" type="text" value = "<?php echo $row['Airline_Name']; ?>"> 
          </div>
 
          <div>
          <input name="a_country" type="text" value = "<?php echo $row['Airline_country']; ?>"> 
          </div>

          <div>
          <input name="f_name" type="text" value = "<?php echo $row['Flight_no']; ?>"> 
          </div>

          <div>
            <button name="save">Save</button>
          </div> -->

          <div>

          <input name="Flight_no" type="int"  value = "<?php echo $row['Flight_no']; ?>"> 
          </div>

          <br>

          <div>
          <input name="Date" type="date"  value = "<?php echo $row['Date']; ?>"> 
          </div>

          <br>

          <div>

        <input name="Depature_time" type="time"  value = "<?php echo $row['Depature_time']; ?>"> 
        </div>

        <br>

        <div>
        <input name="Arrival_time" type="time"  value = "<?php echo $row['Arrival_time']; ?>"> 
        </div>

        <br>

        <div>
        <input name="Destination" type="text" value = "<?php echo $row['Destination']; ?>"> 
        </div>

        <br>

        <div>
        <input name="Duration" type="time"  value = "<?php echo $row['Duration']; ?>"> 
        </div>

        <br>

        <div>
        <input name="Flight_status" type="text"  value = "<?php echo $row['Flight_status']; ?>"> 
        </div>

        <br>

          <div>
            <button name="save">Save</button>
          </div>
      </form>
    </div>
  </div>
</body>
</html>