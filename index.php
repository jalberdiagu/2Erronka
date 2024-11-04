<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liburuen Orgatxoa</title>
    <!-- LINKS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Views/css/global.css">
    <!-- LINKS CSS -->
</head>

<body>
    <header>
        <span class="logo_wrap">
            <a href="index.php">
                <img src="Views/img/logo.jpg" alt="Liburuen Orgatxoa Logo">
            </a>
        </span>
        <nav>
            <span id="hamburger_menu">
                <span id="bar"></span>
            </span>
            <ul>
                <li><a href="">PRODUKTUAK</a></li>
                <li><a href="z">AGINDUAK</a></li> 
                <li><a href="Views/Vlogin.php"><i class="bi bi-person fs-5"></i></a></li>
            </ul>
        </nav>
    </header>

    <div id="libros_hot">
        <h1>HOT!<i class="bi bi-fire"></i></h1>
        <!-- CAROUSEL -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card" style="width: 18rem;">
                            <div class="image-wrapper">
                                <img src="Views/img/libro1.jpg" class="card-img-top" alt="Libro 1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Libro 1</h5>
                                <p class="card-text">Descripción del libro 1.</p>
                                <a href="#" class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="image-wrapper">
                                <img src="Views/img/libro2.jpg" class="card-img-top" alt="Libro 2">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Libro 2</h5>
                                <p class="card-text">Descripción del libro 2.</p>
                                <a href="#" class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="image-wrapper">
                                <img src="Views/img/libro3.jpg" class="card-img-top" alt="Libro 3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Libro 3</h5>
                                <p class="card-text">Descripción del libro 3.</p>
                                <a href="#" class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Additional carousel items can go here -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <footer>
        <span class="logo_wrap">
            <a href="#">
                <img src="Views/img/logo.jpg" class="logo-sm" alt="Liburuen Orgatxoa Logo">
            </a>
        </span>
        <nav>
            <ul>
                <li><a href="https://www.tiktok.com/es/"><i class="fa-brands fa-tiktok"></i></a></li>
                <li><a href="https://www.instagram.com/?hl=es"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/?locale=es_ES"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>
        </nav>
        <p>Irudi guztiek CC BY-NC 4.0 eta CC BY 2.0 lizentziak dituzte.</p>
    </footer>

    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="Views/js/index.js"></script>
</body>
</html>
