<?php
require_once '../../models/Vehiculo.php';
require_once '../../models/Cliente.php';
require_once '../../models/FichaTecnica.php';

// ORM
$modVehic = new Vehiculo();
$modCli = new Cliente();
$modFicha = new FichaTecnica();

$id = $_GET['id'];
$fichaTecnica = "";
$propietario = "";

if (isset($_POST['modificar'])) {
    $campos=explode("-",$_POST['fichaTecnicaPropietario']);
    $fichaTecnica = $campos[0];
    $propietario = $campos[1];
    $modVehic->update($id, $propietario, $fichaTecnica, $_POST['txtDiagnosis']);
    header("Location: ../../views/vehiculos/index.php");
} 
$vehiculo = $modVehic->getVehiculo($id);
$clientes = $modCli->getClientes();
$fichasTecnicas = $modFicha->getFichasTecnicas();
require_once '../../views/vehiculos/update.php';
