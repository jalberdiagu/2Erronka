<?php 
require_once("Konexioa.php");

$data = file_get_contents("php://input");
require_once("/../Model/Konexioa.php");
$query = $pdo->prepare("SELECT * FROM erabiltzaileak WHERE id_erab = :id");
$query-> bindParam(":id", $data);
$query->execute();
$erantzuna = $query->fetch(PDO::FETCH_ASSOC);
echo json_encode($erantzuna);