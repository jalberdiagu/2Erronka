<?php
namespace Model;
require_once (__DIR__ . "/../Model/Konexioa.php");

class MErabiltzailea extends Konexioa {

    public function login($email, $pasahitza) {
        $stmt = $this->getKon()->prepare("SELECT * FROM erabiltzaileak WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
                         
        if ($user) {
            if (password_verify($pasahitza, $user['pasahitza'])) {
                return $user; 
            } else {
                echo "<div class='alert alert-danger text-center'>Pasahitza okerra da.</div>";
            }
            
        } else {
            echo "<div class='alert alert-danger text-center'>Erabiltzailea ez da aurkitu.</div>";
        }
        return false; 
    }
    

    public function getErab($id_erab){
        $erab = null;
        $sententzia =$this->getKon()->prepare("SELECT * FROM erabiltzaileak WHERE id_erab = ?");

        $sententzia->bind_param("i",$id_erab);
        $sententzia->execute();
        $emaitza = $sententzia->get_result();

        if($lerroa = $emaitza->fetch_assoc()){
            $erab = $lerroa;
        }

        $sententzia->close();
        return $erab;
        
    }
    
    public function getErabk(){
        $query = $this->getKon()->query("SELECT * FROM erabiltzaileak");
        
        $erabk = [];
        while($lerroa = $query->fetch_assoc()){
            $erabk[] = $lerroa;
        }
        return $erabk;
    }

    public function insertErab($erab){
        $sententzia = $this->getKon()->prepare("INSERT INTO erabiltzaileak (izena, abizena, email, pasahitza, rola) VALUES (?, ?, ?, ?, ?)");
        $rola = 0;
        $sententzia->bind_param("ssssi", $erab["izena"], $erab["abizena"], $erab["email"], $erab["pasahitza"], $rola);
        
        $result = $sententzia->execute();
        $sententzia->close();
        return $result;
    }

    public function updateErab($erabiltzailea){
        $sententzia = $this->getKon()->prepare("UPDATE erabiltzaileak SET izena= ?, abizena= ?, email= ?, pasahitza= ?, rola= ? WHERE id_erab= ?");

        $sententzia->bind_param("ssssii",$erabiltzailea["izena"], $erabiltzailea["abizena"], $erabiltzailea["email"], $erabiltzailea["pasahitza"], $erabiltzailea["rola"], $erabiltzailea["id_erab"]);

        $sententzia->execute();
        $sententzia->close();
    }

    public function deleteErab($erabiltzailea){
        $sententzia = $this->getKon()->prepare("DELETE FROM erabiltzaileak WHERE id_erab= ?");
        $sententzia->bind_param("i", $erabiltzailea["id_erab"]);

        $sententzia->execute();
        $sententzia->close();
    }

    
}//Klasearen amaiera

?>
