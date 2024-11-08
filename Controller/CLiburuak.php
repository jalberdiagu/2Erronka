<?php
require(__DIR__ . '/../Views/VLiburuak.php');
require(__DIR__ . '/../Model/MLiburuak.php');


$con = new Model\MLiburuak();
$libros = $con->getLiburuak();
$librosIdaz = $con->getLiburuaIdaz($writer);


$vista = new VLiburuak();
$vista->initHTML();
$vista->navbar();
if (isset($_GET['idazlea'])) {
    $writer = $_GET['idazlea'];
    $vista->Liburuak($librosIdaz);
} else {
    $vista->Liburuak($libros);
}

$vista->endHTML();