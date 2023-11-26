<?php
include "../includes/header.php";
?>

<h1 class="mt-3">Entidad análoga a CASILLERO (INMUEBLE)</h1>

<!-- FORMULARIO. Cambiar los campos de acuerdo a su trabajo -->

            <div class="row">
                
                <div class="col-lg-12 p-3" style="background-color: #fff; border: solid #e3e4e5 1px; border-radius: 8px;">

                    <h2>
                        Añadir Inmueble
                    </h2>

                    <hr>

                    <div class="row">
                        
                        <div class="form-group col-md-4">
                            <label class="form-label">Tipo</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value= "0"selected>Seleccione uno</option>
                                <option value="casa">casa</option>
                                <option value="apartamento">apartamento</option>
                                <option value="apartaestudio">apartaestudio</option>
                                <option value="oficina">oficina</option>
                                <option value="bodega">bodega</option>
                                <option value="lote">lote</option>
                                <option value="complejo industrial">complejo industrial</option>
                                <option value="almacén">almacén</option>
                                <option value="edificio">edificio</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Area</label>
                            <input type="number" name="" class="form-control mb-2" placeholder="Ingrese el Area" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Direccion</label>
                            <input type="text" name="" class="form-control mb-2" placeholder="Ingrese la Direccion" required>
                        </div>

                    </div>

                     <div class="row">
                        
                        <div class="form-group col-md-4">
                            <label class="form-label">Estado</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value= "0"selected>Seleccione uno</option>
                        <option value="disponible">disponible</option>
                        <option value="no disponible">no disponible</option>
                    </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Estrato</label>
                    <input type="number" name="" class="form-control mb-2" placeholder="Ingrese el Estrato" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Precio</label>
                    <input type="number" name="" class="form-control mb-2" placeholder="Ingrese el Precio" required>
                        </div>

                    </div>

                     <div class="row">
                        
                        <div class="form-group col-md-4">
                            <label class="form-label">Numero de Habitaciones</label>
                    <input type="number" name="" class="form-control mb-2" placeholder="Ingrese el Numero" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Numero de Baños</label>
                    <input type="number" name="" class="form-control mb-2" placeholder="Ingrese el Numero" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Código del Dueño</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value= "0"selected>Seleccione una</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                        </div>

                    </div>

                     <div class="row">
                        

                        <div class="form-group col-md-4">
                            <label class="form-label">Código del Ocupante*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value= "0"selected>Seleccione una</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for=""></label>
                            <button type="button" class="btn btn-primary form-control mt-2">Añadir</button>
                        </div>

                    </div>

                </div>

            </div>

<?php
// Crear conexión con la BD
require('../config/conexion.php');

// Query SQL a la BD -> Crearla acá (No está completada, cambiarla a su contexto y a su analogía)
$query = "SELECT * FROM `inmueble`;";

// Ejecutar la consulta
$resultadoC1 = mysqli_query($conn, $query) or die(mysqli_error($conn));

mysqli_close($conn);
?>

<?php
// Verificar si llegan datos
if($resultadoC1 and $resultadoC1->num_rows > 0):
?>

<!-- MOSTRAR LA TABLA. Cambiar las cabeceras -->
<div class="tabla mt-5 mx-3 rounded-3 overflow-hidden">

    <table class="table table-striped table-bordered">

        <!-- Títulos de la tabla, cambiarlos -->
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">Código</th>
                <th scope="col" class="text-center">Tipo</th>
                <th scope="col" class="text-center">'Área'</th>
                <th scope="col" class="text-center">Dirección</th>
                <th scope="col" class="text-center">Estado</th>
                <th scope="col" class="text-center">Estrato</th>
                <th scope="col" class="text-center">#Habitaciones</th>
                <th scope="col" class="text-center">#Baños</th>
                <th scope="col" class="text-center">'Precio'</th>
                <th scope="col" class="text-center">País</th>
                <th scope="col" class="text-center">Fecha de Construcción</th>
                <th scope="col" class="text-center">Código Dueño</th>
                <th scope="col" class="text-center">Código Ocupante</th>
            </tr>
        </thead>

        <tbody>

            <?php
            // Iterar sobre los registros que llegaron
            foreach ($resultadoC1 as $fila):
            ?>

            <!-- Fila que se generará -->
            <tr>
                <!-- Cada una de las columnas, con su valor correspondiente -->
                <td class="text-center"><?= $fila["codigo"]; ?></td>
                <td class="text-center"><?= $fila["tipo"]; ?></td>
                <td class="text-center"><?= $fila["area"]; ?></td>
                <td class="text-center"><?= $fila["direccion"]; ?></td>
                <td class="text-center"><?= $fila["estado"]; ?></td>
                <td class="text-center"><?= $fila["estrato"]; ?></td>
                <td class="text-center"><?= $fila["numero_habitaciones"]; ?></td>
                <td class="text-center"><?= $fila["numero_banos"]; ?></td>
                <td class="text-center"><?= $fila["precio"]; ?></td>
                <td class="text-center"><?= $fila["pais"]; ?></td>
                <td class="text-center"><?= $fila["fecha_construccion"]; ?></td>
                <td class="text-center"><?= $fila["cod_dueno"]; ?></td>
                <td class="text-center"><?= $fila["cod_ocupante"]; ?></td>
            </tr>

            <?php
            // Cerrar los estructuras de control
            endforeach;
            ?>

        </tbody>

    </table>
</div>
<!-- Mensaje de error si no hay resultados -->
<?php
else:
?>

<div class="alert alert-danger text-center mt-5">
    No se encontraron resultados para esta consulta
</div>
<?php
// Cerrar los estructuras de control
endif;
?>


<?php


include "../includes/footer.php";
?>