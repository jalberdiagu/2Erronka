<?php

require_once __DIR__ . '/Vista.php';

class VPPrincipal extends Vista
{

    
    public function carousel_hot($libros)
    { ?>

        <div id="libros_hot">
            <h1>HOT!</h1>
            <div class="owl-carousel owl-theme">
                <?php
                foreach ($libros as $libro) {
                    ?>
                    <div class="carousel-item">
                        <a href="CLiburua.php?book=<?php
                                $libro["izenburua"];
                                    ?>">
                            <div class="carousel-item-image">
                                <img src="<?php
                                echo $libro["argazkia"];
                                    ?>" class="item-image">
                            </div>
                            <div class="carousel-item-text">
                                <span class="item-kicker">
                                    <?php
                                    echo $libro["idazlea"];
                                        ?>
                                </span>
                                <h3 class="item-title">
                                    <?php
                                    echo $libro["izenburua"];
                                        ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php }

                ?>
            </div>
            <!-- END CAROUSEL -->
        </div>
    <?php }


    public function carousel_new($libros)
    { ?>

        <div id="libros_new">
            <h1>BERRIAK!</h1>
            <div class="owl-carousel owl-theme">
                <?php
                foreach ($libros as $libro) {
                    ?>
                    <div class="carousel-item">
                        <a href="#">
                            <div class="carousel-item-image">
                                <img src="<?php
                                echo $libro["argazkia"];
                                    ?>" class="item-image">
                            </div>
                            <div class="carousel-item-text">
                                <span class="item-kicker">
                                    <?php
                                    echo $libro["idazlea"];
                                        ?>
                                </span>
                                <h3 class="item-title">
                                    <?php
                                    echo $libro["izenburua"];
                                        ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php }

                ?>
            </div>
            <!-- END CAROUSEL -->
        </div>
    <?php }

    public function footer()
    { ?>
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
    <?php }

}