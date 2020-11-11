<?php 
include "conexion.php";
$ci = $_POST['txtCi'];
$query = mysqli_query($conn, "select * from cliente where ci='$ci'");
?>