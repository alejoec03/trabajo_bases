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
                    <form action="inmueble_insert.php" method="post">
                    <div class="row">
                        

                        <div class="form-group col-md-4">
                            <label class="form-label" >Tipo</label>
                            <select class="form-select" aria-label="Default select example" id="tipo" name="tipo">
                                <option value="Casa">Casa</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Oficina">Oficina</option>
                                <option value="Apartaestudio">Apartaestudio</option>
                                <option value="Bodega">Bodega</option>
                                <option value="Lote">Lote</option>
                                <option value="Complejo">Complejo Industrial</option>
                                <option value="Almacen">Almacen</option>
                                <option value="Edificio">Edificio</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Area</label>
                            <input type="number" id="area" name="area" class="form-control mb-2" placeholder="Ingrese el Area" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Direccion</label>
                            <input type="text" id="direccion" name="direccion" class="form-control mb-2" placeholder="Ingrese la Direccion" required>
                        </div>

                        
                    </div>

                     <div class="row">
                        
                        <div class="form-group col-md-4">
                            <label class="form-label">Estado</label>
                    <select class="form-select" aria-label="Default select example" id="estado" name="estado">
                        <option value="Disponible">Disponible</option>
                        <option value="No Disponible">No Disponible</option>
                    </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Estrato</label>
                    <input type="number" id="estrato" name="estrato" class="form-control mb-2" placeholder="Ingrese el Estrato">
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Precio</label>
                    <input type="number" id="precio" name="precio" class="form-control mb-2" placeholder="Ingrese el Precio" required>
                        </div>

                    </div>

                     <div class="row">
                        
                        <div class="form-group col-md-4">
                            <label class="form-label">Numero de Habitaciones</label>
                    <input type="number" id="numero_habitaciones" name="numero_habitaciones" class="form-control mb-2" placeholder="Ingrese el Numero">
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Numero de Baños</label>
                    <input type="number" id="numero_banos" name="numero_banos" class="form-control mb-2" placeholder="Ingrese el Numero">
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Codigo del Dueño</label>
                    <select class="form-select" aria-label="Default select example" id="cod_dueno" name="cod_dueno">
                        <option value= "0"selected>Ninguno</option>
                        <?php
                        // Importar el código del otro archivo
                        require("usuario_select.php");

                        // Verificar si llegan datos
                        if($resultadoUsuario and $resultadoUsuario->num_rows > 0):
                        ?>
                        <?php
                            // Iterar sobre los registros que llegaron
                            foreach ($resultadoUsuario as $fila):
                        ?>
                        <option value="<?= $fila["codigo"]; ?>"><?= $fila["codigo"]; ?> - <?= $fila["nombre"]; ?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                        </div>

                    </div>

                     <div class="row">
                        

                        <div class="form-group col-md-4">
                            <label class="form-label">Codigo del Ocupante*</label>
                    <select class="form-select" aria-label="Default select example" id="cod_ocupante" name="cod_ocupante">
                        <option value= "0"selected>Ninguno</option>
                        <?php
                        // Verificar si llegan datos
                        if($resultadoUsuario and $resultadoUsuario->num_rows > 0):
                        ?>
                        <?php
                            // Iterar sobre los registros que llegaron
                            foreach ($resultadoUsuario as $fila):
                        ?>
                        <option value="<?= $fila["codigo"]; ?>"><?= $fila["codigo"]; ?> - <?= $fila["nombre"]; ?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                        </div>

                        

                        <div class="form-group col-md-4">
                            <label class="form-label">Pais</label>
                            <input type="text" id="pais" name="pais" class="form-control mb-2" placeholder="Ingrese el Pais" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Fecha de Construccion</label>
                            <input type="date" id="fecha_construccion" name="fecha_construccion" class="form-control mb-2" required>
                        </div>

                    </div>

                    <div class="row">
                        
                        <div class="form-group col-md-4">
                            <label for=""></label>
                            <button type="submit" class="btn btn-primary form-control mt-2">Añadir</button>
                        </div>

                    </div>

                    </form>
                    

                    

      

                    

                    

                    
                
                </div>

            </div>

            <div class="row">

                <div class="col-lg-12 m-2 p-3" style="background-color: #fff; border: solid #e3e4e5 1px; border-radius: 8px;">
                    <?php
                    // Importar el código del otro archivo
                    require("inmueble_select.php");

                    // Verificar si llegan datos
                    if($resultadoInmueble and $resultadoInmueble->num_rows > 0):
                    ?>


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
                                    N. Habitaciones
                                </th>
                                <th scope="col">
                                    N. Baños
                                </th>
                                <th scope="col">
                                    Codigo Dueño
                                </th>
                                <th scope="col">
                                    Codigo Ocupante
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
                            foreach ($resultadoInmueble as $fila):
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
                                    <?= $fila["cod_dueno"]; ?>
                                </td>
                                <td>
                                    <?= $fila["cod_ocupante"]; ?>
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

                

            </div>

<?php


include "../includes/footer.php";
?>