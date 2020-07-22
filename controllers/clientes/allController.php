<?php
require_once '../../models/Cliente.php';
require_once '../../models/fichaTecnica.php';

// ORM
$modCli = new Cliente();
$modFicha = new FichaTecnica();

$clientes = $modCli->getClientes();
$fichasTecnicas = $modFicha->getFichasTecnicas();

require_once '../../views/clientes/all.php';
