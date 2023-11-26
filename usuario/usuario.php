<?php
include "../includes/header.php";
?>


<h1 class="mt-3">Entidad análoga a CLIENTE (USUARIO)</h1>



<div class="row">

                <div class="col-md-7 tabla mt-2 rounded-3 overflow-hidden">

                    <?php
                    // Importar el código del otro archivo
                    require("usuario_select.php");

                    // Verificar si llegan datos
                    if($resultadoUsuario and $resultadoUsuario->num_rows > 0):
                    ?>

                    <table class="table table-striped table-bordered bg-white">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">
                                    ID
                                </th>
                                <th scope="col">
                                    Nombre
                                </th>
                                <th scope="col">
                                    Correo
                                </th>
                                <th scope="col">
                                    Telefono
                                </th>
                                <th scope="col">
                                    Tipo
                                </th>
                                <th scope="col">
                                    Saldo ($)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Iterar sobre los registros que llegaron
                            foreach ($resultadoUsuario as $fila):
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $fila["codigo"]; ?>
                                </th>
                                <td>
                                    <?= $fila["nombre"]; ?>
                                </td>
                                <td>
                                    <?= $fila["correo"]; ?>
                                </td>
                                <td>
                                    <?= $fila["telefono"]; ?>
                                </td>
                                <td>
                                    <?= $fila["tipo"]; ?>
                                </td>
                                <td>
                                    <?= $fila["saldo"]; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
                </div>

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

                    <button type="submit" class="btn btn-dark form-control mt-2">Añadir</button>
                    
                    </form>

                </div>

            </div>



<?php


include "../includes/footer.php";
?>

