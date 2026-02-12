<?php

include "connect.php";


if(isset($_POST['userlog'])){

//retrieve form data 
$username = $_POST['user_name'];
$password = $_POST['password'];

    
    $query = "SELECT *FROM user WHERE UserName='$username' AND Password='$password'";

    // $result = $conn->query($query);

    $result = $conn->query($query);

    if($result->num_rows == 1){
        //Login success
        $_SESSION["user_name"] = $username;
        header("Location: accountpage.php");
        exit();
    }
    else{
        //echo "Login failed";
        //header("Location: index.php");

        echo '<script>alert("Do not have an account.<a href="reg.php">Please register</a>")</script>';
        exit();

    }
}


    if(isset($_POST['adminlog'])){

        //retrieve form data 
        $adminemail = $_POST['user_name'];
        $password = $_POST['password'];
        
            
            $query = "SELECT *FROM admin WHERE Admin_Email='$adminemail' AND Admin_password='$password'";
        
            // $result = $conn->query($query);
        
            $result = $conn->query($query);
        
            if($result->num_rows == 1){
                //Login success
                $_SESSION["user_name"] = $username;
                header("Location: dashboard.php");
                exit();
            }
            else{
                //echo "Login failed";
                //header("Location: index.php");
        
                echo '<script>alert("Do not have an account.<a href="reg.php">Please register</a>")</script>';
                exit();
        
            }
            $conn->close();
}
    ?>