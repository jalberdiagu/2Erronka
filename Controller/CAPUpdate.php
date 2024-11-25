<?php
require_once(__DIR__ . "/../MEskaera.php");

$data = (int) file_get_contents("php://input");

$kon = new Model\MEskaera();
$eskaerak = $kon-> updateSelect($data);

    echo json_encode($eskaerak);


$kon->closeKon();

