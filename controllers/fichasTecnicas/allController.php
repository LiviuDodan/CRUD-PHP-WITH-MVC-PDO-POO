<?php
require_once '../../models/FichaTecnica.php';

// ORM
$modFicha = new FichaTecnica();

$fichasTecnicas = $modFicha->getFichasTecnicas();

require_once '../../views/fichasTecnicas/all.php';
