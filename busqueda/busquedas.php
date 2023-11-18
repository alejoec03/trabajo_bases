<?php
include "../includes/header.php";
?>

<!-- TÍTULO. Cambiarlo, pero dejar especificada la analogía -->
<h1 class="mt-3">Búsquedas</h1>

<div class="row">

                <div class="col-md-8 m-2 p-3" style="background-color: #fff; border: solid #e3e4e5 1px; border-radius: 8px;">
                    <table class="table">
                        <thead>
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
                                    Valor*
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    1
                                </th>
                                <td>
                                    Jose
                                </td>
                                <td>
                                    jose@unal.com
                                </td>
                                <td>
                                    3013234959
                                </td>
                                <td>
                                    300
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    2
                                </th>
                                <td>
                                    Jose
                                </td>
                                <td>
                                    jose@unal.com
                                </td>
                                <td>
                                    3013234959
                                </td>
                                <td>
                                    300
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    3
                                </th>
                                <td>
                                    Jose
                                </td>
                                <td>
                                    jose@unal.com
                                </td>
                                <td>
                                    3013234959
                                </td>
                                <td>
                                    300
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-3 m-2 p-3" style="background-color: #fff; border: solid #e3e4e5 1px; border-radius: 8px;">

                    

                    <h4>Busqueda 1</h4>

                    <label class="form-label">Cedula del Usuario</label>
                    <input type="text" name="" class="form-control mb-2" placeholder="Ingrese la Cedula" required>
                    <button type="button" class="btn btn-primary form-control mt-2">Buscar</button>

                    <hr>

                    <h4>Busqueda 2</h4>

                    <label class="form-label">Fecha 1</label>
                    <input type="date" name="" class="form-control mb-2"  required>

                    <label class="form-label">Fecha 2</label>
                    <input type="date" name="" class="form-control mb-2" required>

                    <label class="form-label">Zona</label>
                    <input type="text" name="" class="form-control mb-2" placeholder="Ingrese la Zona" required>

                    <button type="button" class="btn btn-primary form-control mt-2">Buscar</button>
                
                </div>

            </div>

<?php

include "../includes/footer.php";
?>