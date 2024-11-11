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

    public function getLiburuaIdaz($writer){
        $libros = null;
        $sentencia = $this->getKon()->prepare("SELECT * FROM liburuak WHERE idazlea = ?");

        $sentencia->bind_param("s", $writer);

        $sentencia->execute();

        $resultado = $sentencia->get_result();

        if ($fila = $resultado->fetch_assoc()) {
            $libros = $fila;
        }

        $sentencia->close();

        return $libros;
    }  

    public function getLiburua($book){
        $libro = null;
        $sentencia = $this->getKon()->prepare("SELECT * FROM liburuak WHERE izenburua = ?");

        $sentencia->bind_param("s", $book);

        $sentencia->execute();

        $resultado = $sentencia->get_result();

        if ($fila = $resultado->fetch_assoc()) {
            $libro = $fila;
        }

        $sentencia->close();

        return $libro;
    }  
 

    public function getLiburuakHOT(){
        
        $sentencia = $this->getKon()->query('SELECT * FROM liburuak WHERE tag = "HOT"');

        $libros=[];

        while ($fila = $sentencia->fetch_assoc()) {
            $libros[] = $fila;
        }
        return $libros;
    }  


    public function getLiburuakNEW(){
        
        $sentencia = $this->getKon()->query('SELECT * FROM liburuak WHERE tag = "NEW"');

        $libros=[];

        while ($fila = $sentencia->fetch_assoc()) {
            $libros[] = $fila;
        }
        return $libros;
    }

    public function deleteLiburua($id_prod) {
        $statement = $this->getKon()->prepare("DELETE FROM liburuak WHERE id_prod = ?");
        $statement->bind_param("i", $id_prod);
        return $statement->execute();
    }

}

?>