<?php
require_once '../../models/FichaTecnica.php';

// ORM
$modFicha = new FichaTecnica();

$id = $_GET['id'];

$modFicha->delete($id);
header("Location: ../../views/fichasTecnicas/index.php");

