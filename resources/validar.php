<?php
$usuario = $_POST['txtUsuario'];
$clave = $_POST['txtClave'];
include('funciones.php'); //archivo donde se compara datos
if(metodo($usuario, $clave)) {
    //si es valido accede a user/index.php
    header('Location:../views/user/index.php');
} else {
    header('Location:../views/home/login.php?error=1');
}
