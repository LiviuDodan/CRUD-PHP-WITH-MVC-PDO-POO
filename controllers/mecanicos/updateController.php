<?php
require_once '../../models/Mecanico.php';
require_once '../../models/Cliente.php';

// ORM
$modMecanic = new Mecanico();
$modCli = new Cliente();

$id = $_GET['id'];

if (isset($_POST['modificar'])) {
    $modMecanic->update($id, $_POST['nombreCliente'], $_POST['txtNombreMecanico']);
    header("Location: ../../views/mecanicos/index.php");
} 
$mecanico = $modMecanic->getMecanico($id);
$clientes = $modCli->getClientes();
require_once '../../views/mecanicos/update.php';
