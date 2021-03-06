<?php
$mysqli = new mysqli('localhost', 'root', '', 'eBusca');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <title>Editar</title>    
    <link rel="icon" type="image/png" href="../../img/favicon.png">

</head>

<body>



<?php
$idInstitucion = $_GET["id"];
include '../../resources/conexion.php';
$sql = mysqli_query($conn, "SELECT * FROM institucion WHERE idInstitucion=$idInstitucion");
if ($fila = mysqli_fetch_array($sql)) {
    $nom = $fila["nombre"];
    $desc = $fila["descripcion"];
    $direc = $fila["direccion"];
    $tel = $fila["telefono"];
    // $logo = $fila["logo"];
    $correo = $fila["correo"];
    $user = $fila["idUsuario"];
    $ciud = $fila["idCiudad"];
}
?>



    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <a href="list.php">
                <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
            </a>
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Editar Institución: </h1>

                <form action="../../resources/operacion.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <hr>
                        <label for="">Nombre de la Institución: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="business-outline"> </ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="nombre" value="<?php echo "$nom"; ?>" placeholder="Nombre de la Institución">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Dirección de la Institución: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="trail-sign-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="direccion" value="<?php echo "$direc"; ?>" placeholder="Dirección de la Institución">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row ">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Descripcion:</label>
                                    <textarea class="form-control" name="descripcion" rows="3"><?php echo "$desc"; ?></textarea>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <span>
                                    <div class="form-group">
                                        <label for="">Agregar un logo:</label>
                                        <input type="file" name="imagen" class="form-control-file" style="font-size: 14px;">
                                    </div>
                                </span>
                            </div> -->
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
                            <input type="text" class="form-control" name="correo" value="<?php echo "$correo"; ?>" placeholder="Correo electronico">
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
                                    <input type="number" class="form-control" name="telefono" value="<?php echo "$tel"; ?>" placeholder="Telefono">
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
                                    <select class="browser-default custom-select" name="ciudad" required>
                                        <option value="0" required>Seleccione:</option>
                                        <?php
                                        $query = $mysqli->query("SELECT * FROM ciudad ORDER BY nombre ASC");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option name="institucion" value="' . $valores[idCiudad] . '">' . $valores[nombre] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row ">
                            <div class="col-md-6">
                                <input type="hidden" name="txtOpe" value='2'>
                                <input type="hidden" name="id" value="<?php echo $idInstitucion; ?>">
                                <input type="submit" name="boton2" class="btn btn-block btn-primary" value="Guardar">
                                <small id="" class="form-text text-muted text-lg-center">Todos sus datos están protegidos.
                                </small>
                            </div>
                            <div class="col-md-6">
                            <button class="btn btn-block btn-danger"><a href="../user/index.php" class="text-white" style="text-decoration: none;">Cancelar</a></button>
                                <small id="" class="form-text text-muted text-lg-center">Los datos cancelados no se pueden recuperar.
                                </small>
                            </div>
                        </div>
                    </div>
                    <hr>
                </form>
                <!--cierra el form que contiene a resource-->
            </div>
        </div>
    </div>
    <footer class="page-footer font-small blue" style="position: fixed; bottom: 0; width: 150%; background-color:#0275d8;">
        <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
            <a href="#" class="text-white"> eBusca. Buscador de Instituciones Universitarias.</a>
        </div>
    </footer>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>