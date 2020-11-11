<?php
//datos de la base de datos
$server = "localhost";
$database = "ebusca";
$username = "root";
$password = "";

//crear la conexion mysqli
$conn = mysqli_connect($server, $username, $password, $database);

//si no existe la conexion
if (!$conn) {
?>
    <script>
        console.log("###...Error en la conexion!");
    </script>
<?php
} else {
?>
    <script>
        console.log("Conexion Exitosa!");
    </script>
<?php
}
?>