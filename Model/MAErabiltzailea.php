<?php
namespace Model;
require_once "Konexioa.php";

class MAErabiltzailea extends Konexioa{

    //AERead
    public function getErabk($data){
        if($data ==""){
            $query = $this->getKon()->prepare("SELECT * FROM erabiltzaileak ORDER BY id_erab ASC");
            $query->execute();
    
        }else{
            $query = $this->getKon()->prepare("SELECT * FROM erabiltzaileak 
            WHERE id_erab LIKE CONCAT('%', ?, '%') 
            OR izena LIKE CONCAT('%', ?, '%') 
            OR abizena LIKE CONCAT('%', ?, '%') 
            OR email LIKE CONCAT('%', ?, '%') 
            OR pasahitza LIKE CONCAT('%', ?, '%') 
            OR rola LIKE CONCAT('%', ?, '%')");
            $query->bind_param("issssi", $data, $data, $data, $data, $data, $data);
            $query->execute();
        }
    $emaitza = $query->get_result();

    $erabk= [];
    while($lerroa = $emaitza->fetch_assoc()){
        $erabk[]=$lerroa;
    }
    $emaitza->free();
    $query->close();
    return $erabk;
    }

    //AECreate
    public function createErab($izena, $abizena, $email, $pasahitza, $rola){
        $query = $this->getKon()->prepare('INSERT INTO erabiltzaileak(izena, abizena, email, pasahitza, rola) VALUES (?, ?, ?, ?, ?)');
        $query->bind_param("ssssi", $izena, $abizena, $email, $pasahitza, $rola);
        $query->execute();
        $query->close();
        }
    public function updateErab($izena, $abizena, $email, $pasahitza, $rola, $id_erab){
            $query = $this->getKon()->prepare("UPDATE erabiltzaileak SET izena= ? ,abizena= ? ,email= ? ,pasahitza= ? ,rola= ? WHERE id_erab= ?");
        $query->bind_param("ssssii", $izena, $abizena, $email, $pasahitza, $rola, $id_erab);
        $query->execute();
        $query->close();
        }

    //AEUpdate
    public function updateSelect($id_erab){
        $query = $this->getKon()->prepare("SELECT * FROM erabiltzaileak WHERE id_erab = ?");
        $query->bind_param("i", $id_erab);
        $query->execute();

        $emaitza = $query->get_result();

        $erab = [];
        while($lerroa = $emaitza->fetch_assoc()){
            $erab[]=$lerroa;
        }
        $query->close();
        return $erab;
    }
    
    //AEDelete
    public function deleteErab($id_erab){
        $query = $this->getKon()->prepare("DELETE FROM erabiltzaileak WHERE id_erab = ?");
        $query-> bind_param("i", $id_erab);
        $query->execute();
        $query->close();
    }
}