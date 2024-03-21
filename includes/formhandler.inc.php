<?php
// Check if the users data is correct

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username_register"]; 
  $name = $_POST["user_register"]; 
  $email = $_POST["user_mail"]; 
  $password = $_POST["user_pwd"]; 

  try {
    require_once 'dbh.inc.php';
    require_once 'register_model.php';
    require_once 'register_controller.php';

  //BEGIN --  Check if username or email exist
  // ****************************************
      // ERROR HANDLERS
      $errors = [];

      // Check if username exist in DB
      if(is_username_taken($pdo, $username))
      {
        $errors['username_taken'] = "To $username χρησιμποιείται ήδη! Επιλέξτε διαφορετικό.";
      }
      //Check if we had already user with the same email
      if( is_email_registered($pdo, $email))
      {
        $errors['email_used'] = "To $email χρησιμποιείται ήδη.";
      }

  require_once 'config_session.php';

//Κρατάει στα πεδία της φόρμας τα δεδομένα που καταχώρησε ο χρήστης σε περίπτωση λανθασμένης εγγραφής (για να μην τα ξανα γράφει)
      if ($errors) {
        $_SESSION["errors_signup"] = $errors;

        $signupData = [
        "username_register" => $username,
          "user_register" => $name,
          "user_mail" => $email,
        ];
        $_SESSION["signup_data"] = $signupData;

        header("Location: ../register.php");
        die();
      }
  //END --  Check if username or email allready exist
  // ****************************************
   
  //Submit new user to DB
    create_user($pdo,  $username, $name, $password, $email);
    
    header("Location: ../register.php?signup=success");

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