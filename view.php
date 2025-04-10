<?php
session_start(); 
?>
<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>The Corelia Blog</title>
</head>
<body>

   <div class="container mt-5">

        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>

            <div class="d-flex mt-2 justify-content-center align-items-center">

            <form method='POST' action='edit.php?id=<?php echo $q['id']?>'>
            <?php
            if(isset($_SESSION["user"])){
                if($_SESSION["user"] == 'ADMIN1'){
                    echo " <a href='edit.php?id=7' class='btn btn-light btn-sm' name='edit'>Edit</a>";
                }
            }
            ?>
            </form>
            
            <form method='POST'>
            <input type="text" hidden value='<?php echo $q['id'];?>' name="id">


                <?php 
                //echo $_SESSION["user"]; 
                if(isset($_SESSION["user"])){
                if($_SESSION["user"] == 'ADMIN1'){
                //echo " <a href='edit.php?id= '$q{['id']}' class='btn btn-light btn-sm' name='edit'>Edit</a>";
    
               // echo "<form method='POST'>"; 
                //echo "<input type='text' hidden value=$q{['id']} name='id'>";
                echo "<button class='btn btn-danger btn-sm ml-2' name='delete'>Delete</button>";
                }
                else{
                  echo ""; 
                }}
                           
                ?>

                    </form>
                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo nl2br($q['full_body']);?></p>
        <?php } ?>    

        <a href="index.php" class="btn btn-outline-dark my-3">Go Back</a>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    

</body>
</html>