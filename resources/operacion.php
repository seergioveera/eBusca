<!-- /*OPERACIONES PARA EL USUARIO*/ -->
<?php
if ($_REQUEST['boton']) {
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $correo = $_REQUEST['correo'];
    $fechaNacimiento = $_REQUEST['fechaNacimiento'];
    $ciudad = $_REQUEST['ciudad'];
    $pass = $_REQUEST['pass'];
    $tipoUser = $_REQUEST['tipoUser'];

    $op = $_REQUEST['txtOpe'];
    include 'conexion.php';
    switch ($op) {
        case '1':
            $sql = mysqli_query($conn, "INSERT INTO usuario(nombre,apellido,fechaNacimiento,correo,password,idCiudad,idTipoUsuario)"
                . "values('$nombre','$apellido','$fechaNacimiento','$correo','$pass','$ciudad','$tipoUser')");
            echo '<script type="text/javascript">
                alert("Usuario registrado correctamente.");
                window.location.href="../views/home/login.php";
                </script>';
            break;
        case '2':
            $id = $_REQUEST['id'];
            $sql = mysqli_query($conn, "UPDATE usuario SET nombre='$nombre',apellido='$apellido',"
                . "correo='$correo',fechaNacimiento='$fechaNacimiento',password='$pass', idCiudad='$ciudad' where idUsuario='$id'");
            echo $sql;
            echo '<script type="text/javascript">
                alert("Datos modificados correctamente.");
                window.location.href="../views/user/index.php";
                </script>';
            break;
    }
?>
    <script type="text/javascript">
        function cerrar() {
            alert("Operación Exitosa.");
            self.close();
        }
        var cierre = setTimeout('cerrar()', 10);
    </script>
<?php
}
?>

<!-- /*OPERACIONES PARA CARRERA*/ -->
<?php
if ($_REQUEST['boton1']) {
    $nombre = $_REQUEST['nombre'];
    $institucion = $_REQUEST['institucion'];
    $descripcion = $_REQUEST['descripcion'];
    $arancel = $_REQUEST['arancel'];
    $duracion = $_REQUEST['duracion'];
    $horario = $_REQUEST['horario'];
    $modalidad = $_REQUEST['modalidad'];
    $categoria = $_REQUEST['categoria'];
    $telefono = $_REQUEST['telefono'];

    $idUser = $_REQUEST['idUser'];
    $op = $_REQUEST['txtOpe'];
    include 'conexion.php';
    switch ($op) {
        case '1':
            $sql = mysqli_query($conn, "INSERT INTO carrera (nombre,idInstitucion,descripcion,arancel,duracion,idHorario, idModalidad,idCategoria, telefono, idUsuario)"
                . "VALUES('$nombre','$institucion','$descripcion','$arancel','$duracion','$horario','$modalidad','$categoria','$telefono','$idUser')");
            echo '<script type="text/javascript">
                alert("Carrera registrada correctamente.");
                window.location.href="../views/user/index.php";
                </script>';
            // header('Location:../views/home/login.php');
            break;
        case '2':
            $idCarrera = $_REQUEST['id'];
            $sql = mysqli_query($conn, "UPDATE carrera SET nombre='$nombre',descripcion='$descripcion',arancel='$arancel',idInstitucion='$institucion',"
                . "duracion='$duracion',telefono='$telefono',idHorario='$horario', idModalidad='$modalidad',idCategoria='$categoria' where idCarrera='$idCarrera'");
            echo $sql;
            echo '<script type="text/javascript">
                alert("Carrera modificada correctamente.");
                window.location.href="../views/user/index.php";
                </script>';
            break;
    }
    mysqli_close($conn);
?>
    <script type="text/javascript">
        function cerrar() {
            alert("Operación Exitosa.");
            self.close();
        }
        var cierre = setTimeout('cerrar()', 10);
    </script>
<?php
}
?>


