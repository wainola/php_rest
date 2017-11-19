<?php

// Trabajando con archivos primero.

require './personas.php';

$p1 = new Persona("nicolas", 29, "programacion");

echo $p1->getInfo();

echo "<br>";

// Recordatorio basico de ciclos para php.

$arr1 = [
    [
        "nombre" => "nicolas",
        "apellido" => "riquelme",
        "edad" => 29
    ],
    [
        "nombre" => "francisca",
        "apellido" => "romero",
        "edad" => 28
    ]
];

$i = 0;
while ($i < 2){
    print $arr1[$i]['nombre'] . "<br>";
    $i++;
}

// Tambien se puede usar el foreach.

foreach($arr1 as $data){
    echo $data['nombre'] . "<br>";
}