<!DOCTYPE html>
<html>
<body>
  <style>
.center{
  padding: 30px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
    </style>
<a href="Home.php" title="Home">
          <img class="center" width=300px height=170px src="images/Corelia Project_Master Logo_Black_JPG.jpg" >
        </a>
<h1>Corelia Project admin page</h1>

<fieldset>

<form>
<h2>Check playlist by composer</h2>
<form>

  <select id='popupSelect' name='popupSelect'>
<?php
//error_reporting(E_ALL ^ E_NOTICE); 
      $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
      Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
      mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";
      $sqlString = "select id, name from composer";   
      $queryResult = @mysqli_query($DBConnect , $sqlString)
                Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";  

                $row = mysqli_fetch_row($queryResult);
        
          while ($row) {
            echo "<option value='$row[0]'> $row[0]  $row[1]</option>";     
            $row = mysqli_fetch_row($queryResult);
        }
        echo "</select>";
        error_reporting(0);
?>
<input type="submit" value="Update">
</form> 

<?php  
//Clarinet playlist 
//error_reporting(0);


$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

$ID = $_GET['popupSelect'];
if (isset($_GET['popupSelect'])){
$secondString = "select w.name, c.name from work w, composer c where c.id = $ID and w.composer_id = $ID";
$secondResult = @mysqli_query($DBConnect , $secondString)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

$row = mysqli_fetch_row($secondResult);
echo "<h3>This is $row[1]'s music list</h3>";
echo "<div class='gfg'>";
while ($row) {
  echo "<p class='u-text u-text-2'> # $row[0] by  $row[1]&nbsp;</p>";

  $row = mysqli_fetch_row($secondResult);
}
echo "</div>";
}
mysqli_close($DBConnect);
?>
</fieldset>
<p></p>
<p></p>


<fieldset>
<h2>Check playlist by instrument</h2>
<form>

  <select id='popuelect' name='popuelect'>
<?php


      $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
      Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
      mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";
      $sqlString = "select id, name from instrument";   
      $queryResult = @mysqli_query($DBConnect , $sqlString)
                Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";  

                $row = mysqli_fetch_row($queryResult);
        
          while ($row) {
            echo "<option value='$row[0]'> $row[0]  $row[1]</option>";     
            $row = mysqli_fetch_row($queryResult);
        }
        echo "</select>";
  
?>
<input type="submit" value="Update">
</form> 


<?php  
 

//Oboe playlist 
$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";


$ID = $_GET['popuelect'];

if (isset($_GET['popuelect'])){
  $secondString = "select name from instrument where id=$ID";
  $secondResult = @mysqli_query($DBConnect , $secondString)
  Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";


$row = mysqli_fetch_row($secondResult);
echo "<h3>This is $row[0] music list</h3>";
}  

if (isset($_GET['popuelect'])){
$secondString = "select w.name, c.name from work w, composer c, instruments_in_work i  where c.id = w.composer_id and i.work_id = w.id and i.instrument_id=$ID";
$secondResult = @mysqli_query($DBConnect , $secondString)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

$row = mysqli_fetch_row($secondResult);

echo "<div class='gfg'>";
while ($row) {
  echo "<p class='u-text u-text-4'> # $row[0] by  $row[1]&nbsp;</p>";
 
  $row = mysqli_fetch_row($secondResult);
}
echo "</div>";
}
mysqli_close($DBConnect);
?>
</fieldset>

<?php

$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

//$sqlString = "CREATE TABLE IF NOT EXISTS CuratedList (ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name varchar(255) NOT NULL, List varchar(500) NOT NULL, Link varchar(255) NOT NULL)";
//$secondResult = @mysqli_query($DBConnect , $sqlString)
//Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";
?>
<p></p>
</body>
</html>