<?php

// Usando Namespaces en php.
/*
Namespaces => actuan como rutas en un sistema de ficheros. Permiten en este caso tener muchas clases con el mismo nombre pero una vez definidas los namespaces, es posible determinar cual de todas se esta instanciado.
*/

// Setea el namespace de nuestra clase.
// El nombre completo de la clase sera DatosJson\Datos\Dato
namespace DatosJson\Datos;

class Dato{
    public $nombre;

    public function printNombre(){
        echo $this->nombre;
    }
}