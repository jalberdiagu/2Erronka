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

}//Klasearen amaiera

?>