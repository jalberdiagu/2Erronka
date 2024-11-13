<?php
require_once(__DIR__ . "/../Model/MAErabiltzailea.php");
header("Content-Type: application/json");

if(isset($_POST)){
    $izena = $_POST["izena"];
    $abizena = $_POST["abizena"];
    $email = $_POST["email"];
    $pasahitza = $_POST["pasahitza"];
    $rola = (int) $_POST["rola"];

    $prueba = [
        "tipo" => "nada"
    ];
    
    if(isset($_POST['id_erab'])){
        $con = new Model\MAErabiltzailea();
        $con->createErab($izena, $abizena, $email, $pasahitza, $rola);

        $prueba["tipo"] = "insert";

    }else{
        $id_erab = (int) $_POST["id_erab"];
        $con = new Model\MAErabiltzailea();
        $con->updateErab($izena, $abizena, $email, $pasahitza, $rola, $id_erab);

        $prueba["tipo"] = "update";
    }

    echo (json_encode($prueba));
}