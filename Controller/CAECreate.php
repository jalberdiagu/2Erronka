<?php
require_once(__DIR__ . "/../Model/MAErabiltzailea.php");

if(isset($_POST)){
    $izena = $_POST["izena"];
    $abizena = $_POST["abizena"];
    $email = $_POST["email"];
    $pasahitza = $_POST["pasahitza"];
    $rola = $_POST["rola"];

    $prueba = [
        "tipo" => "nada"
    ];
    
    if(isset($_POST['id_erab'])){
        $con = new Model\MAErabiltzailea();
        $con->createErab($izena, $abizena, $email, $pasahitza, $rola);
<<<<<<< HEAD
        $prueba["tipo"] = "insert";
        
       
=======
        echo "insert";
>>>>>>> 9ebb5fad3f1a1c6b2693ca36d83aa70ce134ea36
    }else{
        $id_erab = $_POST["id_erab"];
        $con = new Model\MAErabiltzailea();
        $con->updateErab($izena, $abizena, $email, $pasahitza, $rola, $id_erab);
<<<<<<< HEAD
        $prueba["tipo"] = "update";
=======
        echo "update";
>>>>>>> 9ebb5fad3f1a1c6b2693ca36d83aa70ce134ea36
    }

    header("Content-Type: application/json");
    echo json_encode($prueba);
}