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
    <title>Iniciar sesión</title>    
    <link rel="icon" type="image/png" href="../../img/favicon.png">
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top lead">
        <div class="container">
            <a class="navbar-brand  lead" href="../../index.php">
                <img src="../../img/logo.png" alt="logo-eBusca">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="grid-outline" style="font-size: 32px;"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="../../index.php">INICIO</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="../information/listCareer.php">carreras</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="../information/listInstitution.php">universidades</a>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="login.php">INICIAR sesión</a>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="register.php">CREAR CUENTA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <div class="main row">
                    <a href="../../index.php">
                        <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
                    </a>
                    <h1>Bienvenido</h1>
                </div>
                <form method="POST" name="myForm" action="../../resources/validar.php">
                    <div class="form-group">
                        <hr>
                        <label for="correo">Nombre de Usuario: </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </div>
                            </div>
                            <input type="mail" name="txtUsuario" class="form-control" id="usuario" placeholder="Nombre de Usuario" require>
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
                            <input type="password" name="txtClave" class="form-control" id="password" placeholder="Contraseña" require>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="">
                        <label class="form-check-label small text-muted" for="">Recuerdame</label>
                    </div>
                    <button type="submit" id="entrarSistema" class="btn btn-block btn-primary" style="margin-top: 22px;">Ingresar</button>
                    <hr>
                    <small id="" class="form-text text-muted text-lg-center">¿Aún no tienes una cuenta?
                        <a href="register.php">Crear una cuenta</a> </small>
                </form>
            </div>
            <div class="d-none d-sm-none d-md-block col-xs-block col-md-block col-lg-4" style="border-radius: 5px; border: solid 2px #0275d8; background-color:#ECECEC">
                <div class="">
                    <p style="padding-top: 15px;">
                        <h5 class="text-primary"> <b> Inicia sesión: </b></h5>
                    </p>
                    <hr><br>
                    <p>Inicia sesión, publica informaciones, sugiere mejoras, busca carreras que se adapten a tus necesidades,
                        ahorre tiempo de navegación y disfruta de las muchas otras ventajas que trae consigo ser parte de este sitio web.</p>
                    <br>
                    <hr>
                    <p>
                        <h7 class="text-primary"><b>No pierdas la oportunidad de formar parte. </b> </h7>
                    </p>
                </div>
                </form>
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


<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == 1) {
        echo '<script type="text/javascript">alert("Usuario o contraseña incorrecta. ");</script>';
        echo '<script type="text/javascript">window.document.myForm.txtUsuario.focus();</script>';
    }
}
?>