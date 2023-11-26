<?php
 
// Crear conexión con la BD
require('../config/conexion.php');

// Sacar los datos del formulario. Cada input se identifica con su "name"
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$tipo = $_POST["tipo"];
$saldo = floatval($_POST["saldo"]);

// Query SQL a la BD. Si tienen que hacer comprobaciones, hacerlas acá (Generar una query diferente para casos especiales)
$query = "INSERT INTO `usuario` (`nombre`, `correo`, `telefono`, `saldo`, `tipo`) VALUES ('$nombre', '$correo', '$telefono', $saldo, '$tipo')";

// Ejecutar consulta
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

// Redirigir al usuario a la misma pagina
if($result):
    // Si fue exitosa, redirigirse de nuevo a la página de la entidad
	header("Location: usuario.php");
else:
	echo "Ha ocurrido un error al crear la persona";
endif;

mysqli_close($conn);