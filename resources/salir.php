<?php
include('funciones.php');
if(verificarUsuario()) {
    /*si el user es verificado, se elimina los valores, 
    se destruye la sesion y volvemos al formulario de ingreso*/
    session_start();
    session_unset(); //borra solo las variables de la sesion (la sesion tdv existe)
    //solo los datos se truncan.

    session_destroy(); //destruye la sesion.
    header('Location:../index.html');
}
