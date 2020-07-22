<?php
require_once '../../models/Cliente.php';
require_once '../../models/FichaTecnica.php';

// ORM
$modCli = new Cliente();
$modFicha = new FichaTecnica();

$id = $_GET['id'];

if (isset($_POST['modificar'])) {
    $modCli->update($id, $_POST['txtNombre'], $_POST['txtDni'], $_POST['fichaTecnica']);
    header("Location: ../../views/clientes/index.php");
} 
$cliente = $modCli->getCliente($id);
$fichasTecnicas = $modFicha->getFichasTecnicas();
require_once '../../views/clientes/update.php';
