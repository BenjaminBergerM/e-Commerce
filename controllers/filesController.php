<?php
function saveUser($user)
{
    $userJson = json_encode($user);
    file_put_contents('users.txt', $userJson . PHP_EOL, FILE_APPEND);
}

function bringUsers()
{
    $arrayusers = [];
    $file = fopen('users.txt', 'r');
    while(($linea = fgets($file)) !== false) {
        $arrayusers[] = json_decode($linea, true);
    }
    fclose($file);

    return $arrayusers;
}

function bringUser($email)
{
    $user = null;

    $file = fopen('users.txt', 'r');

    while(($line = fgets($file)) !== false) {
        $actualUser = json_decode($line, true);

        if ($actualUser['email'] === $email) {
            $user = $actualUser;
            break;
        }
    }

    fclose($file);

    return $user;
}

function saveProfilePic($pic) {
    if($pic["error"] === UPLOAD_ERR_OK){
        $nombre = $pic["name"];
        $file = $pic["tmp_name"];

        $ext = pathinfo($nombre, PATHINFO_EXTENSION);

        $id = uniqid();
        $myFile = realpath(dirname(__FILE__)."/..");
        $myFile = $myFile . "\files\\$id.$ext";

        move_uploaded_file($file, $myFile);

        return "$id.$ext";
    }
}

?>