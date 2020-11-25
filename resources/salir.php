<?php
include('funciones.php');
if (verificarUsuario()) {
    /*si el user es verificado, se elimina los valores, se destruye la sesion y volvemos al index*/
    session_start();
    session_unset(); //borra solo las variables de la sesion (la sesion tdv existe)
    session_destroy(); //destruye la sesion.
    echo '<script type="text/javascript">
    alert("Sesion cerrada.");
    window.location.href="../index.php";
    </script>';
}
