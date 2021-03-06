<?php


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

function saveProfilePic($pic) {
    if($pic["error"] === UPLOAD_ERR_OK){
        $nombre = $pic["name"];
        $file = $pic["tmp_name"];

        $ext = pathinfo($nombre, PATHINFO_EXTENSION);

        $id = uniqid() . '.' . $ext;
        $myFile = realpath(dirname(__FILE__)."/..");
        $myFile = $myFile . "/archivos/";
        $myFile = $myFile . $id;

        move_uploaded_file($file, $myFile);

        return $id;
    }
}

?>