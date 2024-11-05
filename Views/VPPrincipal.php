<?

class VPPrincipal extends Vista
{

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
    <? }
    public function carousel_hot()
    { ?>

        <div id="libros_hot">
            <h1>HOT!<i class="bi bi-fire"></i></h1>
            <!-- CAROUSEL -->
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- CARDS -->
                        <div class="cards-wrapper">
                            <div class="card" style="width: 18rem;">
                                <div class="image-wrapper">
                                    <img src="..." class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="image-wrapper">
                                    <img src="..." class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="image-wrapper">
                                    <img src="..." class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!--END CARDS -->
                    </div>
                    <div class="carousel-item">
                        <!-- CARDS -->
                        <div class="cards-wrapper">
                            <div class="card" style="width: 18rem;">
                                <div class="image-wrapper">
                                    <img src="..." class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="image-wrapper">
                                    <img src="..." class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="image-wrapper">
                                    <img src="..." class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!--END CARDS -->
                    </div>
                    <div class="carousel-item">
                        <!-- CARDS -->
                        <div class="cards-wrapper">
                            <div class="card" style="width: 18rem;">
                                <div class="image-wrapper">
                                    <img src="..." class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="image-wrapper">
                                    <img src="..." class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="image-wrapper">
                                    <img src="..." class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!--END CARDS -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- END CAROUSEL -->

    <? }

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
    <? }

}