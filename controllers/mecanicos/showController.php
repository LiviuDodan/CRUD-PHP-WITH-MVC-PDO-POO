<?php
require_once '../../models/Mecanico.php';

// ORM
$modMecanic = new Mecanico();

$id = $_GET['id'];
$mecanico = $modMecanic->getMecanico($id);

require_once '../../views/mecanicos/show.php';
