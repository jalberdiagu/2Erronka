<?php
namespace Controller;

require_once(__DIR__ . '/../Model/MErabiltzailea.php');

use Model\MErabiltzailea;

class CLogin {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (empty($_POST['email']) || empty($_POST['pasahitza'])) {
                echo "<div class='alert alert-danger text-center'>Email eta pasahitza parametroak falta dira!</div>";
                require_once(__DIR__ . "/../Views/VLogin.php");
                return;
            }

            
            $erabModel = new \Model\MErabiltzailea();
            $erab = $erabModel->login($_POST['email'], $_POST['pasahitza']);
            if ($erab) {
                $_SESSION['user'] = $erab;
                session_regenerate_id(true);
                
                if ($erab['rola'] == 1) {
                    header('Location: /2Erronka/Views/VAdmin.php'); 
                } else {
                    header('Location: /2Erronka/Controller/index.php');
                }
            } else {
                echo "<div class='alert alert-danger'>Datuak falta dira!</div>";
            }
        }

        require_once(__DIR__ . '/../Views/VLogin.php');
    }
}



$controller = new CLogin();
$controller->login();


?>
