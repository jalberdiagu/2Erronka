<?php
namespace Model;
require_once "Konexioa.php";

class MAErabiltzailea extends Konexioa{
    //AERead
    public function getErabk($data){
        $query = $this->getKon()->prepare("SELECT * FROM erabiltzaileak ORDER BY id_erab ASC");
    $query->execute();
    
    if($data!==""){
        $query = $this->getKon()->prepare("SELECT * FROM erabiltzaileak WHERE id_erab LIKE '%".$data."%' OR izena LIKE '%".$data."%' OR abizena LIKE '%".$data."%' OR email LIKE '%".$data."%' OR pasahitza LIKE '%".$data."%' OR rola LIKE '%".$data."%'");
        $query->execute();
    }
    $emaitza = $query->get_result();

    $erabk= [];
    while($lerroa = $emaitza->fetch_assoc()){
        $erabk[]=$lerroa;
    }
    return $erabk;
    }

    public function createErab($izena, $abizena, $email, $pasahitza, $rola){
        $query = $this->getKon()->prepare('INSERT INTO erabiltzaileak(izena, abizena, email, pasahitza, rola) VALUES (:iz, :ab, :em, :pas, :rol)');
        $query->bind_param(":iz", $izena);
        $query->bind_param(":ab", $abizena);
        $query->bind_param(":em", $email);
        $query->bind_param(":pas", $pasahitza);
        $query->bind_param(":rol", $rola);
        $query->execute();
        }
    
}