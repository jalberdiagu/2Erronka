<?php 
require_once("/../Model/Konexioa.php");

$data = file_get_contents("php://input");

$con = new Model\MAErabiltzailea();
$erabk = $con-> updateSelect($data);
echo json_encode($erabk);