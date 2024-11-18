<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administratzailea</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/2Erronka/Views/css/admin.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=PT+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light" id="navbar">
        <div class="container-fluid d-flex">
            <h2 class=" justify-content-start">Administratzailearen panela</h2>
            <ul class="navbar-nav d-flex flex-row ms-3 justify-content-end">
                <li class="nav-item p-2 flex-fill">
                    <a class="nav-link active" id="opMenu1" aria-current="page" href="VAdmin.php">Erabiltzaileak</a>
                </li>
                <li class="nav-item p-2 flex-fill">
                    <a class="nav-link" id="opMenu" href="VAdminL.php">Liburuak</a>
                </li>
                <li class="nav-item p-2 flex-fill">
                    <a class="nav-link" id="opMenu" href="VAdminP.php">Eskaerak</a>
                </li>
                <li class="nav-item p-2 flex-fill">
                    <a class="nav-link" id="opMenu"href="#">Deskontuak</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid justify-content-center ">
        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="card" id="panelErr">
                    <div class="card-header" id="tituloErr">
                        <h4 class="text-center">Erabiltzaileen erregistroa</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="frm">
                            <div class="form-group" style="display: none;">
                                <label for="">ID</label>
                                <input type="number" name="id_erab" id="id_erab" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Izena</label>
                                <input type="text" name="izena" id="izena" placeholder="Idatzi hemen izena" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Abizena</label>
                                <input type="text" name="abizena" id="abizena" placeholder="Idatzi hemen abizena" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="email" placeholder="Idatzi hemen emaila" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Pasahitza</label>
                                <input type="text" name="pasahitza" id="pasahitza" placeholder="Idatzi hemen pasahitza" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Rola</label>
                                <input type="text" name="rola" id="rola" placeholder="0= Erabiltzailea; 1= Administratzailea" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="button" value="Erregistratu" id="erregistratu" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
            
                <div class="row">
                    <div class="col-lg-6 ml-auto">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="bilatu">Bilatu:</label>
                                    <input type="text" name="bilatu" id="bilatu" placeholder="bilatu..." class="form-control">
                                </div>
                            </form>
                    </div>
                </div>


                <table class="table table-hover table-resposive">
                    <thead class="thead" id="tabla">
                        <tr>
                            <th>ID</th>
                            <th>Izena</th>
                            <th>Abizena</th>
                            <th>Email</th>
                            <th>Pasahitza</th>
                            <th>Rola</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="erantzuna">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/adminEScript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>