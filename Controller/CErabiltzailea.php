<?php

namespace Controller;

require_once(__DIR__ . "/../Model/MErabiltzailea.php");

class CErabiltzailea {
    //Egiaztatu login
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

        public function insert() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['email'], $_POST['pasahitza'])) {
                    $erabiltzailea = $_POST;
                    
                    $usuarioModel = new \Model\MErabiltzailea();
                    
                    if($usuarioModel->insertErab($erabiltzailea)) {
                        echo "<div class='alert alert-success'>Ondo sortu da erabiltzaile berria!</div>";
                    } else {
                        echo "<div class='alert alert-danger'>ERROREA: Ezin da sortu sortuta dagoen erabiltzaile bat!</div>";
                    }
                }
            }
            include_once(__DIR__ . "/../Views/VsortuErabiltzailea.php");
        }

}//Klasearen amaiera

?>