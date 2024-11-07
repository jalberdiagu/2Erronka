<?php
namespace Controller;

require_once(__DIR__ . "/../Model/MErabiltzailea.php");

class CErabiltzailea {
    public function egiaztatuLogin() {
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? null;
            $pasahitza = $_POST['pasahitza'] ?? null;

            if (empty($email) || empty($pasahitza)) {
                echo "<div class='alert alert-danger text-center'>Email eta pasahitza parametroak falta dira!</div>";
            } else {
                $erabModel = new \Model\MErabiltzailea();
                $erab = $erabModel->login($email, $pasahitza);

                if ($erab) {
                    $_SESSION['user'] = $erab;
                    
                    if ($erab['admin'] == '1') {
                        header('Location: index.php?action=loginAdmin');
                    } else {
                        header('Location: index.php?action=loginClient');
                    }
                    exit;
                } else {
                    echo "<div class='alert alert-danger text-center'>Email edo pasahitza ez dira zuzenak!</div>";
                }
            }
        }
        include_once(__DIR__ . "/../Views/VLogin.php");
    }

    public function insert() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['email'], $_POST['pasahitza'])) {
                $erabiltzailea = $_POST;
                
                $usuarioModel = new \Model\MErabiltzailea();
                
                if ($usuarioModel->insertErab($erabiltzailea)) {
                    echo "<div class='alert alert-success'>Ondo sortu da erabiltzaile berria!</div>";
                } else {
                    echo "<div class='alert alert-danger'>ERROREA: Ezin da sortu sortuta dagoen erabiltzaile bat!</div>";
                }
            }
        }
        include_once(__DIR__ . "/../Views/VsortuErabiltzailea.php");
    }
}
?>
