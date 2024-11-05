<?php 
require(__DIR__. '/../Views/VPPrincipal.php');

$vista= new VPPrincipal();
$vista->initHTML();
$vista->navbar();
$vista->carousel_hot();
$vista->endHTML();