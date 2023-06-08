<?php
var_dump($_GET);
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

              
            

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg-my-blue">
    <div class="container">
        <h1> Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
               
     
        <form class="form">
        <?php 
                $randomPassword = generatePassword($password_lenght); 
                echo $randomPassword; ?>

			<div class="mb-3 d-flex justify-items-center align-items-center ">
			  <label for="password" class="form-label w-50">Lunghezza password: </label>
			  <input type="text" class="form-control w-50" id="password" name="password">
			</div>
            <div class="w-100">
            <button type="submit" class="btn btn-primary">Invia</button>
			<a href="/php-strong-password-generator" class="btn btn-secondary">Annulla</a>
            </div>
			
		</form>
    </div>
    </div>
   
</body>
</html>