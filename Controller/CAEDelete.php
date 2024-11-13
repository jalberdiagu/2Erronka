<?php
require_once(__DIR__ . "/../Model/MAErabiltzailea.php");

$data = (int) file_get_contents("php://input");

$con = new Model\MAErabiltzailea();
$con-> deleteErab($data);
echo "delete";

$con->closeKon();

