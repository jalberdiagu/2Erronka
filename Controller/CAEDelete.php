<?php
$data = file_get_contents("php://input");
require_once("/../Konexioaa.php");
$query = $pdo->prepare("DELETE * FROM erabiltzaileak WHERE id_erab = :id");
$query-> bindParam(":id", $data);
$query->execute();
echo "delete";
