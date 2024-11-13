<?php

require_once __DIR__ . '/Vista.php';

class VLiburuak extends Vista
{

    public function Liburuak($libros)
    {
        ?>
        <div class="row">

            <?php
            foreach ($libros as $libro) {
                ?>
                <div class="col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $libro["argazkia"]; ?> " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $libro["izenburua"]; ?></h5>
                            <p class="card-text"><?= $libro["idazlea"]; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $libro["prezioa"]; ?></li>
                            <li class="list-group-item"><?= $libro["generoa"]; ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="CLiburua.php?izenburua=<?php
                            $libro["izenburua"];
                            ?>" class="card-link"><button type="button" class="btn btn-primary">Ikusi Liburua</button></a>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    <?php }


}