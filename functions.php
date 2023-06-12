<?php
$password_lenght = $_GET['password'] ?? false;


function generatePassword($password_lenght){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.!*+-';
    $password ='';

    $characterCount = strlen($characters);
    for ($i = 0; $i <$password_lenght; $i++) {
      $index = rand(0, $characterCount - 1);
      $password .= $characters[$index];
    }
  
    return $password;
}


