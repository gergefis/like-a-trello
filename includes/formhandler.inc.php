<?php
// Check if the register data is correct
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST["user_register"];
  $password = $_POST["user_pass"];
  $email = $_POST["user_mail"];

  try {
    require_once "dbh.inc.php"
    
    // add user registration data to DB
    $query = "INSERT INTO users($username, $password, $email) VALUES($username, $password, $email)";

  } catch (\PDOException $e) {
      die("Query failed: ".$e->getMessage());
  }

// if registration failed return again to the signup page
}else {
  header("Location: ../signup.php")
}