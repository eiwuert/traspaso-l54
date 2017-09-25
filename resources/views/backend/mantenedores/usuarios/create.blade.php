@extends('layouts.backend')

@section('contenido')

<div class="row" >
	<div class="col-lg-12">

		<h3>Crear usuario
		</h3>
		<hr/>
		@if (Session::has('message')  )
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		@if (Session::has('error')  )
			<div class="alert alert-danger">{{ Session::get('error') }}</div>
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

			{!! Form::open(array('url' => 'backend/gestion/usuarios' , 'class' => 'form-horizontal', 'id' => 'form-usuario', 'method' => 'post', 'v-on:submit' => 'validateForm')) !!}

				<div class="form-group">
					{!! Form::label('nombres', 'Nombres') !!}
					{!! Form::text('nombres', Input::old('nombres'), array('class' => 'form-control form-control-warning', 'v-model'=>'nombres')) !!}
					<div class="form-group" v-bind:class="{ 'has-warning': attemptSubmit && missingNombres }"></div>
					<div class="" v-if="attemptSubmit && missingNombres">* Todos los campos son obligatorios</div>
				</div>
				<div class="form-group">
					{!! Form::label('apellidos', 'Apellidos') !!}
					{!! Form::text('apellidos', Input::old('apellidos'), array('class' => 'form-control form-control-warning', 'required' => 'required', 'v-model'=>'apellidos')) !!}
					<div class="form-group" v-bind:class="{ 'has-warning': attemptSubmit && missingApellidos }"></div>
						<div class="form-control-feedback" v-if="attemptSubmit && missingApellidos">* Todos los campos son obligatorios</div>
				</div>

				<div class="form-group">
					{!! Form::label('correo', 'Email') !!}
					{!! Form::email('correo', Input::old('correo'), array('class' => 'form-control form-control-warning', 'required' => 'required', 'v-model'=>'correo')) !!}
					<div class="form-group" v-bind:class="{ 'has-warning': attemptSubmit && missingCorreo }"></div>
					<div class="form-control-feedback" v-if="attemptSubmit && missingCorreo">* Todos los campos son obligatorios</div>
				</div>
				<div class="form-group">
					{!! Form::label('rut', 'Rut, ingrese el rut sin dígito verificador') !!}
					{!! Form::text('rut', Input::old('rut'), array('class' => 'form-control form-control-warning', 'required' => 'required', 'v-model'=>'rut')) !!}
					<div class="form-group" v-bind:class="{ 'has-warning': attemptSubmit && missingRut }"></div>
					<div class="form-control-feedback" v-if="attemptSubmit && missingRut">* Todos los campos son obligatorios</div>
				</div>

				<div class="form-group">
					{!! Form::label('perfil', 'Rol de usuario') !!}
					{!! Form::select('perfil', $roles, Input::old('perfil'), array('class' => 'form-control', 'required' => 'required', 'v-model'=>'perfil')) !!}
				</div>
				<div class="form-group" v-show="perfil && perfil != 'root'">
					{!! Form::label('institucion_id', 'Institucion') !!}
					{!! Form::select('institucion_id', ['-1' => 'Seleccione una institución']+ $instituciones, Input::old('institucion_id'), array('class' => 'form-control', 'required' => 'required')) !!}
				</div>

				

				{!! Form::submit('Crear usuario', array('class' => 'btn btn-primary')) !!}

			{!! Form::close() !!}
			<br>
		</div>


		

	</div>
</div>

@stop