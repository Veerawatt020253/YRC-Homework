<?php

// Database credentials
$servername = "localhost";
$database = "homework";
$username = "root";
$password = "";

try {
  // Create a PDO connection
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  // Set error handling
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "<script>console.log('Connected successfully')</script>";
  $_SESSION['conn'] = true;
  echo "<script>console.log()</script>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// Close the connection


?>
