<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username_register"]; 
  $password = $_POST["user_pwd"]; 

try {
  require_once 'dbh.inc.php';
  require_once 'login_controller.php';
  require_once 'login_model.php';

  // ERROR HANDLERS
  $errors = [];

  

require_once 'config_session.php';
//Κρατάει στα πεδία της φόρμας τα δεδομένα που καταχώρησε ο χρήστης (για να μην τα ξανα γράφει)
  if ($errors) {
    $_SESSION["errors_signup"] = $errors;

    // $signupData = [
    // "username_register" => $username,
    //   "user_register" => $name,
    //   "user_mail" => $email,
    // ];
    // $_SESSION["signup_data"] = $signupData;

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
  die("Query Failed: ".$e->getMessage());
}

}
else{
  header("Location: ../index.php");
  die();
}