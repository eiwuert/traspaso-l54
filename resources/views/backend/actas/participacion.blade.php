@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')

	<div id="participacion">

		<i v-show="loading" class="fa fa-cog fa-spin fa-3x fa-fw"></i>

		<div class="col-md-12">
			<div class="page-header">
				<h2>9.Instancias de participación ciudadana</h2>
			</div>
		</div>
		
	        <form method="POST" enctype="multipart/form-data" action="backend/actas/participacion" id="my-dropzone" v-on:submit.prevent="setData">
	        	<div class="form-group">
	        		<label for="enlace_participacion_ciudadana">Indicar link a 'Participación ciudadana', transparencia activa, página web del Servicio.</label>
			    	<input type="text" class="form-control" v-model="participaciondata.enlace_participacion_ciudadana" placeholder="Indicar link a 'Participación ciudadana', transparencia activa, página web del Servicio." />
			  	</div>
			  	
	            <!-- SUBMIT -->
				<div class="form-group pull-right">
				<button type="submit" class="btn btn-success">Guardar borrador</button>
				</div>
	        </form>
	    
    </div>

@stop