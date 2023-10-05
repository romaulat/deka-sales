<?php
include '../conn.php';
session_start();

if (isset($_POST['submit'])) {
   $userName = mysqli_real_escape_string($conn, $_POST['username']);
   $firstName = mysqli_real_escape_string($conn, $_POST['first_name']);
   $lastName = mysqli_real_escape_string($conn, $_POST['last_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `account` WHERE email = '$email' AND password = '$pass'") or die('Query failed');

   if (mysqli_num_rows($select) > 0) {
      $error[] = 'User already exists';
   } else {
      if ($pass != $cpass) {
         $error[] = 'Passwords do not match!';
      } else {
         $insert = mysqli_query($conn, "INSERT INTO `account`(username, first_name, last_name, email, password, is_admin) VALUES('$userName', '$firstName', '$lastName', '$email', '$pass', '1')") or die ('Query failed');
         header('location:login.php');
         exit();
      }    
   }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<style>
		body {
			background: linear-gradient(to bottom, #0B486B, #7FA8CF);
			min-height: 100vh;
			font-family: Arial, sans-serif;
		}
	</style>
</head>
<body>
	<div class="signup-box">
		<h1>Create an Account</h1>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="textbox">
				<img src="../images/deka-logo.png" style="position: absolute; top: -15px; right: 1px; width: 40px; height: 40px;">
				<label for="username">Username:</label>	
				<input type="text" placeholder="" name="username" value="" required>
			</div>

			<div class="textbox">
				<label for="first_name">First Name:</label>	
				<input type="text" placeholder="" name="first_name" value="" required>
			</div>

			<div class="textbox">
				<label for="last_name">Last Name:</label>	
				<input type="text" placeholder="" name="last_name" value="" required>
			</div>

			<div class="textbox">
				<label for="email">Email:</label>	
				<input type="email" placeholder="ex. deka@gmail.com" name="email" value="" required>
			</div>

			<div class="textbox">
				<label for="password">Password:</label>	
				<input type="password" placeholder="" name="password" value="" required>
			</div>

			<div class="textbox">
				<label for="cpassword">Confirm Password:</label>	
				<input type="password" placeholder="" name="cpassword" value="" required>
			</div>

			<button type="submit" class="btn btn-danger btn-block" name="submit">Register</button>

				<p class="signup-link">Already have an account? <a href="login.php">Login here</a></p>
			
		</form>
	</div>
</body>
</html>
