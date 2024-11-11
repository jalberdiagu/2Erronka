<?php
require_once("/../Model/Konexioa.php");

$data = file_get_contents("php://input");

$con = new Model\MAErabiltzailea();
if($con-> deleteErab($data)){
    echo "delete";
}else{
    echo "errorea";
}

