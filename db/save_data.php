<?php

use Data\DataJSON\data;

require_once __DIR__ . "/data.php";

// Probando instancia el objeto.
// Requerimos el archivo JSON.
$data_json = file_get_contents("../data/data.json");
// Obtencion y decodificacion
$credenciales = json_decode(file_get_contents('./credentials.json'), true);
$json_data = json_decode($data_json, true);

var_dump($credenciales);

foreach($json_data as $data){
    // inicializacion del objeto.
    $data_to_db = new data(
        $data["_id"],
        $data["index"],
        $data["guid"],
        $data["isActive"] ? "true" : "false",
        $data["balance"],
        $data["picture"],
        $data["age"],
        $data["eyeColor"],
        $data["name"],
        $data["gender"],
        $data["company"],
        $data["email"],
        $data["phone"],
        $data["address"],
        $data["about"],
        $data["registered"],
        $data["latitude"],
        $data["longitude"]
    );

/*    var_dump($data_to_db);
    echo "<br><br>";*/

}