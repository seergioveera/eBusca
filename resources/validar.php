<?php
$usuario = $_POST['txtUsuario'];
$clave = $_POST['txtClave'];

include('conexion.php');
include('funciones.php'); //archivo donde se compara datos
$sql = mysqli_query($conn, "SELECT * FROM usuario WHERE correo='$usuario' AND password='$clave'");

if ($fila = mysqli_fetch_array($sql)) {
    $idTipoUser = $fila["idTipoUsuario"];
}

echo $idTipoUser;

if(metodo($usuario, $clave, $idTipoUser)) {
    //si es valido accede a user/index.php
    if(($idTipoUser)=='1') {
        echo '<script type="text/javascript">
        alert("Bienvenido ADMIN.");
        window.location.href="../views/admin/index.php";
        </script>';
    } else if(($idTipoUser)=='2') {
        echo '<script type="text/javascript">
        alert("Bienvenido.");
        window.location.href="../views/user/index.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Bienvenido.");
        window.location.href="../views/user2/index.php";
        </script>';
    }

   
} else {
    header('Location:../views/home/login.php?error=1');
}

