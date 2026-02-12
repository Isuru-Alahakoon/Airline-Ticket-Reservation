<?php

    include "userconnect.php";

    if(isset($_GET['ID'])){

        $ID = $_GET['ID'];

        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();

        } else {
        echo "0 results";
        }

    }

    if(isset($_GET['ID'])){

        if(isset($_POST['sub'])){

        $idnew = $_GET['ID'];

        $username = $_POST['uname'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['upw'];
        $passpn = $_POST['passpn'];
        $country = $_POST['ucon'];
        $dob = $_POST['dob'];
        $email = $_POST['uemail'];

        $sql = "UPDATE user SET Username = '$username' , FirstName = '$fname' , LastName = '$lname' , Password = '$password' , PassportNo = '$passpn' , UserCountry = '$country' , DOB = '$dob' , Email = '$email' WHERE UserID='$idnew'";

        if ($conn->query($sql) === TRUE) {
        header('location:user.php');
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
    <title>Add User</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user add</title>
    <link rel="stylesheet" href="userinsert.css">
</head>
<body>

    <div class="container">
        <div class="login-box">
            <h2>Sign In</h2>
            <form id="signin-form" onsubmit="return validateForm()" action = "" method = "post">

                <div class="input-box">
                    <label for="username">User name:</label>
                    <input type="text" id="username" name="uname" value = "<?php echo $row['UserName']; ?>" required>
                </div>

                <div class="input-box">
                    <label for="username">First naame:</label>
                    <input type="text" id="username" name="fname" value = "<?php echo $row['FirstName']; ?>" required>
                </div>

                <div class="input-box">
                    <label for="username">Last naame:</label>
                    <input type="text" id="username" name="lname" value = "<?php echo $row['LastName']; ?>" required>
                </div>

                <div class="input-box">
                    <label for="username">Password</label>
                    <input type="password" id="username" name="upw" value = "<?php echo $row['Password']; ?>" required>
                </div>

                <div class="input-box">
                    <label for="username">Passport no:</label>
                    <input type="text" id="username" name="passpn" value = "<?php echo $row['PassportNo']; ?>" required>
                </div>

                <div class="input-box">
                    <label for="password">Country:</label>
                    <input type="text" id="password" name="ucon" value = "<?php echo $row['UserCountry']; ?>" required>
                </div>

                <div class="input-box">
                    <label for="password">DOB:</label>
                    <input type="date" id="password" name="dob" value = "<?php echo $row['DOB']; ?>" required>
                </div>

                <div class="input-box">
                    <label for="password">Email:</label>
                    <input type="email" id="password" name="uemail" value = "<?php echo $row['Email']; ?>" required>
                </div>


                <div class="button-box">
                    <button type="submit" name="sub">UPDATE</button>
                </div>
            
            </form>
        </div>
    </div>
</body>
</html>
</body>
</html>