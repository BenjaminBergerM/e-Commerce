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

function saveProfilePic($pic) {
    if($pic["error"] === UPLOAD_ERR_OK){
        $nombre = $pic["name"];
        $archivo = $pic["tmp_name"];

        $ext = pathinfo($nombre, PATHINFO_EXTENSION);

        $id = uniqid();
        $miArchivo = realpath(dirname(__FILE__)."/..");
        $miArchivo = $miArchivo . "\archivos\\$id.$ext";

        move_uploaded_file($archivo, $miArchivo);

        return "$id.$ext";
    }
}

?>