<?php
require(__DIR__ . '/../Views/VLiburuak.php');
require(__DIR__ . '/../Model/MLiburuak.php');


$con = new Model\MLiburuak();
$libros = $con->getLiburuak();
 


$vista = new VLiburuak();
$vista->initHTML();
$vista->navbar();
 if (isset($_GET['writer'])) { 
     $writer = $_GET['writer'];
     $librosIdaz = $con->getLiburuaIdaz($writer);
     $vista->Liburuak($librosIdaz);
 } else {
    $vista->Liburuak($libros);
 }

$vista->endHTML();