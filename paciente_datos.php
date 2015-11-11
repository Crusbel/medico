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
                        <div class="col l10 m10">
                        
                        <table>

                            <tbody>
                                <tr>
                                    <td>Nombre :</td>
                                    <td>Daniel Crusbel</td>
                                </tr>
                                <tr>
                                    <td>Apellido Paterno :</td>
                                    <td>Justo</td>
                                </tr>
                                <tr>
                                    <td>Apellido Materno :</td>
                                    <td>López</td>
                                </tr>
                                <tr>
                                    <td>Tipo Documento :</td>
                                    <td>DNI</td>
                                </tr>
                                <tr>
                                    <td>Documento :</td>
                                    <td>48221252</td>
                                </tr>
                                <tr>
                                    <td>Dirección :</td>
                                    <td>Urb. parques de carabayllo 203 203 - carabayllo - lima</td>
                                </tr>
                                <tr>
                                    <td>Correo electrónico :</td>
                                    <td>crusbeljl@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Teléfono / Celular :</td>
                                    <td>999999999</td>
                                </tr>
                                <tr>
                                    <td>Nacimiento :</td>
                                    <td>29 diciembre , 1993</td>
                                </tr>
                                <tr>
                                    <td>Sexo :</td>
                                    <td>Masculino</td>
                                </tr>
                                <tr>
                                    <td>Fecha Registro :</td>
                                    <td>29-29-2222</td>
                                </tr>
                                <tr>
                                    <td>Fecha Modificado :</td>
                                    <td>999999999</td>
                                </tr>
                            </tbody>
                        </table>
</div>

                    </div>
                </div>

            </div>
        </div>


        <?php include('include/script.php'); ?>

    </body>
</html>