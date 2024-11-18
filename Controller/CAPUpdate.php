<?php
require_once(__DIR__ . "/../MEskaera.php");

$data = (int) file_get_contents("php://input");

$kon = new Model\MEskaera();
$eskaerak = $kon-> updateSelect($data);

if (!empty($eskaerak)) {
    echo json_encode($eskaerak);
} else {
    echo json_encode(["error" => "Ez da erregistrorik aurkitu."]);
}

$kon->closeKon();

