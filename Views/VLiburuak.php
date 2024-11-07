<?php

require_once __DIR__ . '/Vista.php';

class VLiburuak extends Vista
{

    public function Liburuak($libros)
    {
        ?>
        <ul class="catCardList">
            <?php
            foreach ($libros as $libro) {
                ?>
                <li class="catCardList">
                    <div class="catCard"><a href="#"><img src="http://placehold.it/221x200" alt=""></a>
                        <div class="lowerCatCard">
                            <h3><?= $libro["izenburua"] ?></h3>
                            <h4><?= $libro["idazlea"] ?></h4>
                            <div class="startingPrice">Prezioa <span><?= $libro["prezioa"] . "€" ?></span></div>
                            <p><?= $libro["deskripzioa"] ?></p>
                            <h4>Informazio Gehiago: </h4>
                            <ul>
                                <li>Hizkuntza: <?= $libro["hizkuntza"] ?></li>
                                <li>Generoa: <?= $libro["generoa"] ?></li>
                            </ul>
                            <div id="catCardButton" class="button"><a href="CLiburua.php?book=<?php
                            $libro["izenburua"];
                            ?>">Ikusi Produktua</a></div>
                        </div>
                    </div>
                </li>
            <?php }
            ?>


        </ul>

    <?php }


}