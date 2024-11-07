<?php 
require(__DIR__. '/../Views/VLiburuak.php');
require(__DIR__. '/../Model/MLiburuak.php');

$con = new Model\MLiburuak();
$libros = $con->getLiburuak();


$vista= new VLiburuak();
$vista->initHTML();
$vista->navbar();
$vista->Liburuak($libros);
$vista->endHTML();