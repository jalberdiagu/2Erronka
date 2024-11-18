<?php
namespace Model;
require_once "Konexioa.php";

class MALiburua extends Konexioa{
    //ALRead
    public function getLiburuak($data){
        if($data == ""){
            $query =$this->getKon()->prepare("SELECT id_prod, izenburua, prezioa, aktibo, stock 
            FROM liburuak ORDER BY id_prod ASC");
            $query->execute();
        }else{
            $query =$this->getKon()->prepare("SELECT id_prod, izenburua, prezioa, aktibo, stock 
            FROM liburuak 
            WHERE id_prod LIKE CONCAT('%', ?, '%') 
            OR izenburua LIKE CONCAT('%', ?, '%') 
            OR prezioa LIKE CONCAT('%', ?, '%') 
            OR aktibo LIKE CONCAT('%', ?, '%') 
            OR stock LIKE CONCAT('%', ?, '%')");
            $query->bind_param("isiii", $data, $data, $data, $data, $data);
            $query->execute();
        }
        $emaitza = $query->get_result();
        $liburuak = [];
        while($lerroa = $emaitza->fetch_assoc()){
            $liburuak[] = $lerroa;
        }
        $emaitza->free();
        $query->close();
        return $liburuak;
    }

    //ALUpdate
    public function updateLiburua($aktibo, $prezioa, $id_prod){
        $query = $this->getKon()->prepare("UPDATE liburuak SET aktibo= ? , prezioa=? WHERE id_prod=?");
        $query->bind_param("iii", $aktibo, $prezioa, $id_prod);
        $query->execute();
        $query->close();
    }

    //ALUpdateSelect
    public function updateSelect($id_prod){
        $query = $this->getKon()->prepare("SELECT id_prod, prezioa, aktibo FROM liburuak 
        WHERE id_prod=?");
        $query->bind_param("i", $id_prod);
        $query->execute();

        $emaitza = $query->get_result();

        $liburua = [];
        while($lerroa = $emaitza->fetch_assoc()){
            $liburua[] = $lerroa;
        }
        $query->close();
        return $liburua;

    }
}