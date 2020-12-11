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
    <nav class="navbar navbar-expand-lg fixed-top lead">
        <div class="container">
            <a class="navbar-brand  lead" href="index.php">
                <ion-icon name="library-outline"></ion-icon> eBusca
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="grid-outline" style="font-size: 32px;"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="../information2/listCareer.php">carreras</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="../information2/listInstitution.php">universidades</a>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="edit.php">Editar datos</a>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="sugerir.php">Sugererencias</a>
                    </li>
                    <li>

                        <?php
                        include('../../resources/funciones.php');
                        if (verificarUsuario()) {
                            $user = $_SESSION['miUsuario'];
                            echo "
        <a class='nav-link lead' href='../../resources/salir.php'>cerrar sesión</a><br>";
                        } else {
                            header("location:../index.php");
                        }

                        ?>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <a href="../user2/index.php">
                <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
            </a>
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Sugerir Cambios: </h1>
                <form action="../../resources/operacion.php" method="post">
                    <div class="form-group">
                        <hr><br>
                        <div class="form-group">
                            <label for="">
                                <h5>Escribir una sugerencia:</h5>
                            </label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="" name="descripcion" rows="6"></textarea>
                            <small id="" class="form-text text-muted text-lg-center">Todas las sugerencias hechas son anonimas.</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row ">
                            <div class="col-md-6">
                                <input type="hidden" name="txtOpe" value='3'>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="submit" name="boton3" class="btn btn-block btn-primary" value="Sugerir">
                            </div>
                            <div class="col-md-6">
                                <a href="index.php" class="text-white"><button type="submit" class="btn btn-block btn-danger">Cancelar</button></a>
                            </div>
                        </div>
                        <hr>
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