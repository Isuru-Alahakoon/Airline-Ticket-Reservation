<?php

  include 'config.php';

  if(isset($_GET['ID'])){

    $id = $_GET['ID'];

      $sql = "SELECT * FROM tickket WHERE Ticket_id = '$id'";
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

          

          
          $Bdate = $_POST["bookingdate"];
          $Sno = $_POST["seatno"];
          $Price = $_POST["price"];
          $Fid = $_POST["fid"];



          $sql = "UPDATE tickket SET  Booking_date = '$Bdate' , Seat_no = '$Sno', Price = '$Price', Flight_id = '$Fid' WHERE Ticket_id='$idnew'";
          

          if ($conn->query($sql) === TRUE) {
            header('location:ticketmanage.php');
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
  <title>Ticket update</title>
  <link rel="stylesheet" href="ticketupdate.css">
</head>
<body>
<div class="container">
    <div class="content">
      <p>Enter the neccessary Updates</p>
      <form action="" method="post">
          <div>
            <br>

          <input name="tid" type="text" value = "<?php echo $row['Ticket_id']; ?>"> 
          </div>
          <br>
 
          <div>
          <input name="bookingdate" type="text" value = "<?php echo $row['Booking_date']; ?>"> 
          </div>
          <br>

          <div>
          <input name="seatno" type="text" value = "<?php echo $row['Seat_no']; ?>"> 
          </div>
          <br>

          <div>
          <input name="price" type="text" value = "<?php echo $row['Price']; ?>"> 
          </div>
          <br>

          <div>
          <input name="fid" type="text" value = "<?php echo $row['Flight_id']; ?>"> 
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