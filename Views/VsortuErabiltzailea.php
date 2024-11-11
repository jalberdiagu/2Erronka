<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/sortuErabiltzailea.css">
    <title>Sortu Erabiltzailea</title>
</head>
<body>
    <div class="container mt-5">
        <div class="login-container">
            <a href="javascript:history.back()" class="back-arrow">
                <i class="bi bi-arrow-left-circle-fill"></i> 
            </a>
            <h1>SORTU ERABILTZAILE BERRIA</h1>
            <form action="/2Erronka/Controller/index.php?action=insert" method="POST">
                <div class="mb-3">
                    <label for="izena" class="form-label">Izena:</label>
                    <input type="text" class="form-control" name="izena" id="izena" required>
                </div>
                <div class="mb-3">
                    <label for="abizena" class="form-label">Abizena:</label>
                    <input type="text" class="form-control" name="abizena" id="abizena" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="pasahitza" class="form-label">Pasahitza:</label>
                    <input type="password" class="form-control" name="pasahitza" id="pasahitza" required>
                </div>
                <button type="submit" class="btn btn-primary">Sortu erabiltzailea</button>
                <button type="reset" class="btn btn-secondary">Ezabatu</button>
            </form>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/sortuErabiltzailea.php"></script>
</body>
</html>
