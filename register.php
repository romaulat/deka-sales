<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>
<body>
  <section class="loginForm">
    <div class="login-sideImage">
      <div class="login-logo">
        <a href="index.php">
          <div class="logo-center">
            <img src="images/logo-deka.png" alt="deka-sales"><p class="logo-name">
          </div>
        </a>
          <p class="logo-name">
            Warlen Industrial Sales Corporation
          </p>
      </div>
    </div>

    <form action="#" method="post">
      <div class="container-login">
        <label for="first_name"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="first_name" required>

        <label for="last_name"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="last_name" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>

        <label for="confirm-pass"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="confirm-pass" required>

        <button type="submit">Register</button>
      </div>

      <div class="register-account">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
  </form>
  
</section>
</body>
</html>