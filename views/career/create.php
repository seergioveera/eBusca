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

<?php
     include('../../resources/funciones.php');
     //si la funcion verificarUsuario retorno true, la sesión esta iniciada
     if (verificarUsuario()) {
         $user = $_SESSION['miUsuario'];
         //echo "<b>Bienvenido: $user<b>";
     } 
 
    include '../../resources/conexion.php';

    $sql = mysqli_query($conn, "SELECT idUsuario FROM usuario WHERE correo='$user'");
    if ($fila = mysqli_fetch_array($sql)) {
        $id = $fila["idUsuario"];
        // echo $id;
    }
    ?>

    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <a href="../user/index.php">
                <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
            </a>
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Agregar Carrera: </h1>
                <form action="../../resources/operacion.php" method="post">

                    <div class="form-group">
                        <hr>
                        <label for="">Nombre de la Carrera: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="business-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="" name="nombre" placeholder="Nombre de la Carrera" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Institucion: </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">
                                    <ion-icon name="home-outline"></ion-icon>
                                </label>
                            </div>
                            <select class="browser-default custom-select" name="institucion" required>
                                <option value="" required>Seleccione:</option>
                                <?php
                                
                                $query = $mysqli->query("SELECT * FROM institucion WHERE idUsuario = $id");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option name="institucion" value="' . $valores[idInstitucion] . '">' . $valores[nombre] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion:</label>
                        <textarea class="form-control" id="" name="descripcion" rows="3" required></textarea>
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
                                    <input type="number" class="form-control" id="" name="arancel" placeholder="Arancel" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Semestres: </label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <ion-icon name="hourglass-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="" name="duracion" placeholder="Semestres" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row ">
                            <div class="col-md-6">
                                <label for="">Horario: </label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <ion-icon name="time-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <select class="browser-default custom-select" name="horario" required>
                                        <option value="" required>Seleccione:</option>
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
                                    <select class="browser-default custom-select" name="modalidad" required>
                                        <option value="" required>Seleccione:</option>
                                        <?php
                                        $query = $mysqli->query("SELECT * FROM modalidad");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option name="modalidad" value="' . $valores[idModalidad] . '">' . $valores[descripcion] . '</option>';
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
                                            <ion-icon name="documents-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <select class="browser-default custom-select" name="categoria" required>
                                        <option value="" required>Seleccione:</option>
                                        <?php
                                        $query = $mysqli->query("SELECT * FROM categoria ORDER BY descripcion ASC");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option name="categoria" value="' . $valores[idCategoria] . '">' . $valores[descripcion] . '</option>';
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
                                            <ion-icon name="call-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" id="" name="telefono" placeholder="Telefono" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="txtOpe" value='1'>
                    <input type="hidden" name="idUser" value="<?php echo $id?>">
                    <input type="submit" name="boton1" class="btn btn-block btn-primary" style="margin-top: 22px;" value="Registrar">
                    <small id="" class="form-text text-muted text-lg-center">Todos sus datos están protegidos.
                    </small>
                    <hr>
                </form>
            </div>
            </form>
        </div>
    </div>
    </div>
    </form>


    <footer class="page-footer font-small blue" style="position: fixed; bottom: 0; width: 150%; background-color:#0275d8;">
        <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
            <a href="#" class="text-white"> eBusca. Buscador de Instituciones Universitarias.</a>
        </div>
    </footer>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>