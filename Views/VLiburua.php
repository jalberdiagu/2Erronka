<?php

require_once __DIR__ . '/Vista.php';

class VLiburua extends Vista
{

    public function Libro($libro)
    {
        ?>
        <div id="producto">
            <div id="portada">
                <img src="<?= $libro["argazkia"]; ?> ">
            </div>
            <div id="texto">
                <h1><?= $libro["izenburua"]; ?></h1>
                <h2><a href="#"><?= $libro["idazlea"]; ?></a></h2>
                <h3><?= $libro["prezioa"]; ?>€</h3>
                <p><?= $libro["argitaletxea"]; ?> - <?= $libro["isbn"]; ?></p>
                <p><?= $libro["deskripzioa"]; ?></p>
            </div>
        </div>
    <?php }


} ?>