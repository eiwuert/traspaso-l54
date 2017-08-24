@extends('layouts.frontend')

@section('contenido')
<div class="row">
	<div class="col-md-6" >
		<h2 class="front-title">Servicios</h2>
	</div>
</div>


<div class="row">
	<div class="col-xs-12" >

		<div class="list-group table-container">
			<table id="main-table" class="table">
				<thead>
					<tr>
						<th class="text-center">Código</th>
						<th class="text-left">Servicio</th>
						<th class="text-left">URL</th>
					</tr>
				</thead>
		    <tbody>
		    @foreach($entidades as $key => $d) 
		      <tr>
		      	<td class="text-center">{{ $d->codigo }}</td>
		      	<td class="text-left">{{ $d->nombre  }}</td>
		      	<td class="text-left"><a class="" href="#">{{ url('instituciones/'.$d->codigo) }}</a></td>
		      </tr>
		    @endforeach
		    </tbody>
		    </table>
		</div>

		<div class="text-center">

	    </div>

	</div>
</div>

@stop