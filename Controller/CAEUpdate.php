<?php 
require_once(__DIR__ . "/../Model/MAErabiltzailea.php");

$data = (int) file_get_contents("php://input");

$con = new Model\MAErabiltzailea();
$erabk = $con->updateSelect($data);

if (!empty($erabk)) {
    echo json_encode($erabk);
} else {
    echo json_encode(["error" => "No se encontró ningún registro."]);
}

$con->closeKon();
