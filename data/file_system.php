<?php

use DatosJson\Datos\Dato;

require_once __DIR__ . '/Datos.php';

$data = file_get_contents('data.json');

$json_data = json_decode($data, true);

// for($i = 0; $i < count($json_data); $i++){
//     print_r($json_data[$i]);
//     echo "<br><br>";
// }

$d1 = new Dato();
$d1->nombre = "Nicolas Riquelme";

$d1->printNombre();
