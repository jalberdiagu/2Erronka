<?php
require_once(__DIR__ . "/../Model/MALiburua.php");
header("Content-Type: application/json");

if(isset($_POST)){
    // var_dump($_POST["id_prod"]);
    $id_prod = (int) $_POST["id_prod"];
    $aktibo = $_POST["egoera"];
    $prezioa = $_POST["prezioa"];

    $result = [
        "tipo" => "nada"
    ];

    if(empty($id_prod)){
        $result["tipo"] = "insert";
    }else{
        $kon = new Model\MALiburua();
        $kon->updateLiburua($aktibo, $prezioa, $id_prod);
        $result["tipo"] = "update";

    }
    echo json_encode($result);
}