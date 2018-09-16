<?php

require_once 'filesController.php';
function createUser($name, $lastName, $username, $email, $date, $password, $comfirmPassword)
{
    $user = [
        "name" => $name,
        "lastName" => $lastName, 
        "username" => $username,
        "email" => $email,
        "date" => $date,
        "password" => $password,
        "comfirmPassword"=>$comfirmPassword,
    ];

    return $user;
}



?>