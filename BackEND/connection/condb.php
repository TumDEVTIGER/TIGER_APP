<?php
    header("Access-Control-Allow-Origin: *");
    $servername = "172.16.0.254";
    $username = "admin";
    $password = "9itonly";
    $DB = "member";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$DB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
} 