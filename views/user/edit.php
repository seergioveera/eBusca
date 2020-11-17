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
    <title>Editar datos</title>
</head>

<body>

    <?php
     include('../../resources/funciones.php');
     //si la funcion verificarUsuario retorno true, la sesion esta iniciada
     if (verificarUsuario()) {
         $user = $_SESSION['miUsuario'];
        //  echo "<b>Bienvenido: $user<b>";
     } 
 
    include '../../resources/conexion.php';
    // ACA DEBE RECIBIR PARAMETROS DE ID, CORREO Y/O PASS

    // $sql = mysqli_query($conn, "Select * from usuario where correo='$usuario' AND password='$clave'");
    $sql = mysqli_query($conn, "SELECT * FROM usuario WHERE idUsuario = (SELECT idUsuario FROM usuario WHERE correo = '$user');");
    if ($fila = mysqli_fetch_array($sql)) {
        $id = $fila["idUsuario"];
        $nom = $fila["nombre"];
        $ape = $fila["apellido"];
        $fecha = $fila["fechaNacimiento"];
        $correo = $fila["correo"];
        $pass = $fila["password"];
        $ciud = $fila["idCiudad"];
    }
    ?>

    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <a href="../user/index.php">
                <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
            </a>
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Editar datos: </h1>
                <form action="../../resources/operacion.php" method="post">
                    <div class="form-group">
                        <hr>
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label for="">Nombre: </label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <ion-icon name="man-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo "$nom"; ?>" required>
                                </div>
                            </div>
                            <div class="col-auto">
                                <label for="">Apellido: </label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <ion-icon name="man-outline"></ion-icon>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?php echo "$ape"; ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Nombre de Usuario: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="" placeholder="Nombre de Usuario" name="correo" value="<?php echo "$correo"; ?>" required >
                        </div>
                    </div>
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label for="">Fecha de nacimiento: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="calendar-outline"></ion-icon>
                                    </div>
                                </div>
                                <input type="date" class="form-control" id="" placeholder="" name="fechaNacimiento" value="<?php echo "$fecha"; ?>" required>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label for="">Ciudad: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="body-outline"></ion-icon>
                                    </div>
                                </div>
                                <select class="browser-default custom-select" name="ciudad" required>
                                    <option value="" required>Seleccione:</option>
                                    <?php
                                    $query = $mysqli->query("SELECT * FROM ciudad ORDER BY nombre ASC");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option name="ciudad" value="' . $valores[idCiudad] . '">' . $valores[nombre] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="key-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="pass" placeholder="Contraseña" value="<?php echo "$pass"; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row ">
                            <div class="col-md-6">
                                <input type="hidden" name="txtOpe" value='2'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="submit" name="boton" class="btn btn-block btn-primary" value="Guardar">
                                <small id="" class="form-text text-muted text-lg-center">Todos sus datos estan
                                    protegidos.
                                </small>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-block btn-danger">Eliminar</button>
                                <small id="" class="form-text text-muted text-lg-center">Los datos eliminados no se pueden recuperar.
                                </small>
                            </div>
                        </div>
                    </div>
                    <hr>
                </form>
            </div>
        </div>
    </div>
    </div>
    <footer class="page-footer font-small blue" style="position: fixed; bottom: 0; width: 150%;">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
    </footer>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>