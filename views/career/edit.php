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
    <title>Editar</title>
</head>

<body>
    <?php
    // $idCli = $_GET["id"];
    include '../../resources/conexion.php';
    // ACA DEBE RECIBIR PARAMETROS DE ID, CORREO Y PASS

    $sql = mysqli_query($conn, "Select * from carrera where idCarrera=2");
    if ($fila = mysqli_fetch_array($sql)) {
        $id = $fila["idCarrera"];
        $nom = $fila["nombre"];
        $desc = $fila["descripcion"];
        $aran = $fila["arancel"];
        $dura = $fila["duracion"];
        $hora = $fila["idHorario"];
        $moda = $fila["idModalidad"];
        $insti = $fila["idInstitucion"];
        $categ = $fila["idCategoria"];
        $tele = $fila["telefono"];
    }
    ?>

    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Editar Carrera: </h1>
                <form>

                    <div class="form-group">
                        <hr>
                        <label for="">Nombre de la Carrera: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="library-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="" value="<?php echo "$nom"; ?>" placeholder="Nombre de la Carrera">
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <label for="exampleInputPassword1">Institucion: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">
                                <ion-icon name="home-outline"></ion-icon>
                            </label>
                        </div>
                        <select class="browser-default custom-select" name="ciudad">
                            <option value="0">Seleccione:</option>
                            <?php
                            $query = $mysqli->query("SELECT * FROM institucion ORDER BY nombre ASC");
                            while ($valores = mysqli_fetch_array($query)) {
                                echo '<option name="institucion" value="' . $valores[idInstitucion] . '">' . $valores[nombre] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Descripcion:</label>
                    <textarea class="form-control" id="" rows="3"><?php echo "$desc"; ?></textarea>
                </div>

                <div class="form-group">
                    <div class="form-row ">
                        <div class="col-md-6">
                            <label for="">Arancel: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="card-outline"></ion-icon>
                                    </div>
                                </div>
                                <input type="number" class="form-control" id="" placeholder="Arancel" value="<?php echo "$aran"; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Duracion: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="hourglass-outline"></ion-icon>
                                    </div>
                                </div>
                                <input type="number" class="form-control" id="" placeholder="Duracion" value="<?php echo "$dura"; ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row ">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Horario: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="time-outline"></ion-icon>
                                    </div>
                                </div>
                                <select class="browser-default custom-select" name="horario">
                                    <option value="0">Seleccione:</option>
                                    <?php
                                    $query = $mysqli->query("SELECT * FROM horario");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option name="horario" value="' . $valores[idHorario] . '">' . $valores[descripcion] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Modalidad: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="file-tray-stacked-outline"></ion-icon>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" id="" hidden placeholder="Modalidad" value="<?php echo "$moda"; ?>">
                                <select class="browser-default custom-select" name="horario">
                                    <option value="0">Seleccione:</option>
                                    <?php
                                    $query = $mysqli->query("SELECT * FROM modalidad");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option name="horario" value="' . $valores[idModalidad] . '">' . $valores[descripcion] . '</option>';
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
                            <label for="">Categoria: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="time-outline"></ion-icon>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" id="" placeholder="Categoria" value="<?php echo "$categ"; ?>">
                                <select class="browser-default custom-select" name="horario">
                                    <option value="0">Seleccione:</option>
                                    <?php
                                    $query = $mysqli->query("SELECT * FROM categoria");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option name="horario" value="' . $valores[idCategoria] . '">' . $valores[descripcion] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Telefono: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="file-tray-stacked-outline"></ion-icon>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="" placeholder="Modalidad" value="<?php echo "$tele"; ?>">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="form-row ">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-block btn-primary">Guardar</button>
                            <small id="" class="form-text text-muted text-lg-center">Todos sus datos estan protegidos.
                            </small>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-block btn-danger">Eliminar</button>
                            <small id="" class="form-text text-muted text-lg-center">Los datos no se podran recuperar.
                            </small>
                        </div>
                    </div>
                </div>
                <hr>
                </form>
            </div>
            </form>
        </div>
    </div>
    </div>
    <!-- <footer class="page-footer font-small blue" style="position: fixed; bottom: 0; width: 150%;">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
    </footer> -->
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>