<?php

require_once 'filesController.php';

// Creamos un array que va a representar a nuestro usuario y lo devolvemos.
function crearUsuario($username, $email, $password, $fotoPerfil)
{
    $usuario = [
        "username" => $username,
        "email" => $email,
        "password" => $password,
        "fotoPerfil" => guardarFoto($fotoPerfil)
    ];

    return $usuario;
}



?>