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
    <title>Lista de Universidades</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top lead">
        <div class="container">
            <a class="navbar-brand  lead" href="../user2/index.php">
                <ion-icon name="library-outline"></ion-icon> eBusca
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
    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <a href="../user2/index.php">
                <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
            </a>
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Lista de Instituciones: </h1>
                <hr>
                <br>

            </div>
        </div>
    </div>
    <footer class="page-footer font-small blue" style="position: fixed; bottom: 0; width: 150%;">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
    </footer>



    <div class="container col-xs-12 col-md-9 col-lg-8">
        <?php
        include "../../resources/conexion.php";

        $query = mysqli_query($conn, "SELECT * FROM institucion");
        if (mysqli_num_rows($query) < 1) {
        ?>

        <?php
        }
        if (mysqli_num_rows($query) > 0) {
            echo "<table class='table'><tr>";
            echo "<thead class='bg-primary'>";

            echo "<th style='color:white'>Universidad</th>";
            echo "<th style='color:white'>Descripción</th>";
            echo "<th style='color:white'>Direccion</th>";
            echo "<th style='color:white'>Correo</th>";
            echo "<th style='color:white'>Telefono</th>";
            echo "</thead>";
        }
        while ($fila = mysqli_fetch_array($query)) {
            $nombre = $fila["nombre"];
            $descripcion = $fila["descripcion"];
            $direccion = $fila["direccion"];
            $telefono = $fila["telefono"];
            $correo = $fila["correo"];

            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$descripcion</td>";
            echo "<td>$direccion</td>";
            echo "<td>$correo</td>";
            echo "<td>$telefono</td>";
        }
        ?>
    </div>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>