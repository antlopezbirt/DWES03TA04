<?php

class User {

    private $nombre;
    private $texto;

    function __construct($nombre, $texto) {
        $this->nombre = $nombre;
        $this->texto = $texto;
    }

    function jsonificar() {
        $json = array();
        foreach ($this as $key => $value) {
            $json[$key] = $value;
        }
        return $json;
    }
}