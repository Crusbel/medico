<!DOCTYPE html>
<html lang="en">
    <?php include('include/head.php'); ?>
    <body>
        <?php include('include/nav.php'); ?>

        <div class="contenedor">
            <div class="row">
                <div class="col l3 m3">
                    <?php include('include/buscador_paciente.php'); ?>
                    <div class="row contenedorFiltros">
                        <div class="row">
                            <div class="col l5 m5">
                                <img class="responsive-img" src="img/qq.jpg">
                            </div>
                            <div class="col l7 m7">
                                <p>Justo Lopez</p>
                                <p>Daniel Crusbel</p>
                                <p>999999999 - 7777777</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="collection">
                                <a href="afiliadosMiembros.html" class="collection-item"><i class="fa fa-users"></i> Citas</a>
                                <a href="#!" class="collection-item"><i class="fa fa-user-secret"></i> Datos personales</a>
                                <a href="#!" class="collection-item"><i class="fa fa-cogs"></i> Archivos</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="collection">
                                <a href="afiliadosMiembros.html" class="collection-item"><i class="fa fa-users"></i> Tratamientos</a>
                                <a href="#!" class="collection-item"><i class="fa fa-user-secret"></i> Evoluciones</a>
                                <a href="#!" class="collection-item"><i class="fa fa-cogs"></i> Odontograma</a>
                                <a href="#!" class="collection-item"><i class="fa fa-table"></i> Documentos Clínicos</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="collection">
                                <a href="afiliadosMiembros.html" class="collection-item"><i class="fa fa-users"></i> Facturación</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col l9 m9 contenedorAgenda"> 
                    <div class="row ">
                        <div class="col l12 m12">
                            <div class="row">
                                <div class="col l6 m6">
                                    <p>Modificar Datos</p>
                                </div>
                                <div class="col l3 m3">
                                    <a href="#" class="imprimirAgenda">Imprimir</a>
                                </div>
                            </div>
                            <form class="col l12 m12 s12">
                                <div class="row">
                                    <div class="input-field col l4 m4">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Nombres</label>
                                    </div>

                                    <div class="input-field col l4 m4">
                                        <input  id="disabled" type="text" class="validate">
                                        <label for="disabled">Apellido Paterno</label>
                                    </div>
                                    <div class="input-field col l4 m4">
                                        <input  id="disabled" type="text" class="validate">
                                        <label for="disabled">Apellido Materno</label>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="input-field col l6 m12 s12">
                                        <input id="documento" type="text" class="validate">
                                        <label for="documento">Documento</label>
                                    </div>
                                    <div class="col col l6 m12 s12">
                                        <p>
                                            <input class="with-gap" name="groupDocum" type="radio" id="dni"  />
                                            <label for="dni">DNI</label>
                                        </p>
                                        <p>
                                            <input class="with-gap" name="groupDocum" type="radio" id="ce"  />
                                            <label for="ce">CE</label>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col l12 m12">
                                        <input id="password" type="text" class="validate">
                                        <label for="password">Dirección</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col l6 m6">
                                        <input class="validate" type="email" id="correo">
                                        <label for="correo">Correo Electrónico</label>
                                    </div>
                                    <div class="input-field col l6 m6">
                                        <input  id="disabled" type="text" class="validate">
                                        <label for="disabled">Teléfono / Celular</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col l8 m8">
                                        <div class="col l3 m3">
                                            <p>Nacimiento</p>
                                        </div>

                                        <div class="col l2 m3">
                                            <select>
                                                <option value="" disabled selected>12</option>
                                                <option value="1">12</option>
                                                <option value="2">12</option>
                                                <option value="3">2</option>
                                            </select>
                                        </div>
                                        <div class="col l4 m4">
                                            <select>
                                                <option value="" disabled selected>2015</option>
                                                <option value="1">Provincia</option>
                                                <option value="2">Provincia</option>
                                                <option value="3">Provincia</option>
                                            </select>
                                        </div>
                                        <div class="col l3 m5">
                                            <select>
                                                <option value="" disabled selected>Diciembre</option>
                                                <option value="1">Distrito</option>
                                                <option value="2">Distrito</option>
                                                <option value="3">Distrito</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col l6 m6">
                                        <div class="col l2 m2">
                                            <p>Sexo</p>
                                        </div>
                                        <div class="col l5 m5">
                                            <p>
                                                <input class="with-gap" name="estCivil" type="radio" id="soltero"  />
                                                <label for="soltero">Masculino</label>
                                            </p>
                                        </div>
                                        <div class="col l5 m5">
                                            <p>
                                                <input class="with-gap" name="estCivil" type="radio" id="casado"  />
                                                <label for="casado">Femenino</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>







                                <div class="row">
                                    <div class="col l5 m5">
                                        <p>Registro</p>
                                        <p>2015-08-21 10:09</p>
                                    </div>
                                    <div class="col l5 m5">
                                        <p>Modificado</p>
                                        <p>2015-08-21 10:09</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="">
                                        <button type="submit" class="btn btnGuardar waves-effect">Guardar</button>
                                    </div>
                                    <div>
                                        <a href="paciente.php">Cancelar</a>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <?php include('include/script.php'); ?>

    </body>
</html>