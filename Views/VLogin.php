<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container position-relative">
        <a href="javascript:history.back()" class="back-arrow">
            <i class="bi bi-arrow-left-circle-fill"></i> 
        </a>
        <h1>SAIOA HASI</h1>
        <form action="/2Erronka/Controller/index.php?action=egiaztatuLogin" method="POST">        
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="pasahitza" class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" class="form-control" id="pasahitza" name="pasahitza" placeholder="Contraseña" required>
                </div>
            </div>
            
            <div class="d-flex justify-content-start mb-3">
                <p class="me-2">Ez duzu konturik sortuta?</p>
                <a href="VsortuErabiltzailea.php">Sortu erabiltzailea</a>
            </div>
            
            <div class="d-flex justify-content-center">
                <button type="reset" class="btn btn-secondary me-2">Ezabatu</button>
                <button type="submit" class="btn btn-primary">Sartu</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
</body>
</html>
