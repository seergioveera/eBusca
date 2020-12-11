<?php
include('funciones.php');
if (verificarUsuario()) {
    /*si el user es verificado, se elimina los valores, se destruye la sesión y volvemos al index*/
    session_start();
    session_unset(); //borra solo las variables de la sesión (la sesión tdv existe)
    session_destroy(); //destruye la sesión.
    echo '<script type="text/javascript">
    alert("sesión cerrada.");
    window.location.href="../index.php";
    </script>';
}
