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
        <label for="user_name"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="user_name" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>

        <button type="submit">Login</button>
      </div>

      <div class="register-account">
        <p>Don't have an account yet? <a href="register.php">Register</a></p>
      </div>
  </form>
  
</section>
</body>
</html>