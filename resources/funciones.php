<?php
function metodo($usuario, $clave)
{
    include('conexion.php');
    $sql = mysqli_query($conn, "SELECT * FROM usuario WHERE correo='$usuario' AND password='$clave'");
    if (mysqli_num_rows($sql) > 0) {
        session_start();
        $_SESSION['miUsuario'] = $usuario;
        return true;
    } else {
        return false;
    }
}
function verificarUsuario()
{
    session_start();
    if ($_SESSION['miUsuario']) {
        return true;
    }
}
