<?php 
require_once(__DIR__ . "/../Model/MAErabiltzailea.php");

$data = (int) file_get_contents("php://input");

$kon = new Model\MAErabiltzailea();
$erabk = $kon->updateSelect($data);

if (!empty($erabk)) {
    echo json_encode($erabk);
} else {
    echo json_encode(["error" => "Ez da erregistrorik aurkitu."]);
}

$kon->closeKon();
