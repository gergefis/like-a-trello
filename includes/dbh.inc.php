<!-- This file contains the mysqli PDO connector  -->
<?php
$dsn = "mysqli:host=localhost;dbname=gergefis_pli23";
$userName = "root";
$password = ""; // or root

try {
  // connect database
  $pdo = new PDO($dsn, $userName, $password);

  // Setting PDO functions
  $pdo-> setAttribute(PDO::ATTR_ERRORMODE, PDO::ATTR_ERRORMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e-> getMessage();
}
