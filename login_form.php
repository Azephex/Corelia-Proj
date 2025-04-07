<?php


@include 'config.php';

session_start();

if(isset($_POST['submit'])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = md5($_POST['password']);
	$select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";
	$result = mysqli_query($conn, $select);
	
	if(mysqli_num_rows($result) > 0){
		
		$row = mysqli_fetch_array($result);
		
		if($row['username'] == 'ADMIN1'){
			$adminUser = $row['username'];
			$_SESSION["user"] = $adminUser;
		

             header("location:Home.php?user=$adminUser");
			
			}else{
				$user = $row['username'];
				$_SESSION['user'] = $user ;
			
				header("location:Home.php?user=$user");
			}
			}
			else{
				$error[] = 'Incorrect email or password';
				}
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="css/style.css">
<div class="form-container">
   <form action="" method="post">
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
      <?php
	  if(isset($error)){
		  foreach($error as $error){
			  echo '<span class="error-msg">'.$error.'</span>';
			  };
			  };
      ?>
      <input type="text" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register now</a></p>
   </form>

</div>

</body>

</html>
