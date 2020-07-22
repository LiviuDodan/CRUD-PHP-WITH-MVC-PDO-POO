<?php
require_once '../../models/FichaTecnica.php';

// ORM
$modFicha = new FichaTecnica();

$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "";
$marca = isset($_POST['txtMarca']) ? $_POST['txtMarca'] : "";
$modelo = isset($_POST['txtModelo']) ? $_POST['txtModelo'] : "";
$matricula = isset($_POST['txtMatricula']) ? $_POST['txtMatricula'] : "";
$anyo = isset($_POST['txtAnyo']) ? $_POST['txtAnyo'] : "";

if (isset($_POST['crear'])) {
    switch ($modFicha->create($tipo,$marca,$modelo,$matricula,$anyo)) {
        case 0:
            header("Location: ../../views/fichasTecnicas/index.php");
            break;
        case 1:
            $mensaje = "Debes introducir el año";
            break;
        case 2:
            $mensaje = "Debes introducir la matrícula";
            break;
        case 3:
            $mensaje = "Debes introducir el modelo";
            break;
        case 4:
            $mensaje = "Debes introducir la marca";
            break;
        default:
            $mensaje = "";
            break;
    }
} else {
    $fichasTecnicas = $modFicha->getFichasTecnicas();
    $mensaje = "";
}

require_once '../../views/fichasTecnicas/create.php';
