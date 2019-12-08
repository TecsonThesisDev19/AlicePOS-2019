<?php

  include_once 'includes/dbh.php';
  include 'includes/crud.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="GET">
          <div class="form-group">
            <div class="form-label-group">
              <input type="user" name = 'user_name' id="user_name" class="form-control" placeholder="User name" required="required" autofocus="autofocus">
              <label for="inputEmail">User name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name = 'user_password' id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
       <!--   <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div> -->
          <button type="submit">Login</button>
        </form>

        <?php 
        $username = $_GET['user_name'];
        $password = $_GET['user_password'];
        $sql = "SELECT * FROM `user` WHERE user_name = '$username' AND user_password = '$password'";

        $result = $conn->query($sql);

        //if (!$result) {
        //trigger_error('Invalid query: ' . $conn->error);
        //}

        if ($result->num_rows > 0) {

        header('Location: index.html');
        } 
        
        else {
        echo "incorrect username or password please try again";
        }
        ?>
  <!--     <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
