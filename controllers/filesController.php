<?php
function saveUser($user)
{
    $userJson = json_encode($user);
    file_put_contents('users.txt', $userJson . PHP_EOL, FILE_APPEND);
}
function traerusers()
{
    $arrayusers = [];
    $archivo = fopen('users.txt', 'r');
    while(($linea = fgets($archivo)) !== false) {
        $arrayusers[] = json_decode($linea, true);
    }
    fclose($archivo);

    return $arrayusers;
}


function bringUser($email)
{
    $user = null;

    $archivo = fopen('users.txt', 'r');

    while(($line = fgets($archivo)) !== false) {
        $actualUser = json_decode($line, true);

        if ($actualUser['email'] === $email) {
            $user = $actualUser;
            break;
        }
    }

    fclose($archivo);

    return $user;
}












?>