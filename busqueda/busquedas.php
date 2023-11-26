<?php
include "../includes/header.php";
?>

<!-- TÍTULO. Cambiarlo, pero dejar especificada la analogía -->
<h1 class="mt-3">Búsquedas</h1>

<div class="row">

                <div class="col-md-8 m-2 p-3" style="background-color: #fff; border: solid #e3e4e5 1px; border-radius: 8px;">
                    <?php
                        if (isset($_GET['action'])) {
                        $action = $_GET['action'];

                        if($action==1){
                            $codigo = $_GET['codigo'];
                            // Crear conexión con la BD
                            require('../config/conexion.php');

                            $query = "SELECT `inmueble`.`codigo`, `inmueble`.`fecha_construccion`
                            FROM `inmueble`
                            WHERE `inmueble`.`cod_dueno` = ?
                            AND `inmueble`.`cod_ocupante` IS NULL";

                            // Preparar la consulta
                            $stmt = $conn->prepare($query);

                            // Vincular el valor al marcador de posición
                            $stmt->bind_param('i', $codigo); // 'i' indica que el valor es un entero

                            // Ejecutar la consulta
                            $stmt->execute();

                            // Obtener los resultados
                            $datos = $stmt->get_result();

                            mysqli_close($conn);
                        }elseif($action==2){

                            $fecha1 = $_GET['fecha1'];
                            $fecha2 = $_GET['fecha2'];
                            $zona = $_GET['zona'];
                            // Crear conexión con la BD
                            require('../config/conexion.php');

                            // Consulta SQL con marcadores de posición
                            $query = "SELECT `inmueble`.*
                            FROM `inmueble`
                            WHERE `inmueble`.`fecha_construccion` >= ?
                            AND `inmueble`.`fecha_construccion` <= ?
                            AND LOWER(`inmueble`.`pais`) LIKE CONCAT('%', LOWER(?), '%')
                            AND `inmueble`.`cod_dueno` IS NOT NULL
                            AND `inmueble`.`cod_ocupante` IS NOT NULL";

                            // Preparar la consulta
                            $stmt = $conn->prepare($query);

                            // Vincular los valores a los marcadores de posición
                            $stmt->bind_param('sss', $fecha1, $fecha2, $zona); // 'sss' indica que son cadenas de texto

                            // Ejecutar la consulta
                            $stmt->execute();

                            // Obtener los resultados
                            $datos = $stmt->get_result();

                            mysqli_close($conn);
                        }
                    } else {
                        echo "No se ha proporcionado ninguna acción.";
                        }
                        ?>
                    <?php if(isset($_GET['action']) and $action==1): ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    Codigo
                                </th>
                                <th scope="col">
                                    Fecha de Construccion
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Iterar sobre los registros que llegaron
                            foreach ($datos as $fila):
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $fila["codigo"]; ?>
                                </th>
                                <td>
                                    <?= $fila["fecha_construccion"]; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                <?php endif; ?>

                <?php if(isset($_GET['action']) and $action==2): ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    ID
                                </th>
                                <th scope="col">
                                    Tipo
                                </th>
                                <th scope="col">
                                    Area
                                </th>
                                <th scope="col">
                                    Direccion
                                </th>
                                <th scope="col">
                                    Estado
                                </th>
                                <th scope="col">
                                    Estrato
                                </th>
                                <th scope="col">
                                    Precio
                                </th>
                                <th scope="col">
                                    #Habitaciones
                                </th>
                                <th scope="col">
                                    #Baños
                                </th>
                                <th scope="col">
                                    Fecha de Construccion
                                </th>
                                <th scope="col">
                                    Pais
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Iterar sobre los registros que llegaron
                            foreach ($datos as $fila):
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $fila["codigo"]; ?>
                                </th>
                                <td>
                                    <?= $fila["tipo"]; ?>
                                </td>
                                <td>
                                    <?= $fila["area"]; ?>
                                </td>
                                <td>
                                    <?= $fila["direccion"]; ?>
                                </td>
                                <td>
                                    <?= $fila["estado"]; ?>
                                </td>
                                <td>
                                    <?= $fila["estrato"]; ?>
                                </td>
                                <td>
                                    <?= $fila["precio"]; ?>
                                </td>
                                <td>
                                    <?= $fila["numero_habitaciones"]; ?>
                                </td>
                                <td>
                                    <?= $fila["numero_banos"]; ?>
                                </td>
                                <td>
                                    <?= $fila["fecha_construccion"]; ?>
                                </td>
                                <td>
                                    <?= $fila["pais"]; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                <?php endif; ?>
                </div>

                <div class="col-md-3 m-2 p-3" style="background-color: #fff; border: solid #e3e4e5 1px; border-radius: 8px;">

                    

                    <h4>Busqueda 1</h4>
                    <form action="busquedas.php" method="get">
                    <input type="hidden" value="1" id="action" name="action">

                    <label class="form-label">Codigo del Usuario</label>
                    <input type="text" id="codigo" name="codigo" class="form-control mb-2" placeholder="Ingrese la Cedula" required>
                    <button type="submit" class="btn btn-primary form-control mt-2">Buscar</button>
                    </form>
                    <hr>

                    <h4>Busqueda 2</h4>
                    <form action="busquedas.php" method="get">
                    <input type="hidden" value="2" id="action" name="action">

                    <label class="form-label">Fecha 1</label>
                    <input type="date" id="fecha1" name="fecha1" class="form-control mb-2"  required>

                    <label class="form-label">Fecha 2</label>
                    <input type="date" id="fecha2" name="fecha2" class="form-control mb-2" required>

                    <label class="form-label">Zona</label>
                    <input type="text" id="zona" name="zona" class="form-control mb-2" placeholder="Ingrese la Zona" required>

                    <button type="submit" class="btn btn-primary form-control mt-2">Buscar</button>
                    </form>
                </div>

            </div>

<?php

include "../includes/footer.php";
?>