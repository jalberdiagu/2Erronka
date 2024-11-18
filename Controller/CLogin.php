<?php
namespace Controller;

require_once(__DIR__ . '/../Model/MErabiltzailea.php');

use Model\MErabiltzailea;

class CLogin {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['email'], $_POST['pasahitza'])) {
                $email = $_POST['email'];
                $pasahitza = $_POST['pasahitza'];

                $usuarioModel = new MErabiltzailea();
                $user = $usuarioModel->login($email, $pasahitza);

                if ($user) {
                    // Redirigir a una página después del inicio de sesión exitoso
                    header('Location: /dashboard.php');
                    exit;
                } else {
                    echo "<div class='alert alert-danger text-center'>Email edo pasahitza okerra.</div>";
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