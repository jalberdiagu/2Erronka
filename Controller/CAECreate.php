<?php
if(isset($_POST)){
    $id_erab = $_POST["id_erab"];
    $izena = $_POST["izena"];
    $abizena = $_POST["abizena"];
    $email = $_POST["email"];
    $pasahitza = $_POST["pasahitza"];
    $rola = $_POST["rola"];

    require_once("/../Model/MAErabiltzailea.php");

    if(empty($_POST['id_erab'])){
        $con = new Model\MAErabiltzailea();
        $con->createErab($izena, $abizena, $email, $pasahitza, $rola);
        echo "insert";
    }else{
        $con = new Model\MAErabiltzailea();
        $con->updateErab($izena, $abizena, $email, $pasahitza, $rola, $id_erab);
        echo "update";
    }
}