<?php
// Check if the register data is correct
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["user_register"]; 
  $password = $_POST["user_pwd"]; 
  $email = $_POST["user_mail"]; 
  

  try {
    require_once "dbh.inc.php";
    
    // INSERT user registration data to DB
    $query = "INSERT INTO users (name, password, email) VALUES (:username, :password, :email);";


    // create actualy statment
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":email", $email);

    $stmt->execute();

    // close the actualy statments and connection
    $pdo = null;
    $stmt = null;
    
    // Redirects the user to the homepage after successfull registration
    header("Location: ../index.php");

    die(); // OR exit(); if i have something that has not a connection inside of it
  } catch (\PDOException $e) {
      die("Query failed: ".$e->getMessage());
  }

// if registration failed return again to the signup page
}else {
  header("Location: ../register.php");
}