@extends('layouts.backend')

@section('contenido')

<div class="row">
	<div class="col-lg-12">

		<h3>Editar usuario
		</h3>
		<hr/>

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

		<div class="col-md-10 col-md-offset-1 ">
			{{ Form::model($usuario, array('action' => array('Backend\UsuarioController@update', $usuario->id), 'method' => 'PUT', 'class' => '', 'id' => 'form-usuario')) }}

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
					{{ Form::select('perfil', $roles, Input::old('perfil'), array('class' => 'form-control', 'v-model'=>'perfil')) }}
				</div>

				<div class="form-group" v-show="perfil && perfil != 'root'">
					{{ Form::label('institucion_id', 'Institucion') }}
					{{ Form::select('institucion_id', $instituciones, Input::old('institucion_id'), array('class' => 'form-control', 'v-model'=>'institucion_id')) }}
				</div>

				{{ Form::submit('Actualizar usuario', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}
			<br>
		</div>


		

	</div>
</div>

@stop