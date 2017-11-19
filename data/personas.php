<?php

class Persona{
    private $nombre;
    private $edad;
    private $profesion;

    /**
     * Persona constructor.
     * @param $nombre
     * @param $edad
     * @param $profesion
     */
    public function __construct($nombre, $edad, $profesion)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->profesion = $profesion;
    }

    public function getInfo(){
        return "nombre: $this->nombre. edad: $this->edad. profesion: $this->profesion";
    }

}