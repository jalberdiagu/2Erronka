<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administratzailea</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-center">Erabiltzaileen erregistroa</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="frm">
                            <div class="form-group">
                                <label for="">Izena</label>
                                <input type="hidden" name="idp" id="idp" value="">
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
                                <input type="number" min="0" max="1" name="rola" id="rola" placeholder="0= Erabiltzailea; 1= Administratzailea" class="form-control">
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
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Izena</th>
                            <th>Abizena</th>
                            <th>Email</th>
                            <th>Pasahitza</th>
                            <th>Rola</th>
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
</body>

</html>