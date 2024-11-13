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
        <div class="login-container shadow-lg">
            <a href="javascript:history.back()" class="back-arrow">
                <i class="bi bi-arrow-left-circle-fill"></i>
            </a>
            <h1 class="text-center mb-4 text-primary">Sortu Erabiltzailea Berria</h1>
            <form action="../Controller/CErabInsert.php" method="POST">
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" name="izena" id="izena" required placeholder="Izena">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person-lines-fill"></i></span>
                        <input type="text" class="form-control" name="abizena" id="abizena" required placeholder="Abizena">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" class="form-control" name="pasahitza" id="pasahitza" required placeholder="Pasahitza">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="reset" class="btn btn-outline-danger w-48 me-3"><i class="bi bi-trash"></i> Ezabatu</button>
                    <button type="submit" class="btn btn-primary w-48"><i class="bi bi-check-circle-fill"></i> Sortu erabiltzailea</button>
                </div>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="/Views/js/sortuErabiltzailea.js"></script>
</body>
</html>
