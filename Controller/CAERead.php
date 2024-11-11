<?php
$data = file_get_contents("php://input");

require_once(__DIR__ . "/../Model/MAErabiltzailea.php");

$con = new Model\MAErabiltzailea();
$erabk = $con->getErabk($data);

foreach ($erabk as $data) {
    echo "<tr>
            <td>" . $data['id_erab'] . "</td>
            <td>" . $data['izena'] . "</td>
            <td>" . $data['abizena'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>" . $data['pasahitza'] . "</td>
            <td>" . $data['rola'] . "</td>
            <td>
                <button type='button' class='btn btn-success' onclick=editar('" . $data['id_erab'] . "')>Editar</button>
                <button type='button' class='btn btn-danger' onclick=eliminar('" . $data['id_erab'] . "')>Eliminar</button>
            </td>        
        </tr>";
}
// echo json_encode($erantzuna);