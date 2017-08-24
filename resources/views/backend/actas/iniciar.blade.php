@extends('layouts.backend')

@section('contenido')

<div class="row">

	<div class="col-md-12">

		<br>
		@include('layouts.vista')
		<div class="page-header">
			<h2>Acta Administrativa de Entrega</h2>
		</div>


		<ul class="list-group">
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>1. Entrega Programática, gestión</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/gestion/'.$acta_id) :  url('/backend/actas/gestion')}}" class="btn btn-warning btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>2. Entrega Área de Personal</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/personal/'.$acta_id) :  url('/backend/actas/personal')}}" class="btn btn-warning btn-lg">Editar</a>
					</div>
				</div>
				
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>3. Entrega Área Financiera</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/financiera/'.$acta_id) :  url('/backend/actas/financiera')}}" class="btn btn-warning btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>4. Entrega Área Inventario</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/inventario/'.$acta_id) :  url('/backend/actas/inventario')}}" class="btn btn-warning btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>5. Entrega Área Legal</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/legal/'.$acta_id) :  url('/backend/actas/legal')}}" class="btn btn-warning btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>6. Entrega Área Administrativa</h4>
					</div>
					<div class="col-md-2">
						<!--<a href="{{ (isset($acta_id))? url('/backend/actas/administrativa/'.$acta_id) :  url('/backend/actas/administrativa')}}" class="btn btn-warning btn-lg">Editar</a>-->
						<a href="{{url('/backend/actas/administrativa')}}" class="btn btn-warning btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>7. Entrega Área Auditoría Interna</h4>
					</div>
					<div class="col-md-2">
						<!--<a href="{{ (isset($acta_id))? url('/backend/actas/auditoria/'.$acta_id) :  url('/backend/actas/auditoria')}}" class="btn btn-warning btn-lg">Editar</a>-->
						<a href="{{url('/backend/actas/auditoria')}}" class="btn btn-warning btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>8. Instancias de participación ciudadana</h4>
					</div>
					<div class="col-md-2">
						<!--<a href="{{ (isset($acta_id))? url('/backend/actas/participacion/'.$acta_id) :  url('/backend/actas/participacion')}}" class="btn btn-warning btn-lg">Editar</a>-->
						<a href="{{url('/backend/actas/participacion')}}" class="btn btn-warning btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>9. Otros antecedentes</h4>
					</div>
					<div class="col-md-2">
						<!--<a href="{{ (isset($acta_id))? url('/backend/actas/otro/'.$acta_id) :  url('/backend/otro/gestion')}}" class="btn btn-warning btn-lg">Editar</a>-->
						<a href="{{url('/backend/actas/otro')}}" class="btn btn-warning btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
		</ul>
	</div>

</div>

@stop