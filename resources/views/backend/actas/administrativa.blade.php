@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')


	<div class="col-md-12">

		<div class="page-header">
			<h2>6. Entrega Área Administrativa</h2>
		</div>

		
	</div>

	<div class="col-lg-12">

		<br>

		<div class="table-responsive" id="administrativa">
			<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="setData">

		  	<div class="form-group">
				<table class="table">
					<caption><h3>Listado de documentos numerados y recibidos por la Oficina de Partes al 31 de diciembre,<br>pendientes de contestar</h3></caption>
					<thead>
						<tr>
							<th>Nombre documento</th>
							<th>Fecha de ingreso</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="documento in documentos">
							<td><input type="text" name="nombre_documento" class="form-control" v-model="documento.nombre_documento" ></td>
							<td><input type="text" name="fecha_ingreso" class="form-control" v-model="documento.fecha_ingreso" ></td>
							<td><input type="text" name="estado" class="form-control" v-model="documento.estado"></td>
							<td><button class="btn btn-danger" @click.prevent="borrarDocumento(documento)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarDocumento"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<br>
			<div class="form-group" >
		    	<label for="enlace_actos">Convenios de colaboración vigentes que mantenga la Institución. Indicar link a “Actos con efectos sobre terceros, en transparencia activa.</label>
		    	<input type="text" class="form-control" v-model="administrativadata.enlace_actos" placeholder="Indicar link a “Actos con efectos sobre terceros” en transparencia activa, página web del Servicio." />
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