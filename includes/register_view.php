<?php 
declare(strict_types=1);

//Show message if email or username allready exist
function check_register_errors()
{
  if (isset($_SESSION['errors_signup'])) {
    $errors = $_SESSION['errors_signup'];

    

    foreach($errors as $error){
      echo "<br>";
      echo '<span class= "duplicate_username">' . $error . '</span>';
      echo "<br>";
    }

    unset($_SESSION['errors_signup']);

  } else if(isset($_GET["signup"]) && $_GET["signup"] === "success"){ 
    
    echo '<br>';
    echo '<span class="form-success">Επιτυχής Εγγραφή!</span>';
  }

}