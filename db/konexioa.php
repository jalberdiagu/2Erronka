<?php

$mysqli = new mysqli("localhost", "root", "", "");

if($mysqli->connect_errno) {
    die("MySQL konexioak huts egin du: (" . $mysqli->connect_errno . ") " . $mysqli->error);
}

?>