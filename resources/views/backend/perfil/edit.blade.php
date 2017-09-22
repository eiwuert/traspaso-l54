@extends('layouts.backend')

@section('contenido')

<div class="container">

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">


			<h3>Perfil de usuario
			</h3>
			<br>

			@if (Session::has('message')  )
				<div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

			<div class="col-md-9 ">
				{{ Form::model($usuario, array('action' => array('Backend\PerfilController@update', $usuario->id), 'method' => 'PUT', 'class' => '', 'id' => 'form-perfil')) }}

					<div class="form-group">
						{{ Form::label('nombres', 'Nombres') }}
						{{ Form::text('nombres', Input::old('nombres'), array('class' => 'form-control','required' => 'required')) }}
					</div>
					<div class="form-group">
						{{ Form::label('apellidos', 'Apellidos') }}
						{{ Form::text('apellidos', Input::old('apellidos'), array('class' => 'form-control','required' => 'required')) }}
					</div>

					<div class="form-group">
						{{ Form::label('correo', 'Email') }}
						{{ Form::email('correo', Input::old('correo'), array('class' => 'form-control', 'required' => 'required')) }}
					</div>
					<div class="form-group">
						{{ Form::label('rut', 'Rut, ingrese el rut sin dígito verificador') }}
						{{ Form::text('rut', Input::old('nombres'), array('class' => 'form-control', 'required' => 'required')) }}
					</div>

					<div class="form-group">
						{{ Form::label('perfil', 'Rol de usuario') }}
						{{ Form::select('perfil', $roles, Input::old('perfil'), array('class' => 'form-control', 'readonly' => 'true')) }}
					</div>

					<div class="form-group" >
						{{ Form::label('institucion_id', 'Institucion') }}
						{{ Form::select('institucion_id', $instituciones, Input::old('institucion_id'), array('class' => 'form-control', 'readonly' => 'true')) }}
					</div>

					{{ Form::submit('Actualizar usuario', array('class' => 'btn btn-primary')) }}

				{{ Form::close() }}
				<br>
			</div>

		</div>
	</div>
</div>



@stop