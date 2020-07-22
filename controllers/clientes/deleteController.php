<?php
require_once '../../models/Cliente.php';

// ORM
$modCli = new Cliente();

$id = $_GET['id'];

$modCli->delete($id);
header("Location: ../../views/clientes/index.php");

