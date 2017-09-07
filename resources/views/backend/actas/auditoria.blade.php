@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')


	<div class="col-md-12">

		<div class="page-header">
			<h2>7. Entrega Área Auditoría Interna</h2>
		</div>

		
	</div>

	<div class="col-lg-12">

		<br>

		<div class="table-responsive" id="auditoria">
			<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="setData">

			  	<div class="form-group">
					<table class="table">
						<caption>
							<h3>Plan anual auditoría</h3>
							<p>Plan anual de auditoría año 2018 aprobado por la Dirección del Servicio respectivo.</p>
						</caption>
						<thead>
							<tr>
								<th>Archivo resolución aprobatoria plan de auditorias 2018</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="resolucion in resoluciones">
								<td>
									{!! Form::file('resolucion.archivo', null) !!}
								</td>

								<!--<td><button class="btn btn-danger" @click.prevent="borrarResolucion(resolucion)">Eliminar</button></td>-->
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<!--<td colspan="4"><button class="btn btn-primary" @click.prevent="agregarResolucion"><i class="fa fa-plus"></i>Agregar archivo</button></td>-->
							</tr>
							<tr>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<br>

				<!-- SUBMIT -->
				<div class="form-group pull-right">
				<!--<button class="btn btn-success" @click.prevent="setData">Guardar borrador</button>-->
				<button type="submit" class="btn btn-success">Subir archivo</button>
				</div>

			</form>
			


		</div>
	</div>
</div>

@stop