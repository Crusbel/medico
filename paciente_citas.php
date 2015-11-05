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
                            <ul>
                                <li>Citas</li>
                                <li>Datos personales</li>
                                <li>Archivos</li>
                            </ul>
                        </div>
                        <div class="row">
                            <ul>
                                <li>Tratamientos</li>
                                <li>Evoluciones</li>
                                <li>Odontograma</li>
                                <li>Documentos Clínicos</li>
                            </ul>
                        </div>
                        <div class="row">
                            <ul>
                                <li>Facturación</li>
                            </ul>
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
                                    <a href="#" class="nuevaCitaAgenda">Nueva Cita</a>  
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