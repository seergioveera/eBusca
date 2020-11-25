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
		$tabla .=
			'
            <div class="container panel panel-primary" style="border-radius: 10px; border:solid 2px #0FA1FD; margin-top:10px; padding:5px;">
            <div class="row" style="font-size: 25px">
                <div class="col-12">
                <span class="float-left" style=""><b style="color:#0FA1FD;">Carrera: </b>' . $filaCarreras['nombre'] . '</span>
                </div>
            </div>
            <div class="row" style="font-size: 20px">
                <div class="col-12" style="">
                <span class="float-left" style=""><b style="color:#0FA1FD;">Descripcion: </b>' . $filaCarreras['descripcion'] . '</span>
                </div>
            </div>
    
            <div class="row" style=" font-size: 18px;">
                <div class="col-8" style:"text-aling:left">
                <br>
                    <tr><b style="color:#0FA1FD;"> - Arancel: </b>' . $filaCarreras['arancel'] . '</tr>
                    <tr><b style="color:#0FA1FD;"> - Semestres:</b> ' . $filaCarreras['duracion'] . '</tr>
                    <tr><b style="color:#0FA1FD;"> - Télefono:</b> ' . $filaCarreras['telefono'] . '</tr>
                </div>
                <div class="col-4">
                    <button class="btn btn-lg btn-info" style="margin-top: 0;">Ver Mas</button>
                </div>
            </div>
        </div>
			';
	}

	$tabla .= '</table>';
} else {
    $tabla = "'<h4><code>No se encontraron coincidencias con sus criterios de búsqueda. </code><pre></pre></h4>'";
}


echo $tabla;
