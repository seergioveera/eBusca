<?php
$usuario = $_POST['txtUsuario'];
$clave = $_POST['txtClave'];
include('funciones.php'); //archivo donde se compara datos

if(metodo($usuario, $clave)) {
    //si es valido accede a user/index.php
    if(($usuario)=='admin') {
        echo '<script type="text/javascript">
        alert("Bienvenido ADMIN.");
        window.location.href="../views/admin/index.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Bienvenido USER.");
        window.location.href="../views/user/index.php";
        </script>';
    }

   
} else {
    header('Location:../views/home/login.php?error=1');
}

