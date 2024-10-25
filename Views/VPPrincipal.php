<?

class VPPrincipal extends Vista
{

    public function navbar()
    { ?>
        <!-- NAVBAR -->
        <nav id="navbar">
            <a class="logo" href="./index.html">
                <img src="../img/logo.png" alt="" />
                <span>Liburuen Orgatxoa</span>
            </a>
            <ul class="links">
                <div class="separadorBorde"></div>
                <li><a href="./indexDestinos.html">Destinos</a></li>
                <li><a href="./actividades.html">Actividades</a></li>
            </ul>
        </nav>
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

}