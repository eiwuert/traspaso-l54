@extends('layouts.backend')

@section('contenido')

<div class="row">
	<div class="col-lg-12">

		<h3>Crear usuario
		</h3>
		<hr/>

		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif

		<div class="col-md-6 ">
			{{ Form::open(array('url' => 'backend/mantenedor/usuarios' , 'class' => 'form-horizontal')) }}

				<div class="form-group">
					{{ Form::label('nombres', 'Nombres') }}
					{{ Form::text('nombres', Input::old('nombres'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('apellidos', 'Apellidos') }}
					{{ Form::text('apellidos', Input::old('apellidos'), array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('correo', 'Email') }}
					{{ Form::email('correo', Input::old('correo'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('rut', 'Rut, ingrese el rut sin dígito verificador') }}
					{{ Form::text('rut', Input::old('rut'), array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('institucion_id', 'Institucion') }}
					{{ Form::select('institucion_id', ['-1' => 'Seleccione una institución']+ $instituciones, Input::old('institucion_id'), array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('perfil', 'Rol de usuario') }}
					{{ Form::select('perfil', $roles, Input::old('perfil'), array('class' => 'form-control')) }}
				</div>

				{{ Form::submit('Crear usuario', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}
			<br>
		</div>


		

	</div>
</div>

@stop