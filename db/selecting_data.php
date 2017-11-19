<?php

// Modulo que selecciona los datos y genera el reporte excel.
// Buscamos las credenciales para obtener acceso a la base de datos.
$credenciales = json_decode(file_get_contents('./credentials.json'), true);

$db_user = $credenciales["db"]["user"];
$db_pass = $credenciales["db"]["password"];

// Generamos la conexicion con le PDO.
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=php',
    $db_user,
    $db_pass
);

// Generamos un query de prueba.
$filas = $db->query('SELECT * FROM data_json');
foreach($filas as $fila){
    var_dump($fila);
    echo "<br><br>";
}

// var_dump($credenciales);