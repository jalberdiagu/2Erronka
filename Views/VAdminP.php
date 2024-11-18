<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administratzailea</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/2Erronka/Views/css/admin.css" type="text/css">
</head>

<body>
    <nav class="navbar navbar-light" id="navbar">
        <div class="container-fluid d-flex">
            <h2 class=" justify-content-start">Administratzailearen panela</h2>
            <ul class="navbar-nav d-flex flex-row ms-3 justify-content-end">
                <li class="nav-item p-2 flex-fill">
                    <a class="nav-link" aria-current="page" href="VAdmin.php">Erabiltzaileak</a>
                </li>
                <li class="nav-item p-2 flex-fill">
                    <a class="nav-link " href="VAdminL.php">Liburuak</a>
                </li>
                <li class="nav-item p-2 flex-fill">
                    <a class="nav-link active" href="VAdminP.php">Eskaerak</a>
                </li>
                <li class="nav-item p-2 flex-fill">
                    <a class="nav-link" href="#">Deskontuak</a>
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
                        <h4 class="text-center">Eskaeren aldaketa</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="frm">
                            <div class="form-group" style="display: none;">
                                <label for="">ID</label>
                                <input type="text" name="id_eska" id="id_eska" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Egoera</label>
                                <input type="text" name="egoera" id="egoera" placeholder="0= Desaktibatuta; 1=Aktibatuta" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="button" value="Aldatu" id="erregistratu" class="btn btn-primary btn-block">
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
                            <th>Eskaera ID</th>
                            <th>Erabiltzailea ID</th>
                            <th>Data</th>
                            <th>Egoera</th>
                            <th>Guztira</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="erantzuna">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/adminPScript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>