<?php

// Crear conexión con la BD
require('../config/conexion.php');

// Query SQL a la BD
$query = "SELECT * FROM inmueble";

// Ejecutar la consulta
$resultadoInmueble = mysqli_query($conn, $query) or die(mysqli_error($conn));

mysqli_close($conn);