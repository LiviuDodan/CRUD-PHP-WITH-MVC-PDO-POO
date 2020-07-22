<?php
require_once '../../models/Cliente.php';
require_once '../../models/FichaTecnica.php';
// ORM
$modCli = new Cliente();
$modFicha = new FichaTecnica();

$clientes = $modCli->getClientes();
$fichasTecnicas = $modFicha->getFichasTecnicas();

$nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
$dni = isset($_POST['txtDni']) ? $_POST['txtDni'] : "";
$fichaTecnicaCliente = isset($_POST['fichaTecnica']) ? $_POST['fichaTecnica'] : "";

if (isset($_POST['crear'])) {
    switch ($modCli->create($nombre, $dni, $fichaTecnicaCliente)) {
        case 0:
            header("Location: ../../views/clientes/index.php");
            break;
        case 1:
            $mensaje = "Debes introducir el dni";
            break;
        case 2:
            $mensaje = "Debes introducir el nombre";
            break;
        default:
            $mensaje = "";
            break;
    }
} else {
    $mensaje = "";
}

require_once '../../views/clientes/create.php';
