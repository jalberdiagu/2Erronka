<?php

require_once __DIR__ . '/Vista.php';

class VLiburuak extends Vista
{
    public function Liburuak($libros)
    {
        $generoSeleccionado = isset($_GET['generoa']) ? $_GET['generoa'] : '';

        $todosLosGeneros = array_unique(array_column($libros, 'generoa'));
        
        //Filtroa erabiltzen du generoa aukeratu badugu
        if ($generoSeleccionado) {
            $libros = array_filter($libros, function ($libro) use ($generoSeleccionado) {
                return $libro["generoa"] === $generoSeleccionado;
            });
        }
        ?>

        <!-- Filtroa -->
        <form method="GET" action="">
            <div class="mb-3">
                <label for="generoa" class="form-label">Generoa Aukeratu</label>
                <select name="generoa" id="generoa" class="form-select">
                    <option value="">Genero guztiak</option>
                    <?php foreach ($todosLosGeneros as $genero) { ?>
                        <option value="<?= $genero; ?>" <?= $genero === $generoSeleccionado ? 'selected' : ''; ?>>
                            <?= $genero; ?>
                        </option>
                    <?php } ?>
                </select>
                <button type="submit" class="btn btn-primary mt-2">Filtratu</button>
            </div>
        </form>

        <div class="row">
            <?php
            if (empty($libros)) {
                echo "<p>Ez dago libururik genero honekin</p>";
            } else {
                foreach ($libros as $libro) {
                    ?>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card" style="width: 21rem;">
                            <img src="<?= $libro["argazkia"]; ?>" class="card-img-top" alt="<?= $libro["izenburua"]; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $libro["izenburua"]; ?></h5>
                                <p class="card-text"><?= $libro["idazlea"]; ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?= $libro["prezioa"]; ?></li>
                                <li class="list-group-item"><?= $libro["generoa"]; ?></li>
                            </ul>
                            <div class="card-body">
                                <a href="CLiburua.php?book=<?= $libro["izenburua"]; ?>" class="card-link">
                                    <button type="button" class="btn btn-primary">Ikusi Liburua</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        
        <?php
    }
}
