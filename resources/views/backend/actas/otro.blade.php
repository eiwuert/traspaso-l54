@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')

	<div id="otro">

		<i v-show="loading" class="fa fa-cog fa-spin fa-3x fa-fw"></i>

		<div class="col-md-12">
			<div class="page-header">
				<h2>9.Otros antecedentes</h2>
			</div>
		</div>

		<div class="col-lg-12">
	        <form method="POST" enctype="multipart/form-data" action="backend/actas/otro" id="my-dropzone" class="dropzone" v-on:submit.prevent="validateBeforeSubmit">

	        	<div class="form-group">
			    	<label for="direccion">Dirección electrónica.</label>
			    	<input type="text" class="form-control" v-model="otrodata.direccion" v-el:direccionInput placeholder="Dirección electrónica con otros antecedentes del servicio." />
			  	</div>
			  	<div class="form-group">
	            	<input class="form-control" type="file" id="fileInput" multiple v-el:fileInput />
	            </div>

	            <table class="table">
					<caption><h3>Listado de archivos</h3></caption>
					<thead>
						<tr>
							<th>Nombre</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="archivo in archivos">
							<td>@{{archivo.nombre}}</td>
							<td>
								<a href="<?php echo url('backend/actas/otro/descarga/'."{{archivo.id}}") ?>" class="btn btn-info">Descargar</a>
								<button class="btn btn-danger" @click.prevent="borrarArchivo(archivo)">Eliminar</button>
							</td>
						</tr>
					</tbody>
				</table>

	            <!-- SUBMIT -->
				<div class="form-group pull-right">
				<button type="submit" class="btn btn-success">Guardar borrador</button>
				</div>
	        </form>
	    </div>
    </div>

@stop