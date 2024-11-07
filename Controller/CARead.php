<?php
$data = file_get_contents("php://input");
require_once("/../Model/Konexioa.php");
$query = $pdo->prepare("SELECT * FROM erabiltzaileak ORDER BY id_erab ASC");
$query->execute();

if($data!==""){
    $query = $pdo->prepare("SELECT * FROM erabiltzaileak WHERE id_erab LIKE '%".$data."%' OR izena LIKE '%".$data."%' OR abizena LIKE '%".$data."%' OR email LIKE '%".$data."%' OR pasahitza LIKE '%".$data."%' OR rola LIKE '%".$data."%'");
    $query->execute();
}
$erantzuna = $query->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($erantzuna);