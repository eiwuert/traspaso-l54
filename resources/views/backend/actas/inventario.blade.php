@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')


	<div class="col-md-12">

		<div class="page-header">
			<h2>4. Entrega Área Inventario</h2>
		</div>

		
	</div>

	<div class="col-lg-12">

		<br>

		<div class="table-responsive" id="inventario">
			<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="setData">

		  	<div class="form-group">
				<table class="table">
					<caption><h3>Registro de bienes e inmuebles </h3></caption>
					<thead>
						<tr>
							<th>Tipo de activo</th>
							<th>N° de unidades</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="mueble in mueblesinmuebles">
							<td><select name="tipo_activo" v-model="mueble.tipo_activo" class="form-control">
								  <option disabled value="">Seleccione una opción</option>
								  <option value="bienes-inmuebles">Bienes inmuebles</option>
								  <option value="mobiliario-y-otros">Mobiliario y otros</option>
								  <option value="maquinas-y-equipos">Máquinas y equipos</option>
								  <option value="equipos-informaticos">Equipos Informáticos</option>
								  <option value="programas-informaticos">Prográmas Informáticos</option>
								</select>
							</td>
							<td><input type="text" name="unidades" class="form-control" v-model="mueble.unidades" ></td>
							<td><button class="btn btn-danger" @click.prevent="borrarMuebleInmueble(mueble)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarMueble"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
				
				<table class="table">
					<caption><h3>Nómina de vehículos propios o entregados en comodato</h3></caption>
					<thead>
						<tr>
							<th>Identificación de la especie</th>
							<th>Patente</th>
							<th>Condición jurídica</th>
							<th>Condición física</th>
							<th>Destinación</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="vehiculo in vehiculos">
							<td><input type="text" name="identificacion_especie" class="form-control" v-model="vehiculo.identificacion_especie" ></td>
							<td><input type="text" name="patente" class="form-control" v-model="vehiculo.patente"></td>
							<td><select name="tipo" v-model="vehiculo.condicion_juridica" class="form-control">
								  <option disabled value="">Seleccione una opción</option>
								  <option value="propio">Propio</option>
								  <option value="recibido">Recibido</option>
								  <option value="dado_en_comodato">Dado en comodato</option>
								</select>
							</td>
							<td><select name="tipo" v-model="vehiculo.condicion_fisica" class="form-control">
								  <option disabled value="">Seleccione una opción</option>
								  <option value="bueno">Bueno</option>
								  <option value="regular">Regular</option>
								  <option value="malo">Malo</option>
								</select>
							</td>
							<td><input type="text" name="destinacion" class="form-control" v-model="vehiculo.destinacion" ></td>
							<td><button class="btn btn-danger" @click.prevent="borrarVehiculo(vehiculo)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarVehiculo"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>

				<table class="table">
					<caption><h3>Nómina de artículos de escritorio, materiales fungibles y otros en stock.</h3></caption>
					<thead>
						<tr>
							<th>Identificación de la especie</th>
							<th>Número de unidades</th>
							<th>Monto en $</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="escritorio in escritorios">
							<td><input type="text" name="identificacion_especie" class="form-control" v-model="escritorio.identificacion_especie" ></td>
							<td><input type="text" name="unidades" class="form-control" v-model="escritorio.unidades"></td>
							<td><input type="text" name="monto" class="form-control" v-model="escritorio.monto" ></td>
							<td><button class="btn btn-danger" @click.prevent="borrarEscritorio(escritorio)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarEscritorio"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>

				<table class="table">
					<caption><h3>Nómina de productos para atender emergencias cuando corresponda.</h3></caption>
					<thead>
						<tr>
							<th>Identificación de la especie</th>
							<th>Número de unidades</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="producto in productos">
							<td><input type="text" name="identificacion_especie" class="form-control" v-model="producto.identificacion_especie" ></td>
							<td><input type="text" name="unidades" class="form-control" v-model="producto.unidades"></td>
							<td><button class="btn btn-danger" @click.prevent="borrarProducto(producto)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarProducto"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>

				<table class="table">
					<caption><h3>Nómina de contratos  con sus respectivos montos.</h3></caption>
					<thead>
						<tr>
							<th>Clasificación de contratos</th>
							<th>Nº de contratos</th>
							<th>Monto M$(mensual)</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="contrato in contratos">
							<td><select name="tipo" v-model="contrato.clasificacion_contratos" class="form-control">
								  <option disabled value="">Seleccione una opción</option>
								  <option value="mantencion-bienes-muebles">Mantención de bienes muebles</option>
								  <option value="mantencion-vehiculos">Mantención de vehículos</option>
								  <option value="reparacion-inmuebles">Reparación de inmuebles</option>
								  <option value="seguridad">Seguridad</option>
								  <option value="aseo">Aseo</option>
								  <option value="informatica">Informática</option>
								  <option value="otros">Otros</option>
								</select>
							</td>
							<td><input type="text" name="numero_contratos" class="form-control" v-model="contrato.numero_contratos"></td>
							<td><input type="text" name="monto_mensual" class="form-control" v-model="contrato.monto_mensual"></td>
							<td><button class="btn btn-danger" @click.prevent="borrarContrato(contrato)">Eliminar</button></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" value="Total" disabled></td>
							<td><input type="text" class="form-control" value="@{{ totalContratos }}" disabled></td>
							<td><input type="text" class="form-control" value="@{{ totalMontos }}" disabled></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarContrato"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>

				
			</div>

			<!-- SUBMIT -->
			<div class="form-group pull-right">
			<button type="submit" class="btn btn-success">Guardar borrador</button>
			</div>

			</form>
		</div>
	</div>
</div>

@stop