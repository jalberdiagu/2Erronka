<?php
$data = file_get_contents("php://input");

require_once(__DIR__ . "/../Model/MAErabiltzailea.php");

$con = new Model\MAErabiltzailea();
$erabk = $con->getErabk($data);

foreach ($erabk as $data) { ?>
    <tr>
        <td><?=$data['id_erab']?></td>
        <td><?=$data['izena']?></td>
        <td><?=$data['abizena']?></td>
        <td><?=$data['email']?></td>
        <td><?=$data['pasahitza']?></td>
        <td><?=$data['rola']?></td>
        <td>
            <button type='button' class='btn btn-success' onclick="erabkAldatu(<?=$data['id_erab']?>)">Aldatu</button>
            <button type='button' class='btn btn-danger' onclick="erabkEzabatu(<?=$data['id_erab']?>)">Ezabatu</button>
        </td>        
    </tr>
<?php }
// echo json_encode($erantzuna);