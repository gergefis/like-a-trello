<?php 
  declare(strict_types=1);


//BEGIN - Check in DB if username already exist
function get_username(object $pdo, string $username)
{
  $search_uname = "SELECT username FROM users WHERE username = :username;";
  $stmt = $pdo->prepare($search_uname);
  $stmt->bindParam(":username", $username);
  $stmt->execute();

  //return the result from DB after searching for same username
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function get_email(object $pdo, string $email)
{
  $search_email = "SELECT email FROM users WHERE email = :email;";
  $stmt = $pdo->prepare($search_email);
  $stmt->bindParam(":email", $email);
  $stmt->execute();

  //return the result from DB after searching for existing mail
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}
//END - Check in DB if username already exist

// crate user in DB after successfull registration
function set_user(object $pdo, string $username, string $name, string $password, string $email){
  $query = "INSERT INTO users (username, name, password, email) VALUES (:username, :name, :password, :email);";


  // create actualy statment
  $stmt = $pdo->prepare($query);

  // more secure settings for password
  $option = [
    'cost' => 12
  ];
  $hashedPwd = password_hash($password, PASSWORD_BCRYPT , $option);
  /**************************************************************** */
  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":password", $hashedPwd); //secure password
  $stmt->bindParam(":email", $email);

  $stmt->execute();
}