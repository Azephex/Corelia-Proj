<!-- Connect to database -->
<?php

    $servername = "tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com";
    $username = "tip_db_user_crud";
    $password = "LtjdzdJNQYSGADY5";
    $database = "tip_db";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Failed to connect --> ".mysqli_connect_error($conn));
    }

?>