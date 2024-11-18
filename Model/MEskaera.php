<?php

namespace Model;
require_once "Konexioa.php";

class MEskaera extends Konexioa {

    //Eskaera guztiak jaso
    public function getEskaerak($data) {
        if($data == ""){
        $query = $this->getKon()->prepare("SELECT * FROM eskaerak ORDER BY id_eska ASC;");
        $query->execute();
        }else{
            $query = $this->getKon()->prepare("SELECT * FROM eskaerak 
            WHERE id_eska LIKE CONCAT('%', ?, '%') 
            OR id_erab LIKE CONCAT('%', ?, '%') 
            OR data LIKE CONCAT('%', ?, '%') 
            OR egoera LIKE CONCAT('%', ?, '%') 
            OR guztira LIKE CONCAT('%', ?, '%')");
            $query->bind_param("issssi", $data, $data, $data, $data, $data, $data);
            $query->execute();
        }
        $emaitza = $query->get_result();

        $eskaerak = [];

        while($lerroa = $emaitza->fetch_assoc()) {
            $eskaerak[] = $lerroa;
        }
        $emaitza->free();
        $query->close();
        return $eskaerak;
    }

    //Update eskaerako egoera
    public function updateEskaera($id_eska, $new_egoera) {
        $query = $this->getKon()->prepare("UPDATE eskaerak SET egoera=? WHERE id_eska=?");
        $query->bind_param("si", $new_egoera, $id_eska);
        $query->execute();
        $query->close();
    }

    //UpdateSelect
    public function updateSelect($id_eska) {
        $query = $this->getKon()->prepare("SELECT * FROM eskaerak WHERE id_eska= ?");
        $query->bind_param("i", $id_eska);
        $query->execute();

        $emaitza = $query->get_result();

        $eskaera = [];
        while($lerroa = $emaitza->fetch_assoc()) {
            $eskaera[] = $lerroa;
        }
        $query->close();
        return $eskaera;
    }

    //Select eskaera by id_eska
    public function deleteEskaera($id_eska) {
        $query = $this->getKon()->prepare("DELETE FROM eskaerak WHERE id_eska = ?");
        $query->bind_param("i", $id_eska);

        $query->execute();
        $query->close();
    }

    //Insert new eskaera
    public function insertEskaera($eskaera){
        $query = $this->getKon()->prepare("INSERT INTO eskaerak (data, egoera, guztira) VALUES (?, ?, ?)");
        $query->bind_param("ssssi",$eskaera["data"], $eskaera["egoera"], $eskaera["guztira"]);

        $query->execute();
        $query->close();
    }

    
    //Delte eskaera
    public function deleteEskaeraById($id_eska) {
        $query = $this->getKon()->prepare("DELETE FROM eskaerak WHERE id_eska = ?");
        $query->bind_param("i", $id_eska);
        return $query->execute();
    }


}//Klasearen amaiera

?>