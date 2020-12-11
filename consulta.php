<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'eBusca';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario, $contraseña, $basededatos);
if ($conexion->connect_errno) {
    die("Fallo la conexion.");
}


$tabla = "";
$query = "SELECT * FROM carrera ORDER BY idCarrera";

if (isset($_POST['carreras'])) {
    $q = $conexion->real_escape_string($_POST['carreras']);
    $query = "SELECT * FROM carrera WHERE 
		idCarrera LIKE '%" . $q . "%' OR
		nombre LIKE '%" . $q . "%' OR
		descripcion LIKE '%" . $q . "%' OR
		arancel LIKE '%" . $q . "%' OR
		duracion LIKE '%" . $q . "%'";
}

$buscarCarreras = $conexion->query($query);
if ($buscarCarreras->num_rows > 0) {
    $tabla .=
        '';

    while ($filaCarreras = $buscarCarreras->fetch_assoc()) {
        $id = $filaCarreras["idCarrera"];
        $tabla .=
            '
<div class="container-fluid" style="border: solid 5px #0275d8; border-radius:15px; margin-top:2%">

        <div class="form-group" style="font-size:150%; text-align: left; padding-top: 2%">
        <label for="" class="text-primary">' . $filaCarreras['nombre'] . '</label>
    </div>

    <div class="form-group">
        <hr>
        <label for="">
            <div class="text-primary" style="font-family: sans-serif; text-align: left;">Sobre la carrera: </div>
            <p style=""> ' . $filaCarreras['descripcion'] . ' </p>
        </label>
    </div>
    <div class="row">
        <div class="col">
            <label for=""><a class="text-primary" style="font-family: sans-serif;">Arancel:</a> ' . $filaCarreras['arancel'] . '</label>
        </div>
        <div class="col">
            <label for=""><a class="text-primary" style="font-family: sans-serif;">Semestres:</a> ' . $filaCarreras['duracion'] . '</label>
        </div>
        <div class="col">
            <label for=""><a class="text-primary" style="font-family: sans-serif;">Teléfono:</a> ' . $filaCarreras['telefono'] . '</label>
        </div>
    </div>
    <hr>
    <div class="form-group">
        <a href="' . "views/information/career.php?id=$id" . '") class="btn btn-lg btn-primary">Ver más info</a>
    </div>
</div>
			';
    }

    $tabla .= '</table>';
} else {
    $tabla = "'<h4><code>No se encontraron coincidencias con sus criterios de búsqueda. </code><pre></pre></h4>'";
}


echo $tabla;
