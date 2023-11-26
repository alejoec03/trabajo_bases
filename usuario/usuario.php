<?php
include "../includes/header.php";
?>


<h1 class="mt-3">Entidad análoga a CLIENTE (USUARIO)</h1>
<?php
// Crear conexión con la BD
require('../config/conexion.php');

// Query SQL a la BD -> Crearla acá (No está completada, cambiarla a su contexto y a su analogía)
$query = "SELECT * FROM `usuario`;";

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
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Correo</th>
                <th scope="col" class="text-center">Telefono</th>
                <th scope="col" class="text-center">Tipo</th>
                <th scope="col" class="text-center">Saldo</th>
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
                <td class="text-center"><?= $fila["nombre"]; ?></td>
                <td class="text-center"><?= $fila["correo"]; ?></td>
                <td class="text-center"><?= $fila["telefono"]; ?></td>
                <td class="text-center"><?= $fila["saldo"]; ?></td>
                <td class="text-center"><?= $fila["tipo"]; ?></td>
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

    <div class="col-md-4 m-2 p-3" style="background-color: #fff; border: solid #e3e4e5 1px; border-radius: 8px;">
        <form action="usuario_insert.php" method="post">
        <h2>
            Añadir Usuario
        </h2>

        <hr>

        <label class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control mb-2" placeholder="Ingrese el Nombre" required>

        <label class="form-label">Correo</label>
        <input type="text" id="correo" name="correo" class="form-control mb-2" placeholder="Ingrese el Correo" required>

        <label class="form-label">Telefono</label>
        <input type="text" id="telefono" name="telefono" class="form-control mb-2" placeholder="Ingrese el Telefono" required>

        <label class="form-label">Tipo</label>
        <select class="form-select" aria-label="Default select example" id="tipo" name="tipo">
            <option value= "0"selected>Seleccione uno</option>
            <option value="Persona natural">Persona natural</option>
            <option value="Persona juridica">Persona juridica</option>
        </select>

        <label class="form-label">Saldo</label>
        <input type="number" id="saldo" name="saldo" class="form-control mb-2" placeholder="Ingrese el Saldo" required>

        <button type="submit" class="btn btn-primary form-control mt-2">Añadir</button>
        
        </form>

    </div>

</div>



<?php
include "../includes/footer.php";
?>