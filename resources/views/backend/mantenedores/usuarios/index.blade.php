@extends('layouts.backend')

@section('contenido')

<div class="row">
	<div class="col-lg-12">

		<h3>Usuarios
			@if(\Auth::user()->perfil == 'root' || \Auth::user()->perfil == 'superadmin')
				<a href="{{ URL::to('backend/gestion/usuarios/create') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span>Agregar usuario</a>
			@endif
		</h3>
		<hr/>

		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		@if (Session::has('error')  )
			<div class="alert alert-danger">{{ Session::get('error') }}</div>
		@endif
		<div class="list-group">
			<table class="table table-hover table-striped table-bordered table-condensed">
				<tr>
					<th class="text-center">Nombres</th>
					<th class="text-center">Apellidos</th>
					<th class="text-center">Email</th>
					<th class="text-center">Institución</th>
					<th class="text-center">Perfil</th>
					<th class="text-center">Acciones</th>
				</tr>
                @if($usuarios->count())
				    @foreach ($usuarios as $usuario)
				      <tr>
						<td>{{ $usuario->nombres }}</td>
						<td>{{ $usuario->apellidos }}</td>
						<td>{{ $usuario->correo }}</td>
						<td>{{ $usuario->institucion->nombre }}</td>
						<td>{{ $usuario->perfil }}</td>
						<td>
						{!! Form::open(array('url' => 'backend/gestion/usuarios/' . $usuario->id, 'class' => 'pull-right')) !!}
						{!! Form::hidden('_method', 'DELETE') !!}
						{!! Form::submit('Borrar este usuario', array('class' => 'btn btn-warning')) !!}
						{!! Form::close() !!}
						<a class="btn btn-small btn-info" href="{{ URL::to('backend/gestion/usuarios/' . $usuario->id . '/edit') }}">Editar</a>

						</td>
					</tr>
				   @endforeach
                @else

                <tr>
                    <td colspan="6" class="text-center">No existen usuarios</td>
                </tr>
                @endif
		    </table>
		</div>
	</div>
</div>

@stop