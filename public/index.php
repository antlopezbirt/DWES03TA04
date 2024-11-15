<?php

require '../app/controllers/UserController.php';
require '../app/models/User.php';

include '../app/views/formulario.html';

$controlador = new UserController;

if(isset($_GET['accion'])) {

    $accion = strval($_GET['accion']);

    $usuario = call_user_func(array($controlador, $accion), $_GET['usuario']);

    $json = json_encode($usuario->jsonificar());

    var_dump($json);
}
// } elseif(isset($_GET['despedir'])) {
//     $usuario = $controlador->despedir($_GET['usuario']);
// }