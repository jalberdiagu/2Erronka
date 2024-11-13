<?php
namespace Controller;

require_once(__DIR__ . "/../Model/MErabiltzailea.php");

class CErabiltzailea {


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

$controller = new CErabiltzailea();
$controller->insert();

?>

