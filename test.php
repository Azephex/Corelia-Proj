
<html>
<body>
<H1>Testing Page<br/></h1>
<a href="shiponline.php">Home</a>
<?php

$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

//Flute (Bass) 35 , 32
$secondString = "select email, password, username from user";
$secondResult = @mysqli_query($DBConnect , $secondString)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

$row = mysqli_fetch_row($secondResult);

while ($row) {
  echo "<p>email: $row[0]</p>";
  echo "<p>password: $row[1]</p>";
  echo "<p>username: $row[2]</p>";
  echo "<p>-----</p>";
  $workid = $row[0]; 
  $instrument_id = $row[1];
  $row = mysqli_fetch_row($secondResult);
}
?>
</br>
</br>
</br>
<h1>Oboe list </h1>
<?php

//Clarinet play list 
$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

//Flute (Bass) 35 , 32
$secondString = "select w.name, c.name from work w, composer c, instruments_in_work i where c.id = w.composer_id and i.work_id = w.id and i.instrument_id=54";
$secondResult = @mysqli_query($DBConnect , $secondString)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

$row = mysqli_fetch_row($secondResult);

while ($row) {
  echo "<p>$row[0]</p>";
  echo "<p>$row[1]</p>";
  $workid = $row[0]; 
  $instrument_id = $row[1];
  $row = mysqli_fetch_row($secondResult);
}
?>
<h1>Clarinet play list  </h1>
<?php

//Clarinet play list 
$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

$instrumentID = 61;

$secondString = "select w.name, c.name from work w, composer c, instruments_in_work i where c.id = w.composer_id and i.work_id = w.id and i.instrument_id=135";
$secondResult = @mysqli_query($DBConnect , $secondString)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

$row = mysqli_fetch_row($secondResult);

while ($row) {
  echo "<p>$row[0]</p>";
  echo "<p>$row[1]</p>";
  $workid = $row[0]; 
  $instrument_id = $row[1];
  $row = mysqli_fetch_row($secondResult);
}
?>


<h1>Instruments and work list </h1>
<?php

//Connect database
$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

$instrumentID = 61;

$secondString = "select work_id, instrument_id from instruments_in_work where instrument_id = $instrumentID";
$secondResult = @mysqli_query($DBConnect , $secondString)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

$row = mysqli_fetch_row($secondResult);

while ($row) {
  //echo "<p>$row[0]</p>";
  //echo "<p>$row[1]</p>";
  $workid = $row[0]; 
  $instrument_id = $row[1];
  $row = mysqli_fetch_row($secondResult);
}


$forthdString = "select name from instrument where id = $instrument_id  ";
$secondResult = @mysqli_query($DBConnect , $forthdString)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

$row = mysqli_fetch_row($secondResult);
while ($row) {
  //echo "<p>$row[0] PlayList</p>";
  $row = mysqli_fetch_row($secondResult);
}


$thirdString = "select name, composer_id from work where id = $workid  ";
$secondResult = @mysqli_query($DBConnect , $thirdString)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

$row = mysqli_fetch_row($secondResult);
while ($row) {
 // echo "<p>$row[0]";
  $composerID = $row[1];
  $row = mysqli_fetch_row($secondResult);
}

$nameString = "select name from composer where id  = $composerID  ";
$secondResult = @mysqli_query($DBConnect , $nameString)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";

$row = mysqli_fetch_row($secondResult);
while ($row) {
  //echo " by $row[0]</p>";
  $row = mysqli_fetch_row($secondResult);
}
mysqli_close($DBConnect);
?>



<h1>work and instrument </h1>
<?php
//Connect database
$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";



//Check customerNum and password  

$SQLstring = "select work_id,instrument_id from instruments_in_work";
$queryResult = @mysqli_query($DBConnect , $SQLstring)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";
$row = mysqli_fetch_row($queryResult);


while ($row) {
//echo "<p>$row[0]</p>";
// /echo "<p>$row[1]</p>";
$row = mysqli_fetch_row($queryResult);
}
mysqli_close($DBConnect);


?>


<h1>Instrument name and id </h1>
<?php
//Connect database
$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";



//Check customerNum and password  

$SQLstring = "select id,name from instrument";
$queryResult = @mysqli_query($DBConnect , $SQLstring)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";
$row = mysqli_fetch_row($queryResult);


while ($row) {
echo "<p>$row[0]</p>";
echo "<p>$row[1]</p>";
$row = mysqli_fetch_row($queryResult);
}
mysqli_close($DBConnect);


?>


<h1>Composer name and ID </h1>

<?php
//Connect database
$DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";



//Check customerNum and password  

$SQLstring = "select name, id from composer";
$queryResult = @mysqli_query($DBConnect , $SQLstring)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";
$row = mysqli_fetch_row($queryResult);
$count = count($row);
echo $count;
while ($row) {
echo "<p>$row[0]</p>";
echo "<p>$row[1]</p>";
$row = mysqli_fetch_row($queryResult);
}

$SQLstring = "select MAX(id) from composer";
$queryResult = @mysqli_query($DBConnect , $SQLstring)
Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";
$row = mysqli_fetch_row($queryResult);

while ($row) {
echo "<p>$row[0]</p>";

$row = mysqli_fetch_row($queryResult);
}


mysqli_close($DBConnect);


?>

</body>
</html>
