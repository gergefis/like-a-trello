<?php
// Check if the users data is correct

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["user_register"]; 
  $username = $_POST["username_register"]; 
  $password = $_POST["user_pwd"]; 
  $email = $_POST["user_mail"]; 

  try {
    require_once 'dbh.inc.php';
    require_once 'register.model.php';
    require_once 'register.view.php';
    require_once 'register.controller.php';

  //BEGIN --  Check if username or email exist
  // ****************************************
      // ERROR HANDLERS
      $errors = array();
      // Check if username exist in DB
      if(is_username_taken($pdo, $username))
      {
        $errors['username_taken'] = "To $username χρησιμποιείται ήδη! Επιλέξτε διαφορετικό.";
      }
      //Check if we had already user with the same email
      if( is_email_registered($pdo, $email))
      {
        $errors['email_used'] = "To $email χρησιμποιείται ήδη! Επιλέξτε διαφορετικό.";
      }

  require_once 'config_session.php';
      if ($errors) {
        $_SESSION['errors_signup'] = $errors;

        $signupData = [
          "user_register" => $name,
          "username_register" => $username,
          "user_mail" => $email,
        ];
        $_SESSION['signup_data'] = $signupData;

        header("Location: ../register.php");
        die();
      }
  //END --  Check if username or email allready exist
  // ****************************************

  //Submit new user to DB
    create_user($pdo, $name, $username, $password, $email);
    
    header("Location: ../index.php?register=success");

    // close the actualy statments and connection
    $pdo = null;
    $stmt = null;
    die(); 
     } catch (PDOException $e) {
      die("Query failed: ".$e->getMessage());
  }
}

// if registration failed return again to the signup page
else {
  header("Location: ../register.php");
}