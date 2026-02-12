<?php

  include 'connect.php';

  if(isset($_GET['ID'])){

    $id = $_GET['ID'];

      $sql = "SELECT * FROM Passenger WHERE Passenger_id = '$id'";
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

          $PNo = $_POST['Passenger_no'];
          $PsNo = $_POST['Passport_no'];
          $PName = $_POST['Name'];
          $PEmail = $_POST['Passenger_Email'];
          $SNo = $_POST['Seat_no'];
          $TId = $_POST['Ticket_id'];

          $sql = "UPDATE Passenger SET  Passenger_no = '$PNo' , Passport_no = '$PsNo', Name = '$PName',Passenger_Email= '$PEmail', Seat_no='$SNo',Ticket_id='$TId' WHERE Passenger_id='$idnew'";

          if ($conn->query($sql) === TRUE) {
            header('location:passengermanage.php');
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
  <title>Passenger update</title>
  <link rel="stylesheet" href="passengerupdate.css">
</head>
<body>
    <p>Update Passenger Details</p>
<div class="container">
    <div class="content">
      <form action="" method="post">
        

          <p>Passenger Number:</p>
          <div>
          <input name="Passenger_no" type="text" value = "<?php echo $row['Passenger_no']; ?>"> 
          </div>

          <p>Passport Number :</p>
          <div>
          <input name="Passport_no" type="text" value = "<?php echo $row['Passport_no']; ?>"> 
          </div>

          <p>Name :</p>
          <div>
          <input name="Name" type="text" value = "<?php echo $row['Name']; ?>"> 
          </div>

          <p>Passenger Email:</p>
          <div>
          <input name="Passenger_Email" type="text" value = "<?php echo $row['Passenger_Email']; ?>"> 
          </div>

          <p>Seat Number: :</p>
          <div>
          <input name="Seat_no" type="text" value = "<?php echo $row['Seat_no']; ?>"> 
          </div>

          <p>Ticket ID :</p>
          <div>
          <input name="Ticket_id" type="text" value = "<?php echo $row['Ticket_id']; ?>"> 
          </div>

          <div>
            <button name="save">Save</button>
          </div>
      </form>
    </div>
  </div>
</body>
</html>