<?php
require_once("/../Model/Konexioa.php");

$data = file_get_contents("php://input");

$con = new Model\MAErabiltzailea();
$con-> deleteErab($data);
echo "delete";
<<<<<<< HEAD


=======
>>>>>>> 9ebb5fad3f1a1c6b2693ca36d83aa70ce134ea36
