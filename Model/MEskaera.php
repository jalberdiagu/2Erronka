<?php

namespace Model;
require_once "konexioa.php";

class MEskaera extends Konexioa {

    //Eskaera guztiak jaso
    public function getEskaerak() {
        $statement = $this->getKon()->query("SELECT * FROM eskaerak;");

        $eskaerak = [];

        while($row = $statement->fetch_assoc()) {
            $eskaerak[] = $row;
        }
        return $eskaerak;
    }

    //Update eskaerako egoera
    public function updateEskaera($id_eska, $new_egoera) {
        $statement = $this->getKon()->prepare("UPDATE eskaerak SET egoera=? WHERE $id_eska=?");
        $statement->bind_param("si", $new_egoera, $id_eska);
        $statement->execute();
        $statement->close();
    }

    //Select eskaera by id_eska
    public function deleteEskaera($id_eska) {
        $statement = $this->getKon()->prepare("DELETE FROM eskaerak WHERE id_eska = ?");
        $statement->bind_param("i", $id_eska);

        $statement->execute();
        $statement->close();
    }

    //Insert new eskaera
    public function insertEskaera($eskaera){
        $sententzia = $this->getKon()->prepare("INSERT INTO eskaerak (data, egoera, guztira) VALUES (?, ?, ?)");
        $sententzia->bind_param("ssssi",$eskaera["data"], $eskaera["egoera"], $eskaera["guztira"]);

        $sententzia->execute();
        $sententzia->close();
    }


}//Klasearen amaiera

?>