<?php
namespace Model;
require_once 'Konexioa.php';

class MLiburuak extends Konexioa{


    public function getLiburuak(){
        $sentencia = $this->getKon()->query("SELECT * FROM liburuak");

        $libros=[];

        while ($fila = $sentencia->fetch_assoc()) {
            $libros[] = $fila;
        }
        return $libros;
    }

    public function getLiburua($libro){
        $libro = null;
        $sentencia = $this->getKon()->prepare("SELECT * FROM liburuak WHERE izenburua = ?");

        $sentencia->bind_param("s", $libro);

        $sentencia->execute();

        $resultado = $sentencia->get_result();

        if ($fila = $resultado->fetch_assoc()) {
            $libro = $fila;
        }

        $sentencia->close();

        return $libro;
    }

    public function insertLiburua($datuak) {
        $statement = $this->getKon->prepare("INSERT INTO liburuak`(`id_prod`, `izenburua`, `idazlea`, `generoa`, `deskripzioa`, `prezioa`, `isbn`, `hizkuntza`, `argitaletxea`, `stock`, `argazkia`, `aktibo`, `deskontuak`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]')")
    }

}