<?php
 
// Crear conexión con la BD
require('../config/conexion.php');


// Recuperar datos del formulario
$tipo = $_POST['tipo'];
$area = $_POST['area'];
$direccion = $_POST['direccion'];
$estado = $_POST['estado'];
$estrato = $_POST['estrato'];
$precio = $_POST['precio'];
$numero_habitaciones = $_POST['numero_habitaciones'];
$numero_banos = $_POST['numero_banos'];
$pais = $_POST['pais'];
$fecha_construccion = $_POST['fecha_construccion'];
$cod_dueno = $_POST['cod_dueno'];
$cod_ocupante = $_POST['cod_ocupante'];

// Insertar datos en la base de datos
if($cod_dueno==0 and $cod_ocupante==0){
	$sql = "INSERT INTO inmueble (tipo, area, direccion, estado, estrato, numero_habitaciones, numero_banos, precio, pais, fecha_construccion)VALUES ('$tipo', '$area', '$direccion', '$estado', $estrato, $numero_habitaciones, $numero_banos, $precio, '$pais', '$fecha_construccion')";
}elseif ($cod_dueno==0) {
	$sql = "INSERT INTO inmueble (tipo, area, direccion, estado, estrato, cod_ocupante, numero_habitaciones, numero_banos, precio, pais, fecha_construccion)VALUES ('$tipo', '$area', '$direccion', '$estado', $estrato, $cod_ocupante, $numero_habitaciones, $numero_banos, $precio, '$pais', '$fecha_construccion')";
}elseif ($cod_ocupante==0) {
	$sql = "INSERT INTO inmueble (tipo, area, direccion, estado, estrato, cod_dueno, numero_habitaciones, numero_banos, precio, pais, fecha_construccion)VALUES ('$tipo', '$area', '$direccion', '$estado', $estrato, $cod_dueno, $numero_habitaciones, $numero_banos, $precio, '$pais', '$fecha_construccion')";
}else{
	$sql = "INSERT INTO inmueble (tipo, area, direccion, estado, estrato, cod_dueno, cod_ocupante, numero_habitaciones, numero_banos, precio, pais, fecha_construccion)VALUES ('$tipo', '$area', '$direccion', '$estado', $estrato, $cod_dueno, $cod_ocupante, $numero_habitaciones, $numero_banos, $precio, '$pais', '$fecha_construccion')";
}


// Verificar si el inmueble no es usado por su mismo dueño
if ($cod_dueno == $cod_ocupante) {
    echo '<script language="javascript">alert("Error: Un inmueble no puede ser usado por su mismo dueño.");window.location.href="inmueble.php"</script>';
} else {
    // Ejecutar la consulta
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result):
    // Si fue exitosa, redirigirse de nuevo a la página de la entidad
		header("Location: inmueble.php");
	else:
		echo "Ha ocurrido un error al crear el inmueble";
	endif;
}


mysqli_close($conn);
