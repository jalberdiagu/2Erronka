<?php
namespace Model;
require_once "Konexioa.php";

class MOrgatxoa extends Konexioa {

    public function getOrga($idErab){
        $orga =[];
        $sententzia = $this->getKon()->prepare("SELECT * FROM orgatxoa WHERE id_erab = ?");

        $sententzia->bind_param("i", $idOrga);
        $sententzia->execute();
        $emaitza = $sententzia->get_result();

        if($lerroa = $emaitza->fetch_assoc()){
            $orga[] = $lerroa;
        }
        $sententzia->close();
        return $orga;
    }

    public function updateOrga($kant){
        $sententzia = $this->getKon()->prepare("UPDATE orgatxoa SET kantitatea = ?");
        
        $sententzia->bind_param("i", $kant);
    }
    
    public function deleteOrga($orga){
        $sententzia = $this->getKon()->prepare("DELETE FROM orgatxoa WHERE id_erab = ?");
        $sententzia->bind_param("i", $orga["id_erab"]);

        $sententzia->execute();
        $sententzia->close();
    }

}