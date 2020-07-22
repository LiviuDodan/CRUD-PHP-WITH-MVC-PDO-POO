<?php
require_once '../../models/Cliente.php';
require_once '../../models/FichaTecnica.php';

// ORM
$modCli = new Cliente();
$modFicha = new FichaTecnica();

$id = $_GET['id'];
$cliente = $modCli->getCliente($id);
$fichasTecnicas = $modFicha->getFichasTecnicas();

require_once '../../views/clientes/show.php';
