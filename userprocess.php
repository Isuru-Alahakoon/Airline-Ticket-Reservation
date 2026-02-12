<?php

    include ('userconnect.php');

    if(isset($_POST['sub'])){

       $uname =$_POST["uname"];
       $firstn =$_POST["fname"];    
       $lname =$_POST["lname"];
       $passw =$_POST["upw"];
       $passn =$_POST["passpn"]; 
       $coun =$_POST["ucon"];
       $bday =$_POST["dob"];
       $email =$_POST["uemail"];   
       


        $sql = "INSERT INTO user(UserName,FirstName,LastName,Password,PassportNo,UserCountry,DOB,Email) VALUES('$firstn','$lname','$uname','$passw', '$passn', '$coun', '$bday', '$email')";

        if($conn->query($sql) === TRUE){

            header("location:user.php");
        }else{

            echo "error 404";
        }

    }
?>