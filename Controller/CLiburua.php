<?php 
require(__DIR__. '/../Views/VLiburua.php');
require(__DIR__. '/../Model/MLiburuak.php');

$book=$_GET['book'];

$con = new Model\MLiburuak();
$libroGet = $con->getLiburua($book);


$vista= new VLiburua();
$vista->initHTML();
$vista->Libro($libroGet);
$vista->endHTML();