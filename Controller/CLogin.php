<?php

namespace Controller;

require_once(__DIR__ . "/../Model/MErabiltzailea.php");

class CLogin {

    public function egiaztatuLogin() {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (empty($email) || empty($pasahitza)) {
                echo "<div class='alert alert-danger text-center'>Email eta pasahitza parametroak falta dira!</div>";
                require_once(__DIR__ . "/../Views/VLogin.php");
                return;
            }

            $erabModel = new \Model\MErabiltzailea();
            $erab = $erabModel->login($email, $pasahitza);

            if ($erab) {
                $_SESSION['user'] = $erab;
                session_regenerate_id(true);

                if ($erab['rola'] == 1) {
                    header('Location: /2Erronka/Views/VAdmin.php'); 
                } else {
                    header('Location: /2Erronka/Controller/index.php'); 
                }
                exit();
            } else {
                echo "<div class='alert alert-danger text-center'>Email edo pasahitza okerra.</div>";
            }
        }
        require_once(__DIR__ . "/../Views/VLogin.php");
    }
}

$controller = new CLogin();
$controller->egiaztatuLogin();

?>
