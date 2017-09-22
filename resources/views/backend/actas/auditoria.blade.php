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

		<div class="table-responsive" id="auditoria">
			<div class="form-group">
				<table class="table">
					<caption>
						<h3>Plan anual de auditoría año 2018 aprobado por la Dirección del servicio respectivo</h3>
						<p>Agregar archivo resolución aprobatoria de plan de auditorías 2018</p>
					</caption>

					@if(isset($auditoria))
					<table class="table">
						<p>Archivo subido</p>
						<thead>
							<tr>
								<td>Nombre Archivo</td>
								<td>Acciones</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="{{url('/backend/actas/auditoria-descargar/'.$auditoria->acta_id)}}" >{{$auditoria->archivo_nombre}}</a></td>
								<td>
									{!! Form::open(array('url' => 'backend/actas/auditoria/' . $auditoria->id, 'class' => 'pull-right')) !!}
									{!! Form::hidden('_method', 'DELETE') !!}
									{!! Form::submit('Eliminar', array('class' => 'btn btn-warning')) !!}
									{!! Form::close() !!}
									<a class="btn btn-small btn-info" href="{{ URL::to('backend/actas/auditoria-descargar/' . $auditoria->acta_id ) }}">Descargar</a>
								</td>
							</tr>
						</tbody>
					</table>
					@endif
					
					<tbody>
						<tr>
							<td>
								<form enctype="multipart/form-data"  v-on:submit.prevent="onSubmitForm">

								  	<div class="form-group">
						            	<input class="form-control" type="file" id="fileInput" multiple v-el:fileInput />
						            </div>

						            <!-- SUBMIT -->
									<div class="form-group pull-right">
									<button type="submit" class="btn btn-success"> {!! (isset($auditoria)) ? 'Actualizar archivo' : 'Subir archivo ' !!}</button>
									</div>
						        </form>
							</td>
						</tr>
					</tbody>

				</table>
			</div>

		</div>
	</div>
</div>

@stop



