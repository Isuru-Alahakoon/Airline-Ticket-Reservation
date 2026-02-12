<?php

include 'connect.php';

    if(isset($_POST['save'])){

        
        $Flight_no = $_POST['Flight_no'];
        $Date = $_POST['Date'];
        $Depature_time = $_POST['Depature_time'];
        $Arrival_time = $_POST['Arrival_time'];
        $Destination = $_POST['Destination'];
        $Duration = $_POST['Duration'];
        $Flight_status = $_POST['Flight_status'];

        
        $sql = "INSERT INTO flight (Flight_id, Flight_no, Date, Depature_time, Arrival_time, Destination, Duration, Flight_status)
        VALUES ('', '$Flight_no', '$Date', '$Depature_time', '$Arrival_time','$Destination','$Duration','$Flight_status')";

        if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('location: flightmanage.php');
        } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
    }    

?>