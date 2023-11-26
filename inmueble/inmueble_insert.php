<?php
 
// Crear conexión con la BD
require('../config/conexion.php');

// Sacar los datos del formulario. Cada input se identifica con su "name"
$tipo = $_POST["tipo"];
$area = $_POST["area"];
$direccion = $_POST["direccion"];
$estado = $_POST["estado"];
$estrato = $_POST["estrato"];
$habitaciones = $_POST["habitaciones"];
$banos = $_POST["banos"];
$precio = floatval($_POST["precio"]);
$pais = $_POST["pais"];
$fecha = $_POST["fecha"];
$dueno = $_POST["dueno"];
$ocupante = $_POST["ocupante"];


// Query SQL a la BD. Si tienen que hacer comprobaciones, hacerlas acá (Generar una query diferente para casos especiales)
$query = "INSERT INTO `inmueble` (`tipo`, `area`, `direccion`, `estado`, `estrato`, `numero_habitaciones`, `numero_banos`, `precio`, `pais`, `fecha_construccion`, `cod_dueno`, `cod_ocupante`) 
VALUES ('$tipo', '$area', '$direccion', '$estado', '$estrato', '$habitaciones', '$banos', '$precio', '$pais', '$fecha', '$dueno', '$ocupante')";

// Ejecutar consulta
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

// Redirigir al usuario a la misma pagina
if($result):
    // Si fue exitosa, redirigirse de nuevo a la página de la entidad
	header("Location: inmueble.php");
else:
	echo "Ha ocurrido un error al crear la persona";
endif;

mysqli_close($conn);