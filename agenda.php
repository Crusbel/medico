<!DOCTYPE html>
<html lang="en">
	<?php include('include/head.php'); ?>
<body>

	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Odontología S&S</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Agenda</a></li>
        <li><a href="#">Pacientes</a></li>
        <li><a href="#">Administración</a></li>
        <li><a href="#">Reportes</a></li>
        <li><a href="#">Opciones</a></li>
        <li><a href="#">Cerrar Sesión</a></li>
      </ul>
    </div>
  </nav>
	
	<div class="contenedor">
		<div class="row">
			<div class="col l3 m3">
				<div class="row contenedorBuscarLote">
                      <form>
                        <div class="row"> 
                          <div class="input-field">
                              <input id="first_name" type="text" class="validate">
                              <label for="first_name">Buscar paciente </label>
                            </div>
                        </div>
                      </form>
                  </div>
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
                          <label for="test">No confirmado</label>
                        </p>
                        <p>
                          <input type="checkbox" id="tes" />
                          <label for="tes">Confirmado</label>
                        </p>
                        <p>
                          <input type="checkbox" id="test5" />
                          <label for="test5">En sala de espera</label>
                        </p>
                        <p>
                          <input type="checkbox" id="test" />
                          <label for="test">Atendiéndose</label>
                        </p>
                        <p>
                          <input type="checkbox" id="tes" />
                          <label for="tes">Atendido</label>
                        </p>
                        <p>
                          <input type="checkbox" id="test5" />
                          <label for="test5">No asiste</label>
                        </p>
                        <p>
                          <input type="checkbox" id="test5" />
                          <label for="test5">Reprogramado</label>
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
                <input type="date" class="datepicker dateAgenda">
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
              <th data-field="id">Hora</th>
              <th data-field="name">Paciente</th>
              <th data-field="price">Doctor</th>
              <th data-field="price">Estado</th>
              <th data-field="price">Situación</th>
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