<?php

  include 'airlineconnect.php';

  if(isset($_GET['ID'])){

    $id = $_GET['ID'];

      $sql = "SELECT * FROM airline WHERE airline_id = '$id'";
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

          $airname = $_POST['a_name'];
          $aircountry = $_POST['a_country'];
          $flightno = $_POST['f_name'];

          $sql = "UPDATE airline SET Airline_Name = '$airname' , Airline_country = '$aircountry' , Flight_no = '$flightno' WHERE airline_id='$idnew'";

          if ($conn->query($sql) === TRUE) {
            header('location:airlinemanage.php');
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
  <title>Airline update</title>
  <link rel="stylesheet" href="airupdate.css">
</head>
<body>
<div class="container">
    <div class="content">
      <form action="" method="post">

        <div class="update_airline_header item">
          UPDATE AIRLINE
        </div>

          <div class="item">
          <input name="a_name" type="text" value = "<?php echo $row['Airline_Name']; ?>"> 
          </div>
 
          <div class="item">
          <input name="a_country" type="text" value = "<?php echo $row['Airline_country']; ?>"> 
          </div>

          <div class="item">
          <input name="f_name" type="text" value = "<?php echo $row['Flight_no']; ?>"> 
          </div>

          <div class=" save_btn item">
            <button name="save">Save</button>
          </div>
      </form>
    </div>
  </div>
</body>
</html>