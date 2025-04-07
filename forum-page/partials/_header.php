<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $login = true;
}
else{
  $login = false;
}

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="../Home.php">Home</a>
                      <a class="nav-link active" aria-current="page" href="index.php">Forum</a>
                  </li>
              </ul>';
              if($login){
                echo '<div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome '.$_SESSION['username'].'
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Dashboard</a></li>
                  <li><a class="dropdown-item bg-danger text-light" href="process/logout.php">Log Out</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </div>';
              }
              else{
              echo '<button class="btn btn-outline-success ms-1" data-bs-toggle="modal"
                  data-bs-target="#loginModal">LogIn</button>
              <button class="btn btn-outline-success ms-1" data-bs-toggle="modal"
                  data-bs-target="#signupModal">SignUp</button>';}
          echo '</div>
      </div>
  </nav>';

?>
<?php include 'modal/_login.php';
include 'modal/_signup.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
          <strong>Success!</strong> Your Account has been created.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
else{
  if(isset($_GET['error'])){
    $error = $_GET['error'];
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
            <strong>Error!</strong> '.$error.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
  }
}
?>