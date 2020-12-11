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
    <title>Lista de Carreras</title>
</head>

<body>



    <div class="container" style="margin-top: 120px;">
        <div class="main row">
            <a href="../user/index.php">
                <ion-icon name="arrow-back-circle-outline" style="font-size: 50px; margin-left: 10px;"></ion-icon>
            </a>
            <div class="form-login col-xs-12 col-md-9 col-lg-8">
                <h1>Lista de Carreras: </h1>
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


    <?php
    include('../../resources/funciones.php');
    //si la funcion verificarUsuario retorno true, la sesión esta iniciada
    if (verificarUsuario()) {
        $user = $_SESSION['miUsuario'];
        // echo "UserName: $user";
    }

    include '../../resources/conexion.php';

    $sql = mysqli_query($conn, "SELECT idUsuario FROM usuario WHERE correo='$user'");
    if ($fila = mysqli_fetch_array($sql)) {
        $idUser = $fila["idUsuario"];
        // echo "UserID: $idUser";
    }
    
    ?>

    <div class="container col-xs-12 col-md-9 col-lg-8">
        <?php
        include "../../resources/conexion.php";

        $query = mysqli_query($conn, "SELECT * FROM carrera WHERE idUsuario = $idUser");
        if (mysqli_num_rows($query) < 1) {
        ?>

        <?php
        }
        if (mysqli_num_rows($query) > 0) {
            echo "<table class='table'><tr>";
            echo "<thead class='bg-primary'>";

            echo "<th style='color:white'>Nombre</th>";
            echo "<th style='color:white'>Descripción</th>";
            echo "<th style='color:white'>Arancel</th>";
            echo "<th style='color:white'>Duración</th>";
            echo "<th style='color:white'>Telefono</th>";
            echo "<th style='color:white'>Modificar</th>";
            echo "</thead>";
        } else {
            echo '<h4><code>Usted no ha agregado ninguna Carrera. <a href="create.php">¿Desea hacerlo?</a></code><pre></pre></h4>';
        }
        while ($fila = mysqli_fetch_array($query)) {
            $nom = $fila["nombre"];
            $desc = $fila["descripcion"];
            $aran = $fila["arancel"];
            $dura = $fila["duracion"];
            $tel = $fila["telefono"];
            $id = $fila["idCarrera"];

            echo "<tr>";
            echo "<td>$nom</td>";
            echo "<td>$desc</td>";
            echo "<td>$aran</td>";
            echo "<td>$dura</td>";
            echo "<td>$tel</td>";
            echo "<td><a href='edit.php?id=$id')>Modificar</a></td>";
        }
        ?>
    </div>
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>