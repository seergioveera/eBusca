<!-- /*OPERACIONES PARA EL USUARIO */ -->
<?php
if ($_REQUEST['boton']) {
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $correo = $_REQUEST['correo'];
    $fechaNacimiento = $_REQUEST['fechaNacimiento'];
    $ciudad = $_REQUEST['ciudad'];
    $pass = $_REQUEST['pass'];

    $op = $_REQUEST['txtOpe'];
    include 'conexion.php';
    switch ($op) {
        case '1':
            $sql = mysqli_query($conn, "insert into usuario(nombre,apellido,fechaNacimiento,correo,password,idCiudad)"
                . "values('$nombre','$apellido','$fechaNacimiento','$correo','$pass','$ciudad')");
            break;
        case '2':
            $id = $_REQUEST['id'];
            // echo "update usuario set nombre='$nombre',apellido='$apellido',"
            // . "correo='$correo',fechaNacimiento='$fechaNacimiento',password='$pass', idCiudad='$ciudad' where idUsuario='$id'";
            $sql = mysqli_query($conn, "update usuario set nombre='$nombre',apellido='$apellido',"
                . "correo='$correo',fechaNacimiento='$fechaNacimiento',password='$pass', idCiudad='$ciudad' where idUsuario='$id'");
            echo $sql;
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

    $op = $_REQUEST['txtOpe'];
    include 'conexion.php';
    switch ($op) {
        case '1':
            $sql = mysqli_query($conn, "INSERT INTO carrera (nombre,idInstitucion,descripcion,arancel,duracion,idHorario, idModalidad,idCategoria, telefono)"
                . "VALUES('$nombre','$institucion','$descripcion','$arancel','$duracion','$horario','$modalidad','$categoria','$telefono')");
            break;
        case '2':
            $id = $_REQUEST['id'];
            echo "update carrera set nombre='$nombre',descripcion='$descripcion',arancel='$arancel',idInstitucion='$institucion'"
            . "duracion='$duracion',telefono='$telefono',idHorario='$horario', idModalidad='$modalidad',idCategoria='$categoria' where idCarrera='$id'";

            $sql = mysqli_query($conn, "update carrera set nombre='$nombre',descripcion='$descripcion',arancel='$arancel',idInstitucion='$institucion',"
                . "duracion='$duracion',telefono='$telefono',idHorario='$horario', idModalidad='$modalidad',idCategoria='$categoria' where idCarrera='$id'");
            echo $sql;
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
    $rutaServer = "logos";
    $logoName = $_FILES['imagen']['name']; //contiene el nombre de la img
    $archivo = $_FILES['imagen']['tmp_name']; //contiene el archivo
    //date_default_timezone_set('UTC');
    //$logoName = date('Y-m-d-h:i:s') . "-" . $logoName;
    $ruta = $rutaServer . "/" . $logoName; //images/nombre.jpg
    move_uploaded_file($archivo, $ruta); //mover el arch. al folder

    $correo = $_REQUEST['correo'];
    $telefono = $_REQUEST['telefono'];
    $ciudad = $_REQUEST['ciudad'];

    $op = $_REQUEST['txtOpe'];
    include 'conexion.php';
    switch ($op) {
        case '1':
            $sql = mysqli_query($conn, "INSERT INTO institucion (nombre,descripcion, direccion,correo,logo,telefono,idCiudad)"
                . "VALUES('$nombre','$descripcion','$direccion','$correo','$ruta','$telefono','$ciudad')");
            break;
        case '2':
            $id = $_REQUEST['id'];
            echo "UPDATE institucion SET nombre='$nombre',descripcion='$descripcion',direccion='$direccion',"
            . "telefono='$telefono',correo='$correo', logo='$ruta', idCiudad='$ciudad' where idInstitucion='$id'";
            $sql = mysqli_query($conn, "UPDATE institucion SET nombre='$nombre',descripcion='$descripcion',direccion='$direccion',"
                . "telefono='$telefono',correo='$correo', logo='$ruta', idCiudad='$ciudad' WHERE id='$id'");
            echo $sql;
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