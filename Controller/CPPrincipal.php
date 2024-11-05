<?php 
require(__DIR__. '/../Views/VPPrincipal.php');
require(__DIR__. '/../Model/MLiburuak.php');

$con = new Model\MLiburuak();
$libros = $con->getLiburuak();

$vista= new VPPrincipal();
$vista->initHTML();
$vista->navbar();
$vista->carousel_hot($libros);
$vista->endHTML();