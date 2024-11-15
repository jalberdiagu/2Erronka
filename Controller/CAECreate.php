<?php
require_once(__DIR__ . "/../Model/MAErabiltzailea.php");
header("Content-Type: application/json");

if(isset($_POST)){
    $id_erab = (int) $_POST["id_erab"];
    $izena = $_POST["izena"];
    $abizena = $_POST["abizena"];
    $email = $_POST["email"];
    $pasahitza = $_POST["pasahitza"];
    $rola = (int) $_POST["rola"];

    $result = [
        "tipo" => "nada"
    ];
    
    if(!isset($id_erab)){
        $kon = new Model\MAErabiltzailea();
        $kon->createErab($izena, $abizena, $email, $pasahitza, $rola);

        $result["tipo"] = "insert";

    }else{
        $kon = new Model\MAErabiltzailea();
        $kon->updateErab($izena, $abizena, $email, $pasahitza, $rola, $id_erab);
        $result["tipo"] = "update";
    }

    echo json_encode($result);
}