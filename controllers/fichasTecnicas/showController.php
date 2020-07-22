<?php
require_once '../../models/FichaTecnica.php';

// ORM
$modFicha = new FichaTecnica();

$id = $_GET['id'];
$fichaTecnica = $modFicha->getFichaTecnica($id);

require_once '../../views/fichasTecnicas/show.php';
