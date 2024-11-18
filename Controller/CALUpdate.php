<?php
require_once(__DIR__ . "/../Model/MALiburua.php");

$data = (int) file_get_contents("php://input");

$kon = new Model\MALiburua();
$liburua = $kon->updateSelect($data);

echo json_encode($liburua);

$kon->closeKon();