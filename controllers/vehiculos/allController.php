<?php
require_once '../../models/Vehiculo.php';
require_once '../../models/FichaTecnica.php';

// ORM
$modVehic = new Vehiculo();
$modFicha = new FichaTecnica();

$vehiculos = $modVehic->getVehiculos();
$fichasTecnicas = $modFicha->getFichasTecnicas();

require_once '../../views/vehiculos/all.php';
