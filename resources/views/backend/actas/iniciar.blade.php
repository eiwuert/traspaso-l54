@extends('layouts.backend')

@section('contenido')

<div class="row">


	<div class="col-md-12">

		<br>
		@include('layouts.vista')
		<div class="col-md-12">
			<br>
			@if (Session::has('message'))
				<div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif
			@if (Session::has('error')  )
				<div class="alert alert-danger">{{ Session::get('error') }}</div>
			@endif
		</div>
		<div class="page-header">
			<h2>Acta Administrativa de Entrega</h2>
		</div>


		<ul class="list-group">
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>1. Entrega Programática, gestión
							<small>
								@if(isset($gestion) && $gestion) <span class="label label-info">Con información</span> 
								@else <span class="label label-warning">Sin información</span>
								@endif
							</small>
						</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/gestion/'.$acta_id) :  url('/backend/actas/gestion')}}" class="btn btn-primary btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>2. Entrega Área de Personal 
							<small>
								@if(isset($personal) && $personal) <span class="label label-info">Con información</span> 
								@else <span class="label label-warning">Sin información</span>
								@endif
							</small>
						
						</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/personal/'.$acta_id) :  url('/backend/actas/personal')}}" class="btn btn-primary btn-lg">Editar</a>
					</div>
				</div>
				
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>3. Entrega Área Financiera
							<small>
								@if(isset($financiera) && $financiera) <span class="label label-info">Con información</span> 
								@else <span class="label label-warning">Sin información</span>
								@endif
							</small>
						
						</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/financiera/'.$acta_id) :  url('/backend/actas/financiera')}}" class="btn btn-primary btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>4. Entrega Área Inventario
							<small>
								@if(isset($inventario) && $inventario) <span class="label label-info">Con información</span> 
								@else <span class="label label-warning">Sin información</span>
								@endif
							</small>
						
						</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/inventario/'.$acta_id) :  url('/backend/actas/inventario')}}" class="btn btn-primary btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>5. Entrega Área Legal
							<small>
								@if(isset($legal) && $legal) <span class="label label-info">Con información</span> 
								@else <span class="label label-warning">Sin información</span>
								@endif
							</small>
						
						</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/legal/'.$acta_id) :  url('/backend/actas/legal')}}" class="btn btn-primary btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>6. Entrega Área Administrativa
							<small>
								@if(isset($administrativa) && $administrativa) <span class="label label-info">Con información</span> 
								@else <span class="label label-warning">Sin información</span>
								@endif
							</small>
						
						</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/administrativa/'.$acta_id) :  url('/backend/actas/administrativa')}}" class="btn btn-primary btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>7. Entrega Área Auditoría Interna
							<small>
								@if(isset($auditoria) && $auditoria) <span class="label label-info">Con información</span> 
								@else <span class="label label-warning">Sin información</span>
								@endif
							</small>
						
						</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/auditoria/'.$acta_id) :  url('/backend/actas/auditoria')}}" class="btn btn-primary btn-lg">Editar</a>

					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>8. Instancias de participación ciudadana
							<small>
								@if(isset($participacion) && $participacion) <span class="label label-info">Con información</span> 
								@else <span class="label label-warning">Sin información</span>
								@endif
							</small>
						
						</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/participacion/'.$acta_id) :  url('/backend/actas/participacion')}}" class="btn btn-primary btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>9. Biblioteca Digital del Gobierno de Chile

						
						</h4>
					</div>
					<div class="col-md-2">

						<a href="{{ (isset($acta_id))? url('/backend/actas/biblioteca/'.$acta_id) :  url('/backend/actas/biblioteca')}}" class="btn btn-primary btn-lg">Editar</a>

					</div>
				</div>
				
			</li>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-10">
						<h4>10. Otros antecedentes
							<small>
								@if(isset($otros) && $otros ) <span class="label label-info">Con información</span> 
								@else <span class="label label-warning">Sin información</span>
								@endif
							</small>
						
						</h4>
					</div>
					<div class="col-md-2">
						<a href="{{ (isset($acta_id))? url('/backend/actas/otro/'.$acta_id) :  url('/backend/otro/gestion')}}" class="btn btn-primary btn-lg">Editar</a>
					</div>
				</div>
				
			</li>
		</ul>
	</div>

</div>

@stop