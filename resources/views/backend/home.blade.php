@extends('layouts.backend')

@section('contenido')

<div class="row">


		<div class="col-md-12">
			<h2>Traspaso de Gobierno</h2>
			<p class="lead">Bienvenido a la plataforma que le permitirá generar su acta administrativa de entrega.</p>
			<br>
			
		</div>
		<br>
		<div class="col-md-6 col-md-offset-3">
			<div class="jumbotron">
				<h3>Acta de entrega</h3>
	            <p>Formulario Electrónico de generación de acta de entrega.</p>

	            <a class="btn btn-lg btn-info btn-block" href="<?php echo url('backend/actas/listado');?>">Ver Acta de entrega</a>
			</div>

		</div>
			
	
</div>

@stop