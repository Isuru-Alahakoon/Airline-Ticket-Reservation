<?php

    include "userconnect.php";

    if(isset($_GET['ID'])){

        $ID = $_GET['ID'];

        $sql = "DELETE FROM user WHERE UserID='$ID'";

        if ($conn->query($sql) === TRUE) {
        header('location:user.php');
        } else {
        echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    }

?>