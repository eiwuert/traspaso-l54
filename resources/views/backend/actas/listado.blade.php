@extends('layouts.backend')

@section('contenido')

<div class="row">
	<div class="col-lg-12">

		<h3>Actas de entrega
			<a href="{{ url('/backend/actas/iniciar') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span>Iniciar Acta</a>
		</h3>

		<hr/>

		<div class="list-group">
			<table class="table table-hover table-striped table-bordered table-condensed">
				<tr>
					<th class="text-center">N°</th>
					<th class="text-center">Fecha creación acta</th>
					<th class="text-center">Estado</th>
                    <th class="text-center">Última modificación</th>
					<th class="text-center">Acciones</th>
				</tr>
                @if($actas->count())
				    @foreach ($actas as $key => $d)
				      <tr>
				      	    <td class="text-center">{{ $d->id}}</td>
		                    <td class="text-center">{{ $d->created_at->timezone('America/Santiago')->format('d-m-Y') }}</td>
				      	    <td class="text-center">{{ $d->estado  }}</td>
		                    <td class="text-center">{{ $d->updated_at->timezone('America/Santiago')->format('d-m-Y') }}</td>
				      	    <td class="text-left">
				      		    <a class="btn btn-mini {{ $d->status}}" href="{{ url('/backend/patrimonio/'.$d->id.'/ver') }}">{{ $d->status }}</a>
								@if($d->status != 'anulada')
		                        	<!--<a class="btn btn-mini btn-default" href="{{ url('/backend/patrimonio/'.$d->id.'/ver/publico') }}">Previsualizar acta</a>-->
		                        	<a class="btn btn-mini btn-default" href="{{ url('/backend/actas/iniciar/'.$d->id) }}">Editar acta</a>
		                    	@endif
								@if(($d->status == 'publicada' || $d->status == 'aprobada') && $d->autoriza_datos_personales == 0)
									<a class="btn btn-mini btn-danger" href="{{ url('/backend/patrimonio/'.$d->id.'/autorizar-datos-personales') }}">Autorizar datos del instructivo</a>
								@endif

		                        	<!--<a class="btn btn-mini btn-danger" href="{{ url('/backend/patrimonio/'.$d->id.'/anular')}}">Anular Declaración</a>-->

				      	    </td>
				      </tr>
				   @endforeach
                @else

                <tr>
                    <td colspan="5" class="text-center">No hay actas</td>
                </tr>
                @endif
		    </table>
		</div>
	</div>
</div>

@stop