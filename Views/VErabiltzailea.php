<? 
require_once __DIR__ . '/Vista.php';
class VErabiltzailea extends Vista{

//ERABILTZAILEA SORTZEKO FORMULARIOA
public function formErabiltzailea(){ ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
            <link rel="stylesheet" href="css/sortuErabiltzailea.css">
            <title>erabk sortu</title>
        </head>
        <body class="d-flex justify-content-center align-items-center min-vh-100">
            <div class="login-container position-relative">
                <a href="javascript:history.back()" class="back-arrow">
                    <i class="bi bi-arrow-left-circle-fill"></i>
                </a>
                <h1 class="text-center mb-4">ERABILTZAILE BERRI BAT SORTU</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="izena" class="form-label"><b>Izena:</b></label>
                        <input type="text" class="form-control" id="izena" name="izena" placeholder="Idatzi zure izena..." required>
                    </div>
                    <div class="mb-3">
                        <label for="abizena" class="form-label"><b>Abizena:</b></label>
                        <input type="text" class="form-control" id="abizena" name="abizena" placeholder="Idatzi zure abizena..." required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Posta elektronikoa:</b></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Idatzi zure posta elektronikoa..." required>
                    </div>
                    <div class="mb-3">
                        <label for="pasahitza" class="form-label"><b>Pasahitza:</b></label>
                        <input type="password" class="form-control" id="pasahitza" name="pasahitza" placeholder="Idatzi pasahitz bat..." required>
                    </div>
                    <div class="mb-3">
                        <label for="pasahitza2" class="form-label"><b>Errepikatu pasahitza:</b></label>
                        <input type="password" class="form-control" id="pasahitza2" name="pasahitza2" placeholder="Errepikatu pasahitza..." required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="reset" class="btn btn-secondary me-2">Ezabatu</button>
                        <button type="submit" class="btn btn-primary">Sartu</button>
                    </div>
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="js/sortuErabiltzailea.js"></script>
        </body>
    </html>
<? }

//ERABILTZAILE GUZTIEN DATU ESANGURATSUENAK ETA RUD BOTOIAK
public function tablaErab($erabk){ ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Izena</th>
                <th>Abizena</th>
                <th>Emaila</th>
            </tr>
        </thead>
        <tbody>
            <? 
            foreach ($erabk as $erab){
                ?>
                <tr>
                    <td><?= $erab["izena"] ?></td>
                    <td><?=$erab["abizena"]?> </td>
                    <td><?=$erab["email"]?></td>
                    <td>
                        <a class="btn btn-info bi bi-eye" href="erab.php?id_erab=<?=$erab["id_erab"]?>"></a>
                        <a class="btn btn-warning bi bi-pencil-square" href="erabEdit.php?id_erab= <?= $erab["id_erab"]?> "></a>
                        <a class="btn btn-danger bi bi-trash3" href="erabDestroy.php?id_erab= <?= $erab["id_erab"]?>"></a>
                    </td>
                </tr>
            <?php
                // echo '<tr>';
                // echo '<td>' . $erab["izena"] . '</td>';
                // echo '<td>' . $erab["abizena"] . '</td>';
                // echo '<td>' . $erab["email"] . '</td>';
                // echo '<td><a href="era$erab.php?id_erab=' . $erab["id_erab"] . '">Ver</a> | <a href="era$erabEdit.php?id_erab=' . $erab["id_erab"] . '">Editar</a> | <a href="era$erabDestroy.php?id_erab=' . $erab["id_erab"] . '">Eliminar</a></td>';
                // echo '</tr>';
            }
            ?>
        </tbody>
    </table>

<?  }

//ERABILTZAILEA IKUSI
public function erabIkusi($erab){ ?>
    <div>
        <h3>ID:</h3>
        <p><?= $erab["id_erab"] ?></p>
        <h3>Izena:</h3>
        <p><?= $erab["izena"] ?></p>
        <h3>Abizena:</h3>
        <p><?= $erab["abizena"] ?></p>
        <h3>Email:</h3>
        <p><?= $erab["email"] ?></p>
        <h3>Pasahitza:</h3>
        <p><?= $erab["pasahitza"] ?></p>
        <h3>Rola:</h3>
        <p><?= $erab["admin"] ?></p>
    </div>
<?}
}
