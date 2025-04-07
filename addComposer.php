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
<h1>Corelia Project Admin page</h1>

<fieldset>
<form>
<h2>Update a new composer</h2>

<form>
  <label for="name">Surname:</label><br>
  <input type="text" id="surname" name="surname" value="" required><br>
  <label for="name">Given name:</label><br>
  <input type="text" id="given_name" name="given_name" value="" required><br>
  <label for="birth_death_date">Birth date(Death_date):</label><br>
  <input type="text" id="birth_death_date" name="birth_death_date" ><br><br>
  <label for="nationality_id_1">Nationality:</label><br>
  <select id='selectNationality' name='selectNationality'>
  <?php
    
      $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
      Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
      mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

      $sqlString = "select id, nationality from nationality";   
      $queryResult = @mysqli_query($DBConnect , $sqlString)
                Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";  
      
                $row = mysqli_fetch_row($queryResult);
        
          while ($row) {
            echo "<option value='$row[0]'> $row[1]</option>";
            
            $row = mysqli_fetch_row($queryResult);
        }
        echo "</select><br>";
       
?>
<p></p>
  <label for="biography">Biography:</label><br>
  <input type="text" id="biography" name="biography" size="130" ><br><br>
  <label for="website">Composer website:</label><br>
  <input type="text" id="website" name="website" size="50"><br><br>
  <input type="submit" value="Update">
</form> 
<?php
    error_reporting(E_ALL ^ E_NOTICE);  
      $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
      Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
      mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

      $surname = $_GET["surname"];
      $given_name = $_GET["given_name"];
      $birth_death_date = $_GET["birth_death_date"];
      $nationality_id_1 = $_GET["selectNationality"];
      $biography = $_GET["biography"];
      $website = $_GET["website"];

      //echo $nationality_id_1; 

     if(isset($surname)) {
      $sqlString = "INSERT INTO composer(surname, given_name, birth_death_date, nationality_id_1 ,biography,link_1) VALUES 
      ('$surname', '$given_name' , '$birth_death_date' ,'$nationality_id_1','$biography', '$website')";   

      $queryResult = @mysqli_query($DBConnect , $sqlString)
                Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";  
      if(isset($queryResult )){
        echo "Data insert sucess!";}
      }
?>
</fieldset>

<p></p>
<p></p>
<fieldset>
<form>
<p></p>
<h2>Upload work data</h2>


<form>
<label for="composer">Select Composer</label> 
<select id='popupSelect' name='popupSelect'>
<?php
    
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
        echo "</div>"; 
?>
<br><br>
  <label for="workName">Work name:</label><br>
  <input type="text" id="workName" name="workName" value="" size="50" required ><br><br>
  <label for="duration">Duration(min):</label><br>
  <input type="text" id="duration" size="50" name="duration" ><br><br>
  <label for="year">Year:</label><br>
  <input type="text" id="year" size="50" name="year" ><br><br>
  <label for="publisher">Publisher:</label><br>
  <input type="text" id="publisher" size="50" name="publisher" ><br><br>
  <label for="recording_link_1">Recording_link:</label><br>
  <input type="text" id="recording_link_1" size="50" name="recording_link_1" ><br><br>
  <label for="score_link_1">Score_link_:</label><br>
  <input type="text" id="score_link_1" size="50" name="score_link_1" ><br><br>
  <input type="submit" value="Update">
</form> 

<?php
    error_reporting(E_ALL ^ E_NOTICE);  
      $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
      Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
      mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

    
      $workName = $_GET["workName"];
      $selectOption = $_GET['popupSelect'];
      $duration = $_GET["duration"];
      $year = $_GET["year"];
      //$publisher = $_GET["publisher"];
      $recording_link_1 = $_GET["recording_link_1"];
      $score_link_1 = $_GET["score_link_1"];

      if(isset($selectOption)) {
        $sqlString = "INSERT INTO work(name, composer_id, duration,year_1,recording_link_1,score_link_1 ) VALUES 
        ('$workName', '$selectOption' , '$duration' , '$year',  '$recording_link_1', '$score_link_1')";   
        $queryResult = @mysqli_query($DBConnect , $sqlString)
                  Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";  
        if(isset($queryResult )){
          echo "Data insert sucess!";}
        }

  
    
?>
</fieldset>



<p></p>
<p></p>


<fieldset>
<h2>DELETE composer</h2>
<form action = "<?php $_PHP_SELF ?>">
<label for="composer">Select Composer ID</label> 
<input type="text" name="selectedID" id="selectedID" required>
<input type="submit" value="Delete">
</form> 

<?php
   //error_reporting(E_ALL ^ E_NOTICE);  

      $DBConnect = mysqli_connect("tip-db-instance-v2.c4oprifxdyum.ap-southeast-2.rds.amazonaws.com", "tip_db_user_crud", "LtjdzdJNQYSGADY5" , "tip_db")
      Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ".
      mysqli_connect_errno().": ". mysqli_connect_error ()). "</p>";

      $selectedID = $_GET['selectedID']; 

      if($selectedID>150){
      $sqlString = "DELETE FROM composer WHERE id=$selectedID";   
      $queryResult = @mysqli_query($DBConnect , $sqlString)
              Or die ("<p>Unable to query the table.</p>"."<p>Error code ".mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect))."</p>";  
      if(isset($queryResult)){
       echo "$selectedID Deleting sucess!";}
      else{
        echo "";
      }
    }
else {
  echo "";
}
   mysqli_close($DBConnect);
?>
</fieldset>


</body>
</html>