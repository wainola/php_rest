<?php

use Data\DataJSON\data;

require_once __DIR__ . "/data.php";

// Probando instancia el objeto.
// Requerimos el archivo JSON.
$data_json = file_get_contents("../data/data.json");
// Obtencion y decodificacion
$credenciales = json_decode(file_get_contents('./credentials.json'), true);
$json_data = json_decode($data_json, true);

$db_user = $credenciales["db"]["user"];
$db_pass = $credenciales["db"]["password"];

$db = new PDO(
    'mysql:host=127.0.0.1;dbname=php',
    $db_user,
    $db_pass
);

// Corriendo un query se prueba.
$rows = $db->query('SELECT * FROM data_json');
foreach($rows as $row){
    var_dump($row);
}

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