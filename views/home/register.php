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
    <title>Registrar</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top lead">
        <div class="container">
            <a class="navbar-brand  lead" href="#">
                <ion-icon name="library-outline"></ion-icon> eBusca
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="grid-outline" style="font-size: 32px;"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="../../index.html">INICIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link   text-lowercase  lead dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CARRERAS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Carrera1</a>
                            <a class="dropdown-item" href="#">Carrera2</a>
                            <a class="dropdown-item" href="#">Carrera3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  text-lowercase lead dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            UNIVERSIDADES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Universidad1</a>
                            <a class="dropdown-item" href="#">Universidad2</a>
                            <a class="dropdown-item" href="#">Universidad3</a>
                        </div>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="login.php">INICIAR SESION</a>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="register.php">CREAR CUENTA</a>
                    </li>
                    <li>
                        <div class="d-none d-md-block col-md-3 col-lg-6">
                            <a class="nav-link" href="#">
                                <ion-icon name="person-circle-outline" style="font-size: 25px;"></ion-icon>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Crear una cuenta</h1>

                <form method="post" action="../../resources/operacion.php">
                    <div class="form-group">
                        <hr>
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label for="exampleInputPassword1">Nombre: </label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <ion-icon name="man-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre"  required>
                                </div>
                            </div>
                            <div class="col-auto">
                                <label for="exampleInputPassword1">Apellido: </label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <ion-icon name="man-outline"></ion-icon>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre de Usuario: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="correo" placeholder="Nombre de Usuario" required>
                        </div>
                    </div>
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label for="exampleInputPassword1">Fecha de nacimiento: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="calendar-outline"></ion-icon>
                                    </div>
                                </div>
                                <input type="date" class="form-control" name="fechaNacimiento" placeholder="fechaNacimiento" required>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label for="exampleInputPassword1">Ciudad: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <ion-icon name="business-outline"></ion-icon>
                                    </div>
                                </div>
                                <select class="browser-default custom-select" name="ciudad" required>
                                    <option value="" required>Seleccione:</option>
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
                    <div class="form-group">
                        <label for="">Contraseña: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="key-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
                        </div>
                    </div>
                    <small id="" class="form-text text-muted">Nunca compartiremos tus datos con alguien más.</small>
                    <input type="hidden" name="txtOpe" value='1'>
                    <input type="submit" name="boton" class="btn btn-block btn-primary" style="margin-top: 22px;" value="Registrar">

                    <!-- <button type="submit" name="boton" id="registrarNuevo" class="btn btn-block btn-primary" style="margin-top: 22px;">Registrarse</button> -->
                    <hr>
                    <small id="" class="form-text text-muted text-lg-center">Ya te encuentras registrado?
                        <a href="login.html">Iniciar sesion</a> </small>
                </form>
            </div>
            <div class="text-login d-none d-sm-none d-md-block col-xs-block col-md-block col-lg-4">
                <div class="text-login">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias est voluptates ab? Quo saepe
                        expedita nemo asperiores aut voluptates blanditiis natus nesciunt voluptatem aliquid sint
                        pariatur,
                        dolorum architecto soluta distinctio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias est voluptates ab? Quo saepe
                        expedita nemo asperiores aut voluptates blanditiis natus nesciunt voluptatem aliquid sint
                        pariatur,
                        dolorum architecto soluta distinctio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias est voluptates ab? Quo saepe
                        expedita nemo asperiores aut voluptates blanditiis natus nesciunt voluptatem aliquid sint
                        pariatur,
                        dolorum architecto soluta distinctio.</p>
                </div>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#registrarNuevo').click(function() {
            if ($('#nombre').val() == "") {
                alert("Debes agregar el nombre");
                return false;
            } else if ($('#apellido').val() == "") {
                alert("Debes agregar el apellido");
                return false;
            } else if ($('#correo').val() == "") {
                alert("Debes agregar el Nombre de Usuario");
                return false;
            } else if ($('#fechaNacimiento').val() == "") {
                alert("Debes agregar la fecha de nacimiento");
                return false;
            } else if ($('#sexo').val() == "") {
                alert("Debes agregar el sexo");
                return false;
            } else if ($('#password').val() == "") {
                alert("Debes agregar la contrasena");
                return false;
            }
        });
    });
</script>