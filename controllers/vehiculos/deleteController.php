<?php
require_once '../../models/Vehiculo.php';

// ORM
$modVehic = new Vehiculo();

$id = $_GET['id'];

$modVehic->delete($id);
header("Location: ../../views/vehiculos/index.php");

