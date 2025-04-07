<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection


    $conn = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db");

    if(!$conn){
        die("Failed to connect --> ".mysqli_connect_error($conn));
    }

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM blog_post";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['full_body'];

        $sql = "INSERT INTO blog_post(title, full_body) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blog_post WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM blog_post WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }
    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['full_body'];

        $sql = "UPDATE blog_post SET title = '$title', full_body = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }

?>
