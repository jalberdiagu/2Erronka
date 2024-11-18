<?php

class Vista
{
    public function initHTML()
    { ?>

        <!DOCTYPE html>
        <html lang="eu">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Liburuen Orgatxoa</title>
            <!-- LINKS BOOTSTRAP -->

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <link rel="stylesheet" href="/2Erronka/Views/css/global.css" type="text/css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=PT+Mono&display=swap"
                rel="stylesheet">
        </head>

        <body>
            <?php
    }

    public function navbar()
    { ?>
            <!-- NAVBAR -->
            <header>
                <span class="logo_wrap">
                    <a href="index.php">
                        <img src="/2Erronka/Views/img/logo.png" alt="Liburuen Orgatxoa Logo">
                    </a>
                </span>
                <nav>
                    <span id="hamburger_menu">
                        <span id="bar"></span>
                    </span>
                    <ul>
                        <li><a href="\2Erronka\Controller\CLiburuak.php">PRODUKTUAK</a></li>
                        <li><a href="">AGINDUAK</a></li>
                        <li><a href="http://localhost/2Erronka/Views/Vlogin.php"><i id="perfil" class="bi bi-person fs-5"></i></a></li>
                        <li><a href="http://localhost/2Erronka/Views/VOrga.php" class="cart-icon">
                                <i class="bi bi-cart fs-5"></i>
                                <span class="cart-count" id="cartCount">0</span>
                            </a></li>
                    </ul>
                </nav>
            </header>

            

            <style>
                
            </style>
        <?php }

    public function endHTML()
    { ?>

            <footer>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            <!-- JS Index -->
            <script src="\2Erronka\Views\js\index.js"></script>
            <script src="\2Erronka\Views\js\perfil.js"></script>

        </body>

        </html>

    <?php }

}