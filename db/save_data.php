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

    // Iniciamos la insercion de los datos.
    $query = 'INSERT INTO data_json(indice, guid, isActive, balance, picture, age, eyeColor, name_data, gender, company, email, phone, address, about, registered, latitude, longitude) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

    // NOTE: insercion se lleva a caboa traves de un prepared statement.
    $statement = $db->prepare($query);
    $statement->bindParam(1, $data_to_db->getIndex());
    $statement->bindParam(2, $data_to_db->getGuid());
    $statement->bindParam(3, $data_to_db->getisActive());
    $statement->bindParam(4, $data_to_db->getBalance());
    $statement->bindParam(5, $data_to_db->getPicture());
    $statement->bindParam(6, $data_to_db->getAge());
    $statement->bindParam(7, $data_to_db->getEyeColor());
    $statement->bindParam(8, $data_to_db->getName());
    $statement->bindParam(9, $data_to_db->getGender());
    $statement->bindParam(10, $data_to_db->getCompany());
    $statement->bindParam(11, $data_to_db->getEmail());
    $statement->bindParam(12, $data_to_db->getPhone());
    $statement->bindParam(13, $data_to_db->getAddress());
    $statement->bindParam(14, $data_to_db->getAbout());
    $statement->bindParam(15, $data_to_db->getRegistered());
    $statement->bindParam(16, $data_to_db->getLatitude());
    $statement->bindParam(17, $data_to_db->getLongitude());

    $statement->execute();

    var_dump($statement->execute());
    echo "<br><br>";

}