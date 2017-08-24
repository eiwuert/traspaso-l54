@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')


	<div class="col-md-12">

		<div class="page-header">
			<h2>2. Entrega Área de Personal</h2>
		</div>

		
	</div>

	<div class="col-lg-12">

		<br>

		<div class="table-responsive" id="personal">
			<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="setData">

			<div class="form-group" >
		    	<label for="enlace_dotacion_personal">Personal del Servicio.</label>
		    	<input type="text" class="form-control" v-model="personaldata.enlace_dotacion_personal" placeholder="Indicar link a “Dotación de personal”, transparencia activa, web del Servicio." />
		  	</div>
		  	<br>
		  	<div class="form-group">
				<table class="table">
					<caption><h3>Escalafón, ascensos y nombramientos en trámite</h3></caption>
					<thead>
						<tr>
							<th>Tipo</th>
							<th>N° de cargos en proceso de promoción</th>
							<th>N° de cargos en proceso de nombramiento en trámite</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="nombramiento in nombramientos">
							<td><select name="tipo" v-model="nombramiento.tipo" class="form-control">
								  <option disabled value="">Seleccione una opción</option>
								  <option value="directivos">Directivos</option>
								  <option value="profesionales">Profesionales</option>
								  <option value="tecnicos">Técnicos</option>
								  <option value="administrativos">Administrativos</option>
								  <option value="auxiliares">Auxiliares</option>
								  <option value="cargos-vacantes">Cargos Vacantes</option>
								</select>
							</td>
							<td><input type="text" name="total_promocion" class="form-control" v-model="nombramiento.total_proceso_promocion" ></td>
							<td><input type="text" name="total_nombramiento" class="form-control" v-model="nombramiento.total_proceso_nombramiento"></td>
							<td><button class="btn btn-danger" @click.prevent="borrarNombramiento(nombramiento)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarNombramiento"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>

			<!-- SUBMIT -->
			<div class="form-group pull-right">
			<button type="submit" class="btn btn-success">Guardar borrador</button>
			</div>

			</form>
		</div>
	</div>
</div>

@stop