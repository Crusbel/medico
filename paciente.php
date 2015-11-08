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
                            <span>Filtros</span>
                        </div>
                        <div class="row">
                            <select>
                                <option value="" disabled selected>Todos los doctores</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="row">
                            <form>
                                <div class="row">
                                    <p>
                                        <input type="checkbox" id="test" />
                                        <label for="test">Marcar Todos</label>
                                    </p>
                                </div>
                                <p>
                                    <input type="checkbox" id="test" />
                                    <label for="test">En tratamiento</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="tes" />
                                    <label for="tes">Por confirmar</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Tratamiento finalizado</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">No asiste</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Anulado</label>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col l9 m9 contenedorAgenda"> 
                    <div class="row ">
                        <div class="col l12 m12">
                            <div class="row">
                                <div class="col l6 m6">
                                    <p>Citas</p>
                                </div>
                                <div class="col l3 m3">
                                    <a href="paciente_nuevo.php" class="nuevaCitaAgenda">Nuevo paciente</a>  
                                </div>
                                <div class="col l3 m3">
                                    <a href="#" class="imprimirAgenda">Imprimir</a>
                                </div>
                            </div>
                        </div>
                        <table class="striped highlight" >
                            <thead>
                                <tr>
                                    <th data-field="id">N° Tratamiento</th>
                                    <th data-field="name">Dentista</th>
                                    <th data-field="price">Fecha</th>
                                    <th data-field="price">Estado</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                </tr>
                                <tr>
                                    <td>Alan</td>
                                    <td>Jellybean</td>
                                    <td>$3.76</td>
                                </tr>
                                <tr>
                                    <td>Jonathan</td>
                                    <td>Lollipop</td>
                                    <td>$7.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>


        <?php include('include/script.php'); ?>

    </body>
</html>