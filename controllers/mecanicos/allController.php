<?php
require_once '../../models/Mecanico.php';

// ORM
$modMecanic = new Mecanico();

$mecanicos = $modMecanic->getMecanicos();

require_once '../../views/mecanicos/all.php';
