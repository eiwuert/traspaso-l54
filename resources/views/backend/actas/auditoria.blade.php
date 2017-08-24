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
								<td><input type="text" name="fecha_ingreso" class="form-control" v-model="documento.fecha_ingreso" ></td>
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