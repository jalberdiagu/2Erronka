<?php
$data = file_get_contents("php://input");
require_once("/../Model/Konexioa.php");
$query = $pdo->prepare("SELECT * FROM erabiltzaileak ORDER BY id_erab ASC");
$query->execute();

if($data!==""){
    $query = $pdo->prepare("SELECT * FROM erabiltzaileak WHERE id_erab LIKE '%".$data."%' OR izena LIKE '%".$data."%' OR abizena LIKE '%".$data."%' OR email LIKE '%".$data."%' OR pasahitza LIKE '%".$data."%' OR rola LIKE '%".$data."%'");
    $query->execute();
}
$erantzuna = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($erantzuna as $data) {
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