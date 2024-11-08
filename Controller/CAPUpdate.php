<?php
require_once("/../Konexioaa.php");

$data = file_get_contents("php://input");
$query = $pdo->prepare("SELECT * FROM eskaerak");
