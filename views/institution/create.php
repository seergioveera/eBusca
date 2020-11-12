<?php
$mysqli = new mysqli('localhost', 'root', '', 'ebusca');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <title>Agregar</title>
</head>

<body>

    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <a href="../user/index.php">
                <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
            </a>
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Agregar Institución: </h1>

                <form action="../../resources/operacion.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <hr>
                        <label for="">Nombre de la Institución: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="business-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="" name="nombre" placeholder="Nombre de la Institución">
                        </div>
                    </div>
                    <div class="form-group">
                        <hr>
                        <label for="">Dirección de la Institución: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="business-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="" name="direccion" placeholder="Dirección de la Institución">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row ">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Descripcion:</label>
                                    <textarea class="form-control" id="" name="descripcion" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span>
                                    <div class="form-group">
                                        <label for="">Agregar un logo:</label>
                                        <input type="file" class="form-control-file" id="" name="imagen" style="font-size: 14px;">
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Correo electronico: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="" name="correo" placeholder="Correo electronico">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row ">
                            <div class="col-md-6">
                                <label for="">Telefono: </label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <ion-icon name="call-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="" name="telefono" placeholder="Telefono">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Ciudad: </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="">
                                            <ion-icon name="home-outline"></ion-icon>
                                        </label>
                                    </div>
                                    <select class="browser-default custom-select" name="ciudad">
                                        <option value="0">Seleccione:</option>
                                        <?php
                                        $query = $mysqli->query("SELECT * FROM ciudad");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option name="ciudad" value="' . $valores[idCiudad] . '">' . $valores[nombre] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="txtOpe" value='1'>
                    <input type="submit" name="boton2" class="btn btn-block btn-primary" style="margin-top: 22px;" value="Registrar">
                    <small id="" class="form-text text-muted text-lg-center">Todos sus datos estan protegidos.
                    </small>
                    <hr>
            </div>
            </form>
        </div>
    </div>
    </div>
    </form>


    <footer class="page-footer font-small blue" style="position: fixed; bottom: 0; width: 150%;">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
    </footer>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>