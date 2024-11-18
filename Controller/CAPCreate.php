<?php
require_once(__DIR__ . "/../Model/MEskaera.php");
header("Content-Type: application/json");

if (isset($_POST)) {
    $id_eska = (int) $_POST["id_eska"];
    $egoera = $_POST["egoera"];

    $result = [
        "tipo"=> "nada"
    ];

    if(empty($id_eska)){
        $result["tipo"] = "insert";
    }else{
        $kon = new Model\MEskaera();
        $kon->updateEskaera($id_eska, $egoera); 
        $result["tipo"] = "update";
    }
    echo json_encode($result);
}