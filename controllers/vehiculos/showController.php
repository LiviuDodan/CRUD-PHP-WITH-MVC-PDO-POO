<?php
require_once '../../models/Vehiculo.php';
require_once '../../models/FichaTecnica.php';

// ORM
$modVehic = new Vehiculo();
$modFicha = new FichaTecnica();

$id = $_GET['id'];
$vehiculo = $modVehic->getVehiculo($id);
$fichasTecnicas = $modFicha->getFichasTecnicas();

require_once '../../views/vehiculos/show.php';
