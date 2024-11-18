<?php
namespace Model;

class Konexioa{
    private $kon;

    public function __construct(){
        $this->kon = new \mysqli("localhost", "root", "", "denda_birtuala");
                    
        if ($this->kon->connect_error) {
            die("Erronea konexioan: " . $this->kon->connect_error);
        }
    }

    public function getKon(){
    return $this->kon;
    }

    
    public function closeKon(){
        $this->kon->close();
    }
}
?>