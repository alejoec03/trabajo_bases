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
                        <option value="Disponible">Disponible</option>
                        <option value="No Disponible">No Disponible</option>
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
                            <label class="form-label">Cedula del Dueño</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value= "0"selected>Seleccione una</option>
                        <option value="1001">1001</option>
                        <option value="1002">1002</option>
                        <option value="1003">1003</option>
                    </select>
                        </div>

                    </div>

                     <div class="row">
                        

                        <div class="form-group col-md-4">
                            <label class="form-label">Cedula del Ocupante*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value= "0"selected>Seleccione una</option>
                        <option value="1001">1001</option>
                        <option value="1002">1002</option>
                        <option value="1003">1003</option>
                    </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for=""></label>
                            <button type="button" class="btn btn-primary form-control mt-2">Añadir</button>
                        </div>

                    </div>

                    

                    

      

                    

                    

                    
                
                </div>

            </div>

            <div class="row">

                <div class="col-lg-12 m-2 p-3" style="background-color: #fff; border: solid #e3e4e5 1px; border-radius: 8px;">
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

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    1
                                </th>
                                <td>
                                    Casa
                                </td>
                                <td>
                                    150
                                </td>
                                <td>
                                    Calle 123 # 45-67
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    4
                                </td>
                                <td>
                                    $650000
                                </td>
                                <td>
                                    5
                                </td>
                                <td>
                                    3
                                </td> 
                            </tr>
                            <tr>
                                <th scope="row">
                                    1
                                </th>
                                <td>
                                    Apartamento
                                </td>
                                <td>
                                    150
                                </td>
                                <td>
                                    Calle 123 # 45-67
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    4
                                </td>
                                <td>
                                    $650000
                                </td>
                                <td>
                                    5
                                </td>
                                <td>
                                    3
                                </td> 
                            </tr>
                            <tr>
                                <th scope="row">
                                    1
                                </th>
                                <td>
                                    Casa
                                </td>
                                <td>
                                    150
                                </td>
                                <td>
                                    Calle 123 # 45-67
                                </td>
                                <td>
                                    No Disponible
                                </td>
                                <td>
                                    4
                                </td>
                                <td>
                                    $650000
                                </td>
                                <td>
                                    5
                                </td>
                                <td>
                                    3
                                </td> 
                            </tr>
                        </tbody>
                    </table>
                </div>

                

            </div>

<?php


include "../includes/footer.php";
?>