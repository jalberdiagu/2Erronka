<?php

require_once __DIR__ . '/Vista.php';

class VPPrincipal extends Vista
{

    public function carousel_new($libros)
    { ?>

        <div id="libros_new">
            <h1>BERRIAK!</h1>
            <div id="carousel2" class="carousel">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- END CAROUSEL -->
        </div>
    <?php }

    public function autores()
    { ?>
        <div id="autores_famosos">
            <h1>Autore famatuak</h1>
            <div class="containerAutor">
                <div class="cardAutor">
                    <div class="border"></div>
                    <div class="avatarAutor">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Portrait_photoshoot_at_Worldcon_75%2C_Helsinki%2C_before_the_Hugo_Awards_%E2%80%93_George_R._R._Martin.jpg/1200px-Portrait_photoshoot_at_Worldcon_75%2C_Helsinki%2C_before_the_Hugo_Awards_%E2%80%93_George_R._R._Martin.jpg"
                            alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>George R. R. Martin</h2>
                        <hr />
                        <div>
                            <p>Generoa: Literatura Fantastikoa</p>
                            <p>Liburuak: Izotz eta Suzko Kantua (Saga)</p>
                            <p>Herrialdea: Estatu Batuak</p>
                            <blockquote>“Tronuen jokoan jolasean bakarrik irabazi edo hil zaitezke. Ez dago tarteko punturik.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="border"></div>
                    <div class="avatarAutor">
                        <img src="https://m.media-amazon.com/images/S/amzn-author-media-prod/8cigckin175jtpsk3gs361r4ss.jpg " alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>J. K. Rowling</h2>
                        <hr />
                        <div>
                            <p>Generoa: Literatura Fantastikoa</p>
                            <p>Liburuak: Harry Potter (Saga)</p>
                            <p>Herrialdea: Erresuma Batua</p>
                            <blockquote>“Gizon batengan benetako handitasuna ikusi nahi baduzu, begiratu nola tratatzen dituen behekoak, ez berdinak.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="border"></div>
                    <div class="avatarAutor">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/F%C3%A9lix_Nadar_1820-1910_portraits_Jules_Verne.jpg/640px-F%C3%A9lix_Nadar_1820-1910_portraits_Jules_Verne.jpg" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Julio Verne</h2>
                        <hr />
                        <div>
                            <p>Generoa: Zientzia Fikzioa</p>
                            <p>Liburuak: Bidaia lurraren erdigunera, Munduari buelta 80 egunetan</p>
                            <p>Herrialdea: Frantzia</p>
                            <blockquote>“Lurrak ez ditu kontinente berriak behar, gizon berriak baizik.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="border"></div>
                    <div class="avatarAutor">
                        <img src="https://m.media-amazon.com/images/S/amzn-author-media-prod/qg9l4vrgesf4gcc533031l6si.jpg" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Rebecca Yarros</h2>
                        <hr />
                        <div>
                            <p>Generoa: Erromantze garaikidea</p>
                            <p>Liburuak: Enpiriko (Saga)</p>
                            <p>Herrialdea: Estatu Batuak</p>
                            <blockquote>“Mina ematen duelako horrelako zerbait egingo lukeen erreinua garela pentsatzeak. Min ematen du dakizula uste duzun guztia desikastea. Gezurrak erosotasuna ematen du. Egiak min egiten du.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="border"></div>
                    <div class="avatarAutor">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199526/jonsnow.jpg" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Gabriel García Márquez</h2>
                        <hr />
                        <div>
                            <p>Generoa: Errealismo magikoa</p>
                            <p>Liburuak: Bidaia lurraren erdigunera, Munduari buelta 80 egunetan</p>
                            <p>Herrialdea: Frantzia</p>
                            <blockquote>“La Tierra no necesita nuevos continentes, sino nuevos hombres.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="border"></div>
                    <div class="avatarAutor">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199526/jonsnow.jpg" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Julio Verne</h2>
                        <hr />
                        <div>
                            <p>Generoa: Zientzia Fikzioa</p>
                            <p>Liburuak: Bidaia lurraren erdigunera, Munduari buelta 80 egunetan</p>
                            <p>Herrialdea: Frantzia</p>
                            <blockquote>“La Tierra no necesita nuevos continentes, sino nuevos hombres.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="border"></div>
                    <div class="avatarAutor">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199526/jonsnow.jpg" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Julio Verne</h2>
                        <hr />
                        <div>
                            <p>Generoa: Zientzia Fikzioa</p>
                            <p>Liburuak: Bidaia lurraren erdigunera, Munduari buelta 80 egunetan</p>
                            <p>Herrialdea: Frantzia</p>
                            <blockquote>“La Tierra no necesita nuevos continentes, sino nuevos hombres.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="border"></div>
                    <div class="avatarAutor">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199526/jonsnow.jpg" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Julio Verne</h2>
                        <hr />
                        <div>
                            <p>Generoa: Zientzia Fikzioa</p>
                            <p>Liburuak: Bidaia lurraren erdigunera, Munduari buelta 80 egunetan</p>
                            <p>Herrialdea: Frantzia</p>
                            <blockquote>“La Tierra no necesita nuevos continentes, sino nuevos hombres.”</blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }

}