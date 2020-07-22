<?php
require_once '../../models/FichaTecnica.php';

// ORM
$modFicha = new FichaTecnica();

$id = $_GET['id'];
if (isset($_POST['modificar'])) {
    $modFicha->update($id, $_POST['tipo'], $_POST['txtMarca'], $_POST['txtModelo'], $_POST['txtMatricula'], $_POST['txtAnyo']);
    header("Location: ../../views/fichasTecnicas/index.php");
} else {
    $fichaTecnica = $modFicha->getFichaTecnica($id);
    require_once '../../views/fichasTecnicas/update.php';
}
