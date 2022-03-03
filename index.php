<?php
include("includes/config.php");

// session_destroy();Logout manually - temporary replacement for Logout button.


if(isset( $_SESSION['userLoggedIn'])){
  $userLoggedIn = $_SESSION['userLoggedIn'];

}
else {
  header("Location: register.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Audivilo - Developed by L Cavalcanti</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
  </head>
  <body>
    <h1>Hello! </h1>
	<!-- <script src="index.js"></script> -->
  <div id="inputContainer">
      <form id="loginForm"  action="register.php" method="post" >
          <h2> Login to your account </h2>
          <p>
            <label for="loginUsername"> Username</label>
            <input id"loginUsername" name="loginUsername" type="text" placeholder="e.g leo_cavalcanti" required>
          </p>
          <p>
            <label for="loginPassword"> Password</label>
            <input id"loginPassword" name="loginPassworde" type="password" required>
          </p>
          <button type="submit" name="loginButton">LOGIN </button>
      </form>

  </div>
  </body>
</html>
