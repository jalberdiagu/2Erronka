<?php

require_once __DIR__ . '/Vista.php';

class VPPrincipal extends Vista
{

    public function carousel_new($libros)
    { ?>

        <div id="libros_new">
            <h1 class="berriak">Berriak!</h1>
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
            <br>
            <div class="containerAutor">
                <div class="cardAutor"> <a href='CLiburuak.php?idazlea=George R. R. Martin'></a>
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
                    <div class="avatarAutor">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0f/Gabriel_Garcia_Marquez.jpg" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Gabriel García Márquez</h2>
                        <hr />
                        <div>
                            <p>Generoa: Errealismo magikoa</p>
                            <p>Liburuak: Ehun urteko bakardadea, Iragarritako heriotza baten kronika</p>
                            <p>Herrialdea: Mexiko</p>
                            <blockquote>“Maite zaitut ez zarenagatik, zurekin nagoenean naizenagatik baizik.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="avatarAutor">
                        <img src="https://areajugones.sport.es/wp-content/uploads/2024/07/brandon-sanderson-min-1560x880.jpg.webp" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Brandon Sanderson</h2>
                        <hr />
                        <div>
                            <p>Generoa: Literatura Fantastikoa</p>
                            <p>Liburuak: Mistborn (Saga), Ekaitz Artxiboa (Saga)</p>
                            <p>Herrialdea: Estatu Batuak</p>
                            <blockquote>“- Zer gertatu zaigu? Non dago gure ohorea? -Ohorea hil da. Baina ikusiko dut zer egin dezakedan. Gaizki ateratzen bada, zaindu nire gizonak.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="avatarAutor">
                        <img src="https://stephenking.es/img/el-autor/cover-mediana.jpg" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Stephen King</h2>
                        <hr />
                        <div>
                            <p>Generoa: Izua</p>
                            <p>Liburuak: It, Distira</p>
                            <p>Herrialdea: Estatu Batuak</p>
                            <blockquote>“Gauza egokia egiten ahalegintzen den jendea beti eroa dirudi.”</blockquote>
                        </div>
                    </div>
                </div>
                <div class="cardAutor">
                    <div class="avatarAutor">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Franz_Kafka%2C_1923.jpg/640px-Franz_Kafka%2C_1923.jpg" alt="" />
                    </div>
                    <hr />
                    <div class="statsAutor">
                        <h2>Franz Kafka</h2>
                        <hr />
                        <div>
                            <p>Generoa: Errealismo Fantastikoa</p>
                            <p>Liburuak: Metamorfosia, Gaztelua</p>
                            <p>Herrialdea: Txekia</p>
                            <blockquote>“Iraultza oro lurrundu eta burokraziaren arrasto bat uzten du atzean.”</blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }

}