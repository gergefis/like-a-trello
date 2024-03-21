<?php
declare(strict_types=1);

function get_user(object $pdo, string $username, string $password){
  $query = "SELECT * FROM users WHERE username = :username AND password = :password;
  ";

  // create actualy statment
  $stmt = $pdo->prepare($query);

  // more secure settings for password
  $option = [
    'cost' => 12
  ];
  $hashedPwd = password_hash($password, PASSWORD_BCRYPT , $option);
  /**************************************************************** */
  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":password", $hashedPwd); //secure password

  $stmt->execute();
}