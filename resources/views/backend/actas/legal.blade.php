@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')


	<div class="col-md-12">

		<div class="page-header">
			<h2>5. Entrega Área Legal</h2>
		</div>

		
	</div>

	<div class="col-lg-12">

		<br>

		<div class="table-responsive" id="legal">
			<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="setData">

			  	<div class="form-group">
					<table class="table">
						<caption>
							<h3>Tramitación documentos</h3>
							<p>Estado de tramitación de documentos que deben ser tomados de razón en Contraloría</p>
						</caption>
						<thead>
							<tr>
								<th>Nombre documento</th>
								<th>Fecha ingreso</th>
								<th>Estado</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="documento in documentos">
								<td><input type="text" name="nombre" class="form-control" v-model="documento.nombre" ></td>
								<td>
									<input type="text" name="fecha_ingreso" class="form-control" v-model="documento.fecha_ingreso" >
								</td>
								<td><input type="text" name="estado" class="form-control" v-model="documento.estado"></td>
								<td><button class="btn btn-danger" @click.prevent="borrarDocumento(documento)">Eliminar</button></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="4"><button class="btn btn-primary" @click.prevent="agregarDocumento"><i class="fa fa-plus"></i>Agregar registro</button></td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<br>
				<div class="form-group">
					<table class="table">
						<caption><h3>Proyectos de ley en tramitación</h3></caption>
						<thead>
							<tr>
								<th>Nombre proyecto de ley</th>
								<th>Fecha de ingreso</th>
								<th>Estado</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="proyecto in proyectos">
								<td><input type="text" name="nombre" class="form-control" v-model="proyecto.nombre" ></td>
								<td><input type="text" name="fecha_ingreso" class="form-control" v-model="proyecto.fecha_ingreso" ></td>
								<td><input type="text" name="estado" class="form-control" v-model="proyecto.estado"></td>
								<td><button class="btn btn-danger" @click.prevent="borrarProyecto(proyecto)">Eliminar</button></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="4"><button class="btn btn-primary" @click.prevent="agregarProyecto"><i class="fa fa-plus"></i>Agregar registro</button></td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>

				<br>
				<div class="form-group">
					<table class="table">
						<caption><h3>Listado de juicios pendientes</h3></caption>
						<thead>
							<tr>
								<th>Materia</th>
								<th>Nº de causa</th>
								<th>Año</th>
								<th>Tribunal</th>
								<th>Sede</th>
								<th>Naturaleza</th>
								<th>Instancia</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="juicio in juicios">
								<td><input type="text" name="materia" class="form-control" v-model="juicio.materia" ></td>
								<td><input type="text" name="numero_causa" class="form-control" v-model="juicio.numero_causa"></td>
								<td><input type="text" name="anio" class="form-control" v-model="juicio.anio"></td>
								<td><input type="text" name="tribunal" class="form-control" v-model="juicio.tribunal"></td>
								<td>
									<select name="sede" v-model="juicio.sede" class="form-control">
									  <option disabled value="">Seleccione una opción</option>
									  <option value="Civil">Civil</option>
									  <option value="Penal">Penal</option>
									  <option value="Laboral">Laboral</option>
									  <option value="Competencia común">Competencia común</option>
									</select>
								</td>
								<td><input type="text" name="naturaleza" class="form-control" v-model="juicio.naturaleza"></td>
								<td><input type="text" name="instancia" class="form-control" v-model="juicio.instancia"></td>
								<td><button class="btn btn-danger" @click.prevent="borrarJuicio(juicio)">Eliminar</button></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="8"><button class="btn btn-primary" @click.prevent="agregarJuicio"><i class="fa fa-plus"></i>Agregar registro</button></td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<br>
				<div class="form-group">
					<table class="table">
						<caption><h3>Listado de sumarios e investigaciones sumarias en desarrollo</h3></caption>
						<thead>
							<tr>
								<th>Tipo (sumario o investigación)</th>
								<th>Nº resolución</th>
								<th>Fecha resolución</th>
								<th>Estado del proceso</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="sumario in sumarios">
								<td>
									<select name="tipo" v-model="sumario.tipo" class="form-control">
									  <option disabled value="">Seleccione una opción</option>
									  <option value="Sumario">Sumario</option>
									  <option value="Investigación">Investigación</option>
									</select>
								</td>
								<td><input type="text" name="numero_resolucion" class="form-control" v-model="sumario.numero_resolucion" ></td>
								<td><input type="text" name="fecha_resolucion" class="form-control" v-model="sumario.fecha_resolucion" ></td>
								<td><input type="text" name="estado_proceso" class="form-control" v-model="sumario.estado_proceso" ></td>
								<td><button class="btn btn-danger" @click.prevent="borrarSumario(sumario)">Eliminar</button></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarSumario"><i class="fa fa-plus"></i>Agregar registro</button></td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
			  	<br>
			  	<div class="form-group">
					<table class="table">
						<caption>
							<h3>Nómina de requerimientos</h3>
							<p>Requerimientos de información o respuestas pendientes a organismos contralores (Contraloría, Consejo para la Transparencia, Ministerio Público, etc.)</p>
						</caption>
						<thead>
							<tr>
								<th>Institución</th>
								<th>Identificación del documento</th>
								<th>Fecha del documento</th>
								<th>Materia</th>
								<th>Estado</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="requerimiento in requerimientos">
								<td><input type="text" name="institucion" class="form-control" v-model="requerimiento.institucion" ></td>
								<td><input type="text" name="identificacion_documento" class="form-control" v-model="requerimiento.identificacion_documento" ></td>
								<td><input type="text" name="fecha_documento" class="form-control" v-model="requerimiento.fecha_documento" ></td>
								<td><input type="text" name="materia" class="form-control" v-model="requerimiento.materia" ></td>
								<td><input type="text" name="estado" class="form-control" v-model="requerimiento.estado" ></td>
								<td><button class="btn btn-danger" @click.prevent="borrarRequerimiento(requerimiento)">Eliminar</button></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="6"><button class="btn btn-primary" @click.prevent="agregarRequerimiento"><i class="fa fa-plus"></i>Agregar registro</button></td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>

			  	

				<!-- SUBMIT -->
				<div class="form-group pull-right">
				<!--<button class="btn btn-success" @click.prevent="setData">Guardar borrador</button>-->
				<button type="submit" class="btn btn-success">Guardar borrador</button>
				</div>

			</form>
			


		</div>
	</div>
</div>

@stop