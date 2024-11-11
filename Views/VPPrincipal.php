<?php

require_once __DIR__ . '/Vista.php';

class VPPrincipal extends Vista
{


    public function carousel_hot($libros)
    { ?>

        <div id="libros_hot">
            <h1>HOT!</h1>
            <div id="carouselExample1" class="carousel">
                <div class="carousel-inner">

                    <?php
                    foreach ($libros as $libro) { ?>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img id="imgCarousel" src='<?= $libro["argazkia"]; ?>' alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"><?= $libro["izenburua"]; ?></h5>
                                    <p class="card-text"><?= $libro["idazlea"]; ?></p>
                                    <p class="card-text"><?= $libro["generoa"]; ?></p>
                                    <p class="card-text"><?= $libro["prezioa"]; ?>€</p>
                                    <a href='CLiburua.php?book=<?=
                                        $libro["izenburua"];
                                    ?>' class="btn btn-primary">Ikusi Liburua</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- END CAROUSEL -->
        </div>
    <?php }


    public function carousel_new($libros)
    { ?>

        <div id="libros_new">
            <h1>BERRIAK!</h1>
            <div id="carouselExample2" class="carousel slide">
                <div class="carousel-inner">

                    <?php
                    foreach ($libros as $libro) { ?>
                        <div class="carousel-item ">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img id="imgCarousel" src='<?= $libro["argazkia"]; ?>' alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"><?= $libro["izenburua"]; ?></h5>
                                    <p class="card-text"><?= $libro["idazlea"]; ?></p>
                                    <p class="card-text"><?= $libro["generoa"]; ?></p>
                                    <p class="card-text"><?= $libro["prezioa"]; ?>€</p>
                                    <a href='CLiburua.php?book=<?=
                                        $libro["izenburua"];
                                    ?>' class="btn btn-primary">Ikusi Liburua</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- END CAROUSEL -->
        </div>
    <?php }

}