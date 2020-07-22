<?php
require_once '../../models/Mecanico.php';
require_once '../../models/Cliente.php';

// ORM
$modMecanic = new Mecanico();
$modCli = new Cliente();

$mecanicos = $modMecanic->getMecanicos();
$clientes = $modCli->getClientes();

$nombreCliente = isset($_POST['nombreCliente']) ? $_POST['nombreCliente'] : "";
$nombreMecanico = isset($_POST['txtNombreMecanico']) ? $_POST['txtNombreMecanico'] : "";

if (isset($_POST['crear'])) {
    switch ($modMecanic->create($nombreCliente, $nombreMecanico)) {
        case 0:
            header("Location: ../../views/mecanicos/index.php");
            break;
        case 1:
            $mensaje = "Debes introducir el nombre del mecánico";
            break;
        case 2:
            $mensaje = "Debes introducir el nombre del cliente";
            break;
        default:
            $mensaje = "";
            break;
    }
} else {
    $mensaje = "";
}

require_once '../../views/mecanicos/create.php';
