<?php


class UserController {

    function __construct() {

    }

    public function saludar($username) {

        $mensaje = "Hola, soy " . $username;
        $usuario = new User($username, $mensaje);

        return $usuario;
    }

    public function despedir($username) {

        $mensaje = "Soy " . $username . " adiós";
        $usuario = new User($username, $mensaje);

        return $usuario;
    }
}