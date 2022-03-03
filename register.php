
<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account ($con);

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");

  function getInputValue($name) {
    if(isset($_POST [$name])) {
      echo $_POST[$name];
    }
  }
 ?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Audivilo - Developed by L Cavalcanti</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
  </head>
  <body>
    <h1>Register your Account</h1>


    <div id="inputContainer">
        <form id="loginForm"  action="register.php" method="POST" >
            <h2> Login to your account </h2>
            <p>
              <label for="loginUsername"> Username</label>
              <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g leo_cavalcanti"  required>
            </p>
            <p>
              <label for="loginPassword"> Password</label>
              <input id="loginPassword" name="loginPassword" type="password" required>
            </p>
            <button type="submit" name="loginButton">LOGIN </button>
        </form>

        <form id="registerForm"  action="register.php" method="POST" >
            <h2> Create your account </h2>

            <p>
              <?php echo $account->getError(Constants:: $usernameCharacters);?>
              <label for="username"> Username</label>
              <input id="username" name="username" type="text" placeholder="e.g leo_cavalcanti" value="<?php getInputValue('username') ?>"required>
            </p>

            <p>
              <?php echo $account->getError(Constants:: $firstNameCharacters);?>
              <label for="firstName"> First Name</label>
              <input id="firstName" name="firstName" type="text" placeholder="e.g Leo"value="<?php getInputValue('firstName') ?>" required>
            </p>

            <p>
              <?php echo $account->getError(Constants:: $lastNameCharacters);?>
              <label for="lastName"> Last Name</label>
              <input id="lastName" name="lastName" type="text" placeholder="Cavalcanti" value="<?php getInputValue('lastName') ?>"required>
            </p>

            <p>
              <?php echo $account->getError(Constants:: $emailsDoNotMatch);?>
              <?php echo $account->getError(Constants:: $emailInvalid);?>
              <label for="email"> Email</label>
              <input id="email" name="email" type="email" placeholder="my@email.com" value="<?php getInputValue('email') ?>"required>
            </p>
            <p>
              <label for="email2"> Confirm Email</label>
              <input id="email2" name="email2" type="email" placeholder="my@email.com" value="<?php getInputValue('email2') ?>"required>
            </p>
            <p>
              <?php echo $account->getError(Constants:: $passwordsDoNotMatch);?>
              <?php echo $account->getError(Constants:: $passwordDoNotAlphanumeric);?>
              <?php echo $account->getError(Constants:: $passwordCharacters);?>
              <label for="password"> Password</label>
              <input id="password" name="password" type="password" placeholder="Your Password" required>
            </p>

            <p>
              <label for="password2">Confirm Password</label>
              <input id="password2" name="password2" type="password" placeholder="Confirm your password" required>
            </p>

            <button type="submit" name="registerButton">SIGN UP </button>

        </form>

    </div>
  </body>
</html>
