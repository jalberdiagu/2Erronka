<?php
require(__DIR__ . '/../Views/VPPrincipal.php');
require(__DIR__ . '/../Model/MLiburuak.php');
require_once(__DIR__ . '/CErabInsert.php');

use Controller\CErabiltzailea;

$controller = new CErabiltzailea();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    
    if (method_exists($controller, $action)) {
        $controller->$action(); // Llama al método correspondiente en el controlador
        exit(); 
    } else {
        echo "<div class='alert alert-danger'>Ekintza hori ez da aurkitu!</div>";
    }
} else {
    // Lógica para mostrar la vista principal si no se especifica ninguna acción
    $con = new Model\MLiburuak();
    $librosHot = $con->getLiburuakHOT();
    $librosNew = $con->getLiburuakNEW();

    $vista = new VPPrincipal();
    $vista->initHTML();
    $vista->navbar();
    $vista->carousel_hot($librosHot);
    $vista->carousel_new($librosNew);
    $vista->endHTML();
}
?>