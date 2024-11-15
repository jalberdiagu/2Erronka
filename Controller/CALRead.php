<?php
$data = file_get_contents("php://input");

require_once(__DIR__ . "/../Model/MALiburua.php");

$kon = new Model\MALiburua();
$liburuak = $kon->getLiburuak($data);

foreach ($liburuak as $data) { ?>
    <tr>
        <td><?=$data['id_prod']?></td>
        <td><?=$data['izenburua']?></td>
        <td><?=$data['prezioa']?></td>
        <td><?=$data['aktibo']?></td>
        <td><?=$data['stock']?></td>
        <td>
        <button type='button' class='btn btn-success' id="btnAldatu" onclick="liburuakAldatu(<?=$data['id_prod']?>)">Aldatu</button>
        </td>
    </tr>
<?php }
