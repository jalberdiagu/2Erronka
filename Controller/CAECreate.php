<?php
if(isset($_POST)){
    $izena = $_POST["izena"];
    $abizena = $_POST["abizena"];
    $email = $_POST["email"];
    $pasahitza = $_POST["pasahitza"];
    $rola = $_POST["rola"];

    require_once("/../Konexioaa.php");
    if(empty($_POST['id_erab'])){
        $query = $pdo->prepare('INSERT INTO erabiltzaileak(izena, abizena, email, pasahitza, rola) VALUES (:iz, :ab, :em, :pas, :rol)');
        $query->bindParam(":iz", $izena);
        $query->bindParam(":ab", $abizena);
        $query->bindParam(":em", $email);
        $query->bindParam(":pas", $pasahitza);
        $query->bindParam(":rol", $rola);
        $query->execute();
        // $pdo = null;
        echo "insert";
    }else{
        $id = $_POST["id_erab"];
        $query = $pdo->prepare("UPDATE erabiltzaileak SET izena= :iz ,abizena= :ab ,email= :em ,pasahitza= :pas ,rola= :rol WHERE id_erab= :id");
        $query->bindParam(":iz", $izena);
        $query->bindParam(":ab", $abizena);
        $query->bindParam(":em", $email);
        $query->bindParam(":pas", $pasahitza);
        $query->bindParam(":rol", $rola);
        $query->bindParam(":id", $id);
        // $pdo= null;
        echo "update";
    }
}