<?php
namespace Controller;

require_once(__DIR__ . "/../Model/MErabiltzailea.php");

class CErabiltzailea {
    public function egiaztatuLogin() {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
            $pasahitza = $_POST['pasahitza'] ?? '';

            if (empty($email) || empty($pasahitza)) {
                echo "<div class='alert alert-danger text-center'>Email eta pasahitza parametroak falta dira!</div>";
                return;
            }

            $erabModel = new \Model\MErabiltzailea();
            $erab = $erabModel->login($email, $pasahitza);

            if ($erab) {
                $_SESSION['user'] = $erab;
                session_regenerate_id(true);

                // Redirige según el rol
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
    }

    public function insert() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['email'], $_POST['pasahitza'], $_POST['izena'], $_POST['abizena'])) {
                $erabiltzailea = [
                    'izena' => $_POST['izena'],
                    'abizena' => $_POST['abizena'],
                    'email' => $_POST['email'],
                    'pasahitza' => password_hash($_POST['pasahitza'], PASSWORD_DEFAULT),
                    'rola' => 0 
                ];

                $usuarioModel = new \Model\MErabiltzailea();
                
                if ($usuarioModel->insertErab($erabiltzailea)) {
                    echo "<div class='alert alert-success text-center'>Ondo sortu da erabiltzaile berria!</div>";
                } else {
                    echo "<div class='alert alert-danger text-center'>ERROREA: Ezin da sortu erabiltzailea!</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Datuak falta dira!</div>";
            }
        }
        require_once(__DIR__ . "/../Views/VsortuErabiltzailea.php");
    }
}
?>
