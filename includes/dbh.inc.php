<!-- This file contains the mysqli PDO connector  -->
<?php
$dsn = "mysql:host=localhost;dbname=gergefis_pli23";
$userName = "root";
$password = ""; 

try {
  // connect database
  $pdo = new PDO($dsn, $userName, $password);

  // Setting PDO functions
  $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e-> getMessage();
}
