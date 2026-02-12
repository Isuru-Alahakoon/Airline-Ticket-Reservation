<?php

    include "userconnect.php";

    if(isset($_POST['reg'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $passport = $_POST['passport'];
        $dates = $_POST['date'];
        $country = $_POST['country'];
        $address = $_POST['address'];
        $country_code = $_POST['country_code'];
        $mobile = $_POST['mobile'];

        $sql = "INSERT INTO user (UserName ,FirstName, LastName , Password  ,PassportNo , UserCountry , DOB , Email)
                VALUES ('$uname' , '$fname' , '$lname' , '$pass' ,'$passport', '$country' , '$dates' , '$email')";

                if($conn->query($sql) === TRUE){

                    echo "Successfully registered";
                }else{

                    
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    // header('location:index.php');
                }

                $conn->close();
    }
?>

