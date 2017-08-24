@extends('layouts.backend')

@section('contenido')

<div class="row">
	<div class="col-lg-12">

		<h3>Instituciones
			<a href="{{ url('/backend/mantenedor/instituciones') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span>Crear Institución</a>
		</h3>
		<hr/>

		<div class="list-group">
			<table class="table table-hover table-striped table-bordered table-condensed">
				<tr>
					<th class="text-center">Nombre</th>
					<th class="text-center">Código</th>
					<th class="text-center">Acción</th>
				</tr>
                @if($instituciones->count())
				    @foreach ($instituciones as $institucion)
				      <tr>
				      	    <td class="text-center">{{ $institucion->nombre}}</td>
		                    <td class="text-center">{{ $institucion->codigo }}</td>
		                    <td class="text-center">
		                    	<button type="button" class="btn btn-default btn-sm">Editar</button>
		                    	<button type="button" class="btn btn-default btn-sm">Eliminar</button>

		                    </td>

				      </tr>
				   @endforeach
                @else

                <tr>
                    <td colspan="5" class="text-center">No existen instituciones</td>
                </tr>
                @endif
		    </table>
		</div>
	</div>
</div>

@stop