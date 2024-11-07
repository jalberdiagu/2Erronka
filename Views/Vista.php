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
            <link rel="stylesheet" href="/Views/css/global.css">
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
    <?php }

    public function endHTML()
    { ?>

            <!-- SCRIPTS BOOTSTRAP -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
            <!-- JS BOOTSTRAP -->
             <script>src="2Erronka/Views/js/index.js"</script>

        </body>

        </html>

    <?php }

}