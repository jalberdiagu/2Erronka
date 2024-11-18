<?php
require_once(__DIR__ . "/../Model/MEskaera.php");

$data = file_get_contents("php://input");

$kon = new Model\MEskaera();
$eskaerak = $kon->getEskaerak($data);

foreach ($eskaerak as $data) { ?>
    <tr>
        <td><?=$data['id_eska']?></td>
        <td><?=$data['id_erab']?></td>
        <td><?=$data['data']?></td>
        <td><?=$data['egoera']?></td>
        <td><?=$data['guztira']?></td>
        <td>
            <button type='button' class='btn btn-success' id="btnAldatu" onclick="eskaeraAldatu(<?=$data['id_eska']?>)">Aldatu</button>
            <button type='button' class='btn btn-danger' id="btnEzabatu" onclick="eskaeraXehe(<?=$data['id_eska']?>)">Xehetasunak</button>
        </td>        
    </tr>
<?php }
