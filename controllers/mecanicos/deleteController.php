<?php
require_once '../../models/Mecanico.php';

// ORM
$modMecanic = new Mecanico();

$id = $_GET['id'];

$modMecanic->delete($id);
header("Location: ../../views/mecanicos/index.php");

