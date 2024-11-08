<?php
require_once("/../Model/Konexioa.php");

$data = file_get_contents("php://input");
$query = $pdo->prepare("SELECT * FROM eskaerak");
