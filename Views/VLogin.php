<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> 
    <link rel="stylesheet" href="../Views/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=PT+Mono&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="login-container position-relative">
        <a href="javascript:history.back()" class="back-arrow">
            <i class="bi bi-arrow-left-circle-fill"></i> 
        </a>
        <h1>SAIOA HASI</h1>
        <form action="../Controller/CLogin.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="pasahitza" class="form-label">Pasahitza</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" class="form-control" id="pasahitza" name="pasahitza" placeholder="Pasahitza" required>
                </div>
            </div>
            
            <div class="d-flex justify-content-start mb-3">
                <p class="me-2">Ez duzu konturik sortuta?</p>
                <a href="VsortuErabiltzailea.php">Sortu erabiltzailea</a>
            </div>
            
            <div class="d-flex justify-content-center">
            <button type="reset" class="btn btn-outline-danger w-48 me-3"><i class="bi bi-trash"></i> Garbitu</button>
            <button type="submit" class="btn btn-primary w-48"><i class="bi bi-check-circle-fill"></i>  Saioa hasi</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
    
</body>
</html>
