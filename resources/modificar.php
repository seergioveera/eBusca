<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php
$c = $_GET["id"];
include 'conexion.php';
$sql = mysqli_query($conn, "Select * from cliente where id=$idCli");
if ($fila = mysqli_fetch_array($sql)) {
    $ci = $fila["ci"];
    $nom = $fila["nombre"];
    $ape = $fila["apellido"];
    $dir = $fila["direccion"];
    $tel = $fila["telefono"];
}
?>

<body>
    <form action="operacion.php" method="post">
        <table class="table2">
            <h1>MODIFICAR CLIENTE: </h1>
            <tr>
                <td>
                    <table width="60%" align="center">
                        <tr>
                            <td>Cédula</td>
                            <td><input type="text" name="txtCi" required value="<?php echo "$ci"; ?>"></td>
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td><input type="text" name="txtNombre" required value="<?php echo "$nom"; ?>"></td>
                        </tr>
                        <tr>
                            <td>Apellido</td>
                            <td><input type="text" name="txtApellido" required value="<?php echo "$ape"; ?>"></td>
                        </tr>
                        <tr>
                            <td>Direccion</td>
                            <td><input type="text" name="txtDireccion" required value="<?php echo "$dir"; ?>"></td>
                        </tr>
                        <tr>
                            <td>Telefono</td>
                            <td><input type="text" name="txtTelefono" required value="<?php echo "$tel"; ?>"></td>
                        </tr>
                        <input type="hidden" name="txtOpe" value='2'>
                        <input type="hidden" name="txtId" value="<?php echo $idCli; ?>">
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="boton" value="Guardar">
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
</body>

</html>