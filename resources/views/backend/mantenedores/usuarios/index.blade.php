@extends('layouts.backend')

@section('contenido')

<div class="row">
	<div class="col-lg-12">

		<h3>Usuarios
			<a href="{{ URL::to('backend/mantenedor/usuarios/create') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span>Agregar usuario</a>
		</h3>
		<hr/>

		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
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
						{{ Form::open(array('url' => 'backend/mantenedor/usuarios/' . $usuario->id, 'class' => 'pull-right')) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Borrar este usuario', array('class' => 'btn btn-warning')) }}
						{{ Form::close() }}

						<!--<a class="btn btn-small btn-success" href="{{ URL::to('backend/mantenedor/usuarios/' . $usuario->id) }}">Ver</a>-->
						<a class="btn btn-small btn-info" href="{{ URL::to('backend/mantenedor/usuarios/' . $usuario->id . '/edit') }}">Editar</a>

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