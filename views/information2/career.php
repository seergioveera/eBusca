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
    $idCarrera = $_GET["id"];
    include '../../resources/conexion.php';
    $sql = mysqli_query($conn, "SELECT c.nombre as carrera, i.nombre as institucion, c.arancel, c.duracion, c.descripcion, ci.nombre as ciudad, 
                                h.descripcion as horario, m.descripcion as modalidad, c.telefono, i.correo, i.direccion 
                                FROM carrera c JOIN institucion i JOIN horario h JOIN modalidad m JOIN ciudad ci
                                ON i.idInstitucion = c.idInstitucion AND h.idHorario = c.idHorario AND m.idModalidad = c.idModalidad 
                                AND ci.idCiudad = i.idCiudad WHERE c.idCarrera=$idCarrera");
    if ($fila = mysqli_fetch_assoc($sql)) {
        $nombre = $fila["carrera"];
        $institucion = $fila["institucion"];
        $arancel = $fila["arancel"];
        $duracion = $fila["duracion"];
        $descripcion = $fila["descripcion"];
        $ciudad = $fila["ciudad"];
        $horario = $fila["horario"];
        $telefono = $fila["telefono"];
        $correo = $fila["correo"];
        $direccion = $fila["direccion"];
    }
    ?>
    <nav class="navbar navbar-expand-lg fixed-top lead">
        <div class="container">
            <a class="navbar-brand  lead" href="../user2/index.php">
            <img src="../../img/logo.png" alt="logo-eBusca">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="grid-outline" style="font-size: 32px;"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="../user2/index.php">INICIO</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="listCareer.php">carreras</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  text-lowercase lead " href="listInstitution.php">universidades</a>
                    </li>
                    <li class="nav-item text-lowercase  active content-center">
                        <a class="nav-link lead " href="../user2/edit.php">Editar datos</a>
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

    <!-- style="border-radius:5px; border: red solid 1px; -->
    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <a href="../user2/index.php">
                <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
            </a>
            <h1>Datos de la carrera: </h1>
            <div class="col-xs-12 col-md-9 col-lg-8" style="border-radius:10px; border:solid #0275d8; margin: 10%" ;>

                <div class="container-fluid">
                    <form action="../../resources/operacion.php" method="post">

                        <div class="form-group bg-primary text-white" style="text-align: center; font-size:150%; border-radius:5px">
                            <hr>
                            <label for=""><?php echo "$nombre"; ?></label>
                        </div>

                        <div class="form-group" style="text-align: center; font-size:110%">
                            <hr>
                            <label for=""><?php echo "$institucion"; ?></label>
                        </div>

                        <div class="form-group">
                            <hr>
                            <label for="">
                                <div class="text-primary" style="font-family: sans-serif;">Sobre la carrera: </div>
                                <p> <?php echo "$descripcion"; ?> </p>
                            </label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for=""><a class="text-primary" style="font-family: sans-serif;">Arancel:</a> <?php echo "$arancel"; ?></label>
                            </div>
                            <div class="col">
                                <label for=""><a class="text-primary" style="font-family: sans-serif;">Semestres: </a> <?php echo "$duracion"; ?></label>
                            </div>
                            <div class="col">
                                <label for=""><a class="text-primary" style="font-family: sans-serif;">Horario: </a> <?php echo "$horario"; ?></label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for=""><a class="text-primary" style="font-family: sans-serif;">Ciudad: </a> <?php echo "$ciudad"; ?></label>
                            </div>
                            <div class="col">
                                <label for=""><a class="text-primary" style="font-family: sans-serif;">Dirección: </a> <?php echo "$direccion"; ?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for=""><a class="text-primary" style="font-family: sans-serif;">Télefono: </a> <?php echo "$telefono"; ?></label>
                            </div>
                            <div class="col">
                                <label for=""><a class="text-primary" style="font-family: sans-serif;">Correo: </a> <?php echo "$correo"; ?></label>
                            </div>
                        </div>
                        <div class="form-group" style="text-align: center; font-size:110%">
                            <hr>
                            <a href="listCareer.php" class="btn btn-primary btn-lg" style="color:white">Ver otras carreras.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="../../js/jquery-3.5.1.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
</body>

</html>