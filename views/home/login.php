<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <title>Iniciar Sesion</title>
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


    <div class="container" style="margin-top: 220px;">
        <div class="main row">
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Bienvenido</h1>
                <form method="POST" name="myForm" action="../../resources/validar.php">
                    <div class="form-group">
                        <hr>
                        <label for="correo">Correo electronico: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="mail" name="txtUsuario" class="form-control" id="usuario" placeholder="Correo electronico">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="key-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="password" name="txtClave" class="form-control" id="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="">
                        <label class="form-check-label small text-muted" for="">Recuerdame</label>
                    </div>
                    <button type="submit" id="entrarSistema" class="btn btn-block btn-primary" style="margin-top: 22px;">Ingresar</button>
                    <hr>
                    <small id="" class="form-text text-muted text-lg-center">Aun no tienes una cuenta?
                        <a href="register.html">Crear una cuenta</a> </small>
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
    <footer class="page-footer font-small blue" style="position: absolute; bottom: 0; width: 100%;;">
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
        $('#entrarSistema').click(function() {
            if ($('#usuario').val() == "") {
                alert("Debes ingresar el correo");
                return false;
            } else if ($('#password').val() == "") {
                alert("Debes ingresar la contrasena");
                return false;
            }
        })
    })
</script>

<?php
if (isset($_GET['error'])) {
  $error = $_GET['error'];
  if ($error == 1) {
    echo '<script type="text/javascript">alert("Usuario o contraseña incorrecta. ");</script>';
    echo '<script type="text/javascript">window.document.myForm.txtUsuario.focus();</script>';
  }
}
?>