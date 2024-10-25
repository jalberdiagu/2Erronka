<?php
namespace Model;

class Konexioa{
    private $kon;

    public function __construct(){
        $this->kon = new \mysqli("localhost", "root", "", "denda_birtuala");
    }

    public function getKon(){
    return $this->kon;
    }
    public function closeKon($kon){
        $this->kon->close();
    }
}
?>