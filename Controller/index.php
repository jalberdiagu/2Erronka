<?php
require(__DIR__ . '/../Views/VPPrincipal.php');
require(__DIR__ . '/../Model/MLiburuak.php');



    $con = new Model\MLiburuak();
    $librosHot = $con->getLiburuakHOT();
    $librosNew = $con->getLiburuakNEW();

    $vista = new VPPrincipal();
    $vista->initHTML();
    $vista->navbar();
    $vista->carousel_new($librosNew);
    $vista->endHTML();

?>