<?php

namespace Model;
require_once("konexioa.php");

class MEskaeren_xehetasunak extends konexioa {

    public function insertEskaerenXehetasunak($datuak) {
        $statement = $this->getKon()->prepare("INSERT INTO eskaeren_xehetasunak(?, ?, ?, ?, ?)");
        $statement->bind_param("", $datuak['id_xehe'], $datuak['id_eska'], $datuak['id_prod'], $datuak['id_prod'], $datuak['kantitatea'], $datuak['']);

        $statement->execute();
        $statement->close();
    }

}//Klasearen amaiera

?>