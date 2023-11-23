<?php
include "../includes/header.php";
?>


<h1 class="mt-3">Entidad análoga a CLIENTE (USUARIO)</h1>

<div class="row">

                <div class="col-md-7 m-2 p-3" style="background-color: #fff; border: solid #e3e4e5 1px; border-radius: 8px;">
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
                                    Tipo
                                </th>
                                <th scope="col">
                                    Saldo
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
                                    Persona natural
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
                                    Persona natural
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
                                    Persona natural
                                </td>
                                <td>
                                    300
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

                    <button type="submit" class="btn btn-primary form-control mt-2">Añadir</button>
                    
                    </form>

                </div>

            </div>



<?php


include "../includes/footer.php";
?>

