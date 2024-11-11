<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
            <link rel="stylesheet" href="css/login.css">
            <title>Login</title>
        </head>
        <body class="d-flex justify-content-center align-items-center min-vh-100">
            <div class="login-container">
                <h1 class="text-center mb-4">SAIOA HASI</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Posta elektronikoa:</b></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Idatzi zure posta elektronikoa..." required>
                    </div>
                    <div class="mb-3">
                        <label for="pasahitza" class="form-label"><b>Pasahitza:</b></label>
                        <input type="password" class="form-control" id="pasahitza" name="pasahitza" placeholder="Idatzi zure pasahitza..." required>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <p class="me-2">Ez duzu konturik sortuta?</p>
                        <a href="Vadmin.php">Sortu erabiltzailea</a>
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
<? 

