<?php


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