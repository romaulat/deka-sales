<?php
  date_default_timezone_set('Asia/Manila');
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "deka-sales";

  //Create Connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  //Check Connection
  if ($conn->connect_error){
    die("Connection Failed: " . $connect->error);
  }

?>