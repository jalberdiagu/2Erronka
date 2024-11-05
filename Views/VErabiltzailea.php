<? 
require_once __DIR__ . '/Vista.php';
class VErabiltzailea extends Vista{
public function formErabiltzailea(){ ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/sortuErabiltzailea.css">
    <title>Erabiltzaileak sortu</title>
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
}
