<?php 

declare(strict_types=1);

//Show message if email or username allready exist
function check_register_errors(){
  if (isset($_SESSION['errors_signup'])) {
    $errors = $_SESSION['errors_signup'];

    // echo "<br>";

    foreach($errors as $error){
      echo '<span class= "duplicate_username">' . $error . '</span>';
    }
    unset($_SESSION['errors_signup']);
  } else if(isset($_GET["register"]) && $_GET["register"] === "success"){ 
    //OR $_GET['signup']
    echo '<br>';
    echo '<span class="form-success">Επιτυχής Εγρραφή</span>';
  }

}