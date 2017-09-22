@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')

	<div id="biblioteca">

		<i v-show="loading" class="fa fa-cog fa-spin fa-3x fa-fw"></i>

		<div class="col-md-12">
			<div class="page-header">
				<h2>9.Biblioteca Digital del Gobierno de Chile</h2>
			</div>
		</div>
		
	        <form method="POST" enctype="multipart/form-data" action="backend/actas/biblioteca" id="my-dropzone" v-on:submit.prevent="setData">
	        	<div class="checkbox">
	        		<label>
			    	<input type="checkbox" v-model="bibliotecadata.entrega" /> Han sido entregados los estudios que se hayan realizado durante esta gestión.
			    	</label>
			  	</div>
			  	
	            <!-- SUBMIT -->
				<div class="form-group pull-right">
				<button type="submit" class="btn btn-success">Guardar borrador</button>
				</div>
	        </form>
	    
    </div>

@stop