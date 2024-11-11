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

    //AECreate
    public function createErab($izena, $abizena, $email, $pasahitza, $rola){
        $query = $this->getKon()->prepare('INSERT INTO erabiltzaileak(izena, abizena, email, pasahitza, rola) VALUES (?, ?, ?, ?, ?)');
        $query->bind_param("ssssi", $izena, $abizena, $email, $pasahitza, $rola);
        $query->execute();
        }
        public function updateErab($izena, $abizena, $email, $pasahitza, $rola, $id_erab){
            $query = $this->getKon()->prepare("UPDATE erabiltzaileak SET izena= ? ,abizena= ? ,email= ? ,pasahitza= ? ,rola= ? WHERE id_erab= ?");
        $query->bind_param("ssssii", $izena, $abizena, $email, $pasahitza, $rola, $id_erab);
        $query->execute();
        }

    //AEUpdate
    public function updateSelect($id_erab){
        $query = $this->getKon()->prepare("SELECT * FROM erabiltzaileak WHERE id_erab = ?");
        $query->bind_param("i", $id_erab);
        $query->execute();

        $emaitza = $query->get_result();

        while($lerroa = $emaitza->fetch_assoc()){
            $erabk[]=$lerroa;
        }
        return $erabk;
    }
    
    //AEDelete
    public function deleteErab($id_erab){
        $query = $this->getKon()->prepare("DELETE * FROM erabiltzaileak WHERE id_erab = ?");
        $query-> bind_param("i", $id_erab);
        $query->execute();
    }
}