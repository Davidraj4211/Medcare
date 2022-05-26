<?php
  
$servername = "localhost";
$username = "root";
$password = "root";

try {
  $connect = new PDO("mysql:host=$servername;dbname=medcom",$username, $password);
  // set the PDO error mode to exception
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>


