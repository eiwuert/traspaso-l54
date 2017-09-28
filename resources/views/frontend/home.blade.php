@extends('layouts.frontend')

@section('contenido')

<div class="row">

	<div class="col-md-12">
		<br>
		@if (Session::has('message'))
			<div class="alert alert-info"><h4>{{ Session::get('message') }}</h4></div>
		@endif
		@if (Session::has('error')  )
			<div class="alert alert-danger"><h4>{{ Session::get('error') }}</h4></div>
		@endif
	</div>

	<div class="col-lg-8">
	    <h1>Plataforma Traspaso<br> de Gobierno</h1>
	    <p class="lead" style="font-size: 21px">Plataforma disponible a contar de octubre de 2017.</p>
	  
		
		<p class="text-center lead">
	        <a class="btn btn-lobby btn-lg" href="<?= url('instituciones')?>">Ver información de los servicios</a>
		</p>


	</div>
</div>

@stop