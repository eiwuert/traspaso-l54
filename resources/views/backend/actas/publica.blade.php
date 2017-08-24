@extends('layouts.backend')

@section('contenido')

<div class="row">

	<div class="col-md-12">

		<br>
		@include('layouts.vista')
		<div class="page-header">
			<h2>Acta Administrativa de Entrega</h2>
		</div>

		<h4><strong>1. Entrega Programática, gestión</strong></h4>
		<table class="table table-bordered">
			<tr>
				<td>Ley orgánica Institucional</td>
				<td>{{!is_null($gestion) ? $gestion->enlace_marco_normativo : ''}}</td>
			</tr>
			<tr>
				<td>Misión institucional y objetivos estratégicos 2018.</td>
				<td>{{!is_null($gestion) ? $gestion->enlace_definiciones_estrategicas: ''}}</td>
			</tr>
			<tr>
				<td>Organigrama institucional.</td>
				<td>{{!is_null($gestion) ? $gestion->enlace_estructura_organica :''}}</td>
			</tr>
			<tr>
				<td>Cumplimiento de objetivos institucionales.</td>
				<td>{{!is_null($gestion) ?  $gestion->enlace_compromisos_gestion: ''}}</td>
			</tr>
		</table>

		<table class="table table-bordered">
			<caption>Programas y/o proyectos en preparación</caption>
			<thead>
				<tr>
					<th>Nombre programa / proyecto</th>
					<th>Monto estimado a ejecutar</th>
					<th>Etapa de ejecución</th>
				</tr>
			</thead>
			<tbody>
				@if($programas->count())
				@foreach($programas as $programa)
					<tr>
						<td>{{$programa->nombre}}</td>
						<td>{{$programa->monto}}</td>
						<td>{{$programa->etapa}}</td>
					</tr>
				@endforeach
				@else
					<tr><td colspan="12">Sin registros</td></tr>
				@endif
			</tbody>
		</table>

		<table class="table table-bordered">
			<caption>Nómina de comités interministeriales en que participa el Ministerio</caption>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Calidad en la que participa</th>
				</tr>
			</thead>
			<tbody>
				@if($comites->count())
				@foreach($comites as $comite)
					<tr>
						<td>{{$comite->nombre}}</td>
						<td>{{$comite->calidad_participacion}}</td>
					</tr>
				@endforeach
				@else
					<tr><td colspan="12" class="text-center">Sin registros</td></tr>
				@endif
			</tbody>
		</table>

		<table class="table table-bordered">
			<caption>Nómina de publicaciones relevantes efectuadas de competencia del Servicio.</caption>
			<thead>
				<tr>
					<th>Nombre Publicación</th>
					<th>Link a publicación</th>
				</tr>
			</thead>
			<tbody>
				@if($publicaciones->count())
				@foreach($publicaciones as $publicacion)
					<tr>
						<td>{{$publicacion->nombre}}</td>
						<td>{{$publicacion->enlace_publicacion}}</td>
					</tr>
				@endforeach
				@else
					<tr><td colspan="12" class="text-center">Sin registros</td></tr>
				@endif
			</tbody>
		</table>

		<table class="table table-bordered">
			<caption>Nómina de compromisos internacionales y/o participaciones comprometidas en foros internacionales.</caption>
			<thead>
				<tr>
					<th>Nombre Publicación</th>
					<th>Link a publicación</th>
				</tr>
			</thead>
			<tbody>
				@if($compromisos->count())
				@foreach($compromisos as $compromiso)
					<tr>
						<td>{{$compromiso->nombre}}</td>
						<td>{{$compromiso->calidad_participacion}}</td>
					</tr>
				@endforeach
				@else
					<tr><td colspan="12" class="text-center">Sin registros</td></tr>
				@endif
			</tbody>
		</table>

		<table class="table table-bordered">
			<tr>
				<td>Grado de ejecución presupuestaria 2017 y presupuesto aprobado 2018.</td>
				<td>{{!is_null($gestion) ? $gestion->enlace_ejecucion_presupuestaria :''}}</td>
			</tr>
		</table>

		<table class="table table-bordered">
			<caption>Nómina de licitaciones en preparación y pendientes.</caption>
			<thead>
				<tr>
					<th>Nombre licitación</th>
					<th>Estado de la licitación</th>
				</tr>
			</thead>
			<tbody>
				@if($licitaciones->count())
				@foreach($licitaciones as $licitacion)
					<tr>
						<td>{{$licitacion->nombre}}</td>
						<td>{{$licitacion->estado}}</td>
					</tr>
				@endforeach
				@else
					<tr><td colspan="12" class="text-center">Sin registros</td></tr>
				@endif
			</tbody>
		</table>

		<h4><strong>2. Entrega Área de Personal</strong></h4>
		<h4><strong>3. Entrega Área Financiera</strong>
		</h4>
		<h4><strong>4. Entrega Área Inventario</strong></h4>
		<h4><strong>5. Entrega Área Legal</strong></h4>
		<h4><strong>6. Entrega Área Administrativa</strong></h4>
		<h4><strong>7. Entrega Área Auditoría Interna</strong></h4>
		<h4><strong>8. Instancias de participación ciudadana</strong></h4>
		<h4><strong>9. Otros antecedentes</strong></h4>
	</div>

</div>

@stop