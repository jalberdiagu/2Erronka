<?php

namespace Controller;

class CLogin {
    public function egiaztatuLogin() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'];
                $pasahitza = $_POST['pasahitza'];

                if(empty($email) && empty($pasahitza)) {
                    echo "<div class='alert alert-danger text-center'>Email eta pasahitza parametroak falta dira!</div>";
                } else if(empty($email)) {
                    echo "<div class='alert alert-danger text-center'>Email parametroa falta da!</div>";
                } else if(empty($pasahotza)) {
                    echo "< class='alert alert-danger text-center'>Pasahitza parametroa falta da!</div>";
                } else {
                    $erabModel = new \Model\MErabiltzailea();
                    $erab = $erabModel->login($email, $pasahitza);

                    if ($erab) {
                        session_start();
                        $_SESSION['user'] = $erab;
                        
        
                        if ($erab['admin'] == '****') {
                            header('Location: ');
                        } else {
                            header('Location: ');
                        }
                        exit;
                    }
                }
            }
            include_once(__DIR__ . "/../Views/Vlogin.php");
        }
}//Klasearen amaiera

?>