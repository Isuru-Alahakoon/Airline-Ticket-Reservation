<?php

    include 'userconnect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User crud</title>
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>
    <h2>Registerd User Details</h1>

    <div class="container">
   
        <div class="content">
        <div class="main">
        <div class="btn">
            <a href= "./userinsert.php" ><b>ADD Users</b></a>
        </div>
        <div class="table" >
        <table>
            <thead>
                
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>password</th>
                <th>PassportNO</th>
                <th>UserCountry</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Action</th>
            </thead>

            <?php
            
                $sql = "SELECT * FROM user";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                    echo "

                        <tbody>
                
                <td><br><br>$row[UserName]</td>
                <td><br><br>$row[FirstName]</td>
                <td><br><br>$row[LastName]</td>
                <td><br><br>$row[Password]</td>
                <td><br><br>$row[PassportNo]</td>
                <td><br><br>$row[UserCountry]</td>
                <td><br><br>$row[DOB]</td>
                <td><br><br>$row[Email]</td>
                
                <td>
                    <a class='update' href='userupdate.php?ID=".$row['UserID']."'><br><br>UPDATE</a>
                    <a class='delete' href='userdelete.php?ID=".$row['UserID']."'>DELETE</a>
                </td>
            </tbody>
                    
                    ";
                }
                } else {
                
                }
                $conn->close();
            
            ?>

            

        </table>
        </div>
        </div>
        </div>
    </div>
    
</body>
</html>