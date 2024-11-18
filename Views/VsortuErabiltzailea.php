<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../Views/css/sortuErabiltzailea.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=PT+Mono&display=swap" rel="stylesheet">    
    <title>Sortu Erabiltzailea</title>
</head>
<body>
    <div class="container mt-5">
        <div class="login-container shadow-lg">
            <a href="javascript:history.back()" class="back-arrow">
                <i class="bi bi-arrow-left-circle-fill"></i>
            </a>
            <h1 class="text-center mb-4">Sortu Erabiltzailea Berria</h1>
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
                    <button type="reset" class="btn btn-outline-danger w-48 me-3"><i class="bi bi-trash"></i> Garbitu</button>
                    <button type="submit" class="btn btn-primary w-48"><i class="bi bi-check-circle-fill"></i> Sortu erabiltzailea</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/Views/js/sortuErabiltzailea.js"></script>
</body>
</html>
