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
        if($con->createErab($izena, $abizena, $email, $pasahitza, $rola)){ 
            echo "insert";
        }else{echo "errorea";}
       
    }else{
        $con = new Model\MAErabiltzailea();
        if($con->updateErab($izena, $abizena, $email, $pasahitza, $rola, $id_erab)){
        echo "update";
        }else{echo "errorea";}
    }
}