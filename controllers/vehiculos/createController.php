<?php
require_once '../../models/Vehiculo.php';
require_once '../../models/Cliente.php';
require_once '../../models/FichaTecnica.php';

// ORM
$modVehic = new Vehiculo();
$modCli = new Cliente();
$modFicha = new FichaTecnica();

$vehiculos = $modVehic->getVehiculos();
$clientes = $modCli->getClientes();
$fichasTecnicas = $modFicha->getFichasTecnicas();

$diagnosis = isset($_POST['txtDiagnosis']) ? $_POST['txtDiagnosis'] : "";
$fichaTecnica = "";
$propietario = "";

if (isset($_POST['crear'])) {
    if (isset($_POST['propietario'])){
        $campos=explode("-",$_POST['fichaTecnicaPropietario']);
        $fichaTecnica = $campos[0];
        $propietario = $campos[1];
    }
    switch ($modVehic->create($propietario, $fichaTecnica, $diagnosis)) {
        case 0:
            header("Location: ../../views/vehiculos/index.php");
            break;
        case 1:
            $mensaje = "Debes introducir la diagnosis del vehiculo";
            break;
        case 2:
            $mensaje = "Debes introducir el nombre del propietario";
            break;
        default:
            $mensaje = "";
            break;
    }

} else {
    $mensaje = "";
}

require_once '../../views/vehiculos/create.php';
