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
                    
                    if ($erab['rola'] == '1') {
                        header('Location: /Views/VAdmin.php'); 
                    } elseif ($erab['rola'] == '0') {
                        header('Location: /Controller/index.php'); 
                    } else {
                        echo "<div class='alert alert-danger text-center'>Errorea: Ezin da identifikatu erabiltzaile mota.</div>";
                    }
                    exit();
                } else {
                    echo "<div class='alert alert-danger text-center'>Email edo pasahitza okerra.</div>";
                }
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
        include_once(__DIR__ . "/../Views/VsortuErabiltzailea.php");
    }
    
}
?>
