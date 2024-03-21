<?php 

declare(strict_types=1);

function is_username_taken(object $pdo, string $username)
{
  if (get_username($pdo, $username)) {
    return true;
  }else{
    return false;
  }
  
}
function is_email_registered(object $pdo, string $email)
{
  if (get_email($pdo, $email)) {
    return true;
  }else{
    return false;
  }
}
function create_user(object $pdo, string $username, string $name, string $password, string $email)
{
  set_user($pdo, $username, $name, $password, $email);
}