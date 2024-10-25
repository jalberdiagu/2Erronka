<?php
namespace Model;
require_once "Konexioa.php";

class MLiburuak extends Konexioa {

    public function getLib($id_prod){
        $lib = null;
        $sententzia =$this->getKon()->prepare("SELECT * FROM liburuak WHERE id_prod = ?");

        $sententzia->bind_param("i",$id_prod);
        $sententzia->execute();
        $emaitza = $sententzia->get_result();

        if($lerroa = $emaitza->fetch_assoc()){
            $lib = $lerroa;
        }

        $sententzia->close();
        return $lib;
        
    }
    
    public function getLibk(){
        $query = $this->getKon()->query("SELECT * FROM liburuak");
        
        $liburuak = [];
        while($lerroa = $query->fetch_assoc()){
            $liburuak[] = $lerroa;
        }
        return $liburuak;
    }


    public function updateLibk($liburua){
        $sententzia = $this->getKon()->prepare("UPDATE liburuak SET prezioa= ?, aktibo= ? WHERE id_prod= ?");

        $sententzia->bind_param("ib",$liburua["prezioa"], $liburua["aktibo"]);

        $sententzia->execute();
        $sententzia->close();
    }

}
//Klasearen amaiera
