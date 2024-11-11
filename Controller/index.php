<?php 
require(__DIR__. '/../Views/VPPrincipal.php');
require(__DIR__. '/../Model/MLiburuak.php');
require_once(__DIR__ . '/CErabiltzailea.php');

use Controller\CErabiltzailea;

// Crear una instancia del controlador
$controller = new CErabiltzailea();

// Verificar si se ha pasado una acción en la URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    
    // Comprobar si el método existe en el controlador
    if (method_exists($controller, $action)) {
        $controller->$action();
        exit(); // Salir después de ejecutar la acción
    } else {
        echo "<div class='alert alert-danger'>Ekintza hori ez da aurkitu!</div>";
    }
} else {
    // Cargar la vista principal si no hay acción especificada
    $con = new Model\MLiburuak();
    $librosHot = $con->getLiburuakHOT();
    $librosNew = $con->getLiburuakNEW();

    $vista= new VPPrincipal();
    $vista->initHTML();
    $vista->navbar();
    $vista->carousel_hot($librosHot);
    $vista->carousel_new($librosNew);
    $vista->endHTML();
}