<!-- /*OPERACIONES PARA INSTITUCION*/ -->
<?php
if ($_REQUEST['boton2']) {
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $direccion = $_REQUEST['direccion'];
    // $rutaServer = "logos";
    // $logoName = $_FILES['imagen']['name']; //contiene el nombre de la img
    // $archivo = $_FILES['imagen']['tmp_name']; //contiene el archivo

    //(date_default_timezone_set('UTC');
    //$logoName = date('Y-m-d-h:i:s') . "-" . $logoName) NO FUNCIONA;

    // $ruta = $rutaServer . "/" . $logoName; //images/nombre.jpg
    // move_uploaded_file($archivo, $ruta); //mover el arch. al folder
    $correo = $_REQUEST['correo'];
    $telefono = $_REQUEST['telefono'];
    $ciudad = $_REQUEST['ciudad'];
    $id = $_REQUEST['id'];
    $op = $_REQUEST['txtOpe'];
    include 'conexion.php';
    switch ($op) {
        case '1':
            $sql = mysqli_query($conn, "INSERT INTO institucion (nombre,descripcion, direccion,correo,telefono,idCiudad,idUsuario)"
                . "VALUES('$nombre','$descripcion','$direccion','$correo','$telefono','$ciudad','$id')");
            echo '<script type="text/javascript">
                alert("Institucion registrada correctamente.");
                window.location.href="../views/user/index.php";
                </script>';
            break;
        case '2':
            $id = $_REQUEST['id'];
            $sql = mysqli_query($conn, "UPDATE institucion SET nombre='$nombre',descripcion='$descripcion',direccion='$direccion',"
                . "telefono='$telefono',correo='$correo', idCiudad='$ciudad' WHERE idInstitucion='$id'");
            echo $sql;
            echo '<script type="text/javascript">
                alert("Institucion modificada correctamente.");
                window.location.href="../views/user/index.php";
                </script>';
            break;
    }
    mysqli_close($conn);
?>
    <script type="text/javascript">
        function cerrar() {
            location.href = "index.php";
            alert("Operación Exitosa.");
            self.close();
        }
        var cierre = setTimeout('cerrar()', 10);
    </script>
<?php
}
?>


<!-- /*OPERACIONES PARA EL USUARIO 2*/-->
<?php
if ($_REQUEST['boton3']) {
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $correo = $_REQUEST['correo'];
    $fechaNacimiento = $_REQUEST['fechaNacimiento'];
    $ciudad = $_REQUEST['ciudad'];
    $pass = $_REQUEST['pass'];
    $tipoUser = $_REQUEST['tipoUser'];

    $descripcion = $_REQUEST['descripcion'];
    $op = $_REQUEST['txtOpe'];
    include 'conexion.php';
    switch ($op) {
        case '1':
            $sql = mysqli_query($conn, "INSERT INTO usuario(nombre,apellido,fechaNacimiento,correo,password,idCiudad,idTipoUsuario)"
                . "values('$nombre','$apellido','$fechaNacimiento','$correo','$pass','$ciudad','$tipoUser')");
            echo '<script type="text/javascript">
                alert("Usuario registrado correctamente.");
                window.location.href="../views/home/login.php";
                </script>';
            break;
        case '2':
            $id = $_REQUEST['id'];
            $sql = mysqli_query($conn, "UPDATE usuario SET nombre='$nombre',apellido='$apellido',"
                . "correo='$correo',fechaNacimiento='$fechaNacimiento',password='$pass', idCiudad='$ciudad' where idUsuario='$id'");
            echo $sql;
            echo '<script type="text/javascript">
                alert("Datos modificados correctamente.");
                window.location.href="../views/user2/index.php";
                </script>';
            break;
            case '3':
                $sql = mysqli_query($conn, "INSERT INTO sugerencias(descripcion)"
                . "values('$descripcion')");
                echo $sql;
                echo '<script type="text/javascript">
                    alert("Sugerencia enviada.");
                    window.location.href="../views/user2/index.php";
                    </script>';
                break;
    }
?>
    <script type="text/javascript">
        function cerrar() {
            alert("Operación Exitosa.");
            self.close();
        }
        var cierre = setTimeout('cerrar()', 10);
    </script>
<?php
}
?>