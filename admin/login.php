<?php

include '../conn.php';
session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    // check if the user is an admin
    $select = mysqli_query($conn, "SELECT * FROM `account` WHERE email = '$email' AND password = '$pass'");

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        
        if ($row['is_admin'] == 0) {
            $_SESSION['is_admin'] = true;
            header('location: PO.php'); // redirect to admin dashboard
        } else {
            $_SESSION['is_admin'] = false;
            header('location: index.php'); // redirect to user dashboard
        }
        exit();
    } else {
        $error[] = 'Incorrect email or password!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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
    <div class="login-box">
        <h1>Login Here</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="textbox">
            <img src="../images/deka-logo.png"  style="position: absolute; top: -15px; right: 1px; width: 40px; height: 40px;">
            <label for="email">Email:</label>
            
                <input type="text" placeholder="deka@gmail.com" name="email" value="" required>
            </div>

            <div class="textbox">
            <label for="password">Password:</label>
                
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>

            <button type="submit" name="submit" class="btn btn-danger btn-block">Login</button>

            <p class="signup-link">Don't have an account? <a href="register.php">Sign up here</a></p>
        </form>
    </div>
</body>
</html>
