@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')


	<div class="col-md-12">

		<div class="page-header">
			<h2>3. Entrega Área Financiera </h2>
		</div>

		
	</div>

	<div class="col-lg-12">

		<br>

		<div class="table-responsive" id="financiera">
			<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="setData">
			
		  	<br>
		  	<div class="form-group">
				<table class="table">
					<caption><h3>Cuentas corrientes del servicio</h3></caption>
					<thead>
						<tr>
							<th>N° de cuenta corriente</th>
							<th>Banco</th>
							<th>N° de personas</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="cuenta in cuentas">
							<td><input type="text" name="numero_cuenta_corriente" class="form-control" v-model="cuenta.numero_cuenta_corriente" ></td>
							<td><input type="text" name="nombre_banco" class="form-control" v-model="cuenta.nombre_banco" ></td>
							<td><input type="text" name="numero_personas" class="form-control" v-model="cuenta.numero_personas"></td>
							<td><button class="btn btn-danger" @click.prevent="borrarCuenta(cuenta)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4"><button class="btn btn-primary" @click.prevent="agregarCuenta"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<br>

			<div class="form-group">
				<table class="table">
					<caption>
						<h3>Conciliación de cuentas, resumen</h3>
						<p>Conciliaciones bancarias al 31 de diciembre o adjuntar formato disponible</p>
					</caption>
					<thead>
						<tr>
							<th>N° cuenta corriente</th>
							<th>Saldo contable</th>
							<th>Saldo Banco según certificado y cartola</th>
							<th>Depósitos u otros no registrados en saldo contable</th>
							<th>Giros u otros no registrados en saldo banco</th>
							<th>Saldo banco igual a saldo contable</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="conciliacion in conciliaciones">
							<td><input type="text" name="numero_cuenta_corriente" class="form-control" v-model="conciliacion.numero_cuenta_corriente" ></td>
							<td><input type="text" name="saldo_contable" class="form-control" v-model="conciliacion.saldo_contable" ></td>
							<td><input type="text" name="saldo_banco_cartola" class="form-control" v-model="conciliacion.saldo_banco_cartola"></td>
							<td><input type="text" name="depositos_no_registrados" class="form-control" v-model="conciliacion.depositos_no_registrados"></td>
							<td><input type="text" name="giros_no_registrados" class="form-control" v-model="conciliacion.giros_no_registrados"></td>
							<td><input type="text" name="saldo_banco_contable" class="form-control" v-model="conciliacion.saldo_banco_contable"></td>
							<td><button class="btn btn-danger" @click.prevent="borrarConciliacion(conciliacion)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="7"><button class="btn btn-primary" @click.prevent="agregarConciliacion"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<br>

			<div class="form-group">
				<table class="table">
					<caption>
						<h3>Nómina de activos financieros</h3>
						<p>Nómina de los activos financieros, señalando los documentos por cobrar, inversiones financieras, acciones, entre otros.</p>
					</caption>
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Detalle</th>
							<th>Monto</th>
							<th>Plazo</th>

							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="activo in activos">
							<td>
								<select name="activo_select" v-model="activo.nombre" class="form-control">
								  <option disabled value="">Seleccione una opción</option>
								  <option value="por_cobrar">Documentos por cobrar</option>
								  <option value="inversion_financiera">Inversiones financieras</option>
								  <option value="otro">Otros</option>
								</select>
							</td>
							<td><input type="text" name="detalle" class="form-control" v-model="activo.detalle" ></td>
							<td><input type="text" name="monto" class="form-control" v-model="activo.monto"></td>
							<td><input type="text" name="plazo" class="form-control" v-model="activo.plazo"></td>

							<td><button class="btn btn-danger" @click.prevent="borrarActivo(activo)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarActivo"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<br>
			<div class="form-group">
				<table class="table">
					<caption>
						<h3>Fondos internos a rendir</h3>
						<p>El estado de los fondos internos a rendir, indicando el nombre del cuentadante, tipo de fondo interno a rendir, monto autorizado, monto gastado y detalle de lo gastado cuando corresponda.</p>
					</caption>
					<thead>
						<tr>
							<th>Fondos internos a rendir </th>
							<th>Monto autorizado</th>
							<th>Monto gastado</th>
							<th>Detalle de lo gastado</th>
							<th>Observaciones </th>

							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="interno in internos">
							<td><input type="text" name="fondo_interno" class="form-control" v-model="interno.fondo_interno" ></td>
							<td><input type="text" name="monto_autorizado" class="form-control" v-model="interno.monto_autorizado" ></td>
							<td><input type="text" name="monto_gastado" class="form-control" v-model="interno.monto_gastado"></td>
							<td><input type="text" name="detalle_gastado" class="form-control" v-model="interno.detalle_gastado"></td>
							<td><input type="text" name="observaciones" class="form-control" v-model="interno.observaciones"></td>

							<td><button class="btn btn-danger" @click.prevent="borrarInterno(interno)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="6"><button class="btn btn-primary" @click.prevent="agregarInterno"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<br>

			<div class="form-group" >
		    	<label for="enlace_informe_contabilidad">Copia del último informe de contabilidad gubernamental, remitido a la Contraloría General de la República</label>
		    	<input class="form-control" type="file" id="fileInput" multiple v-el:fileInput />
		  	</div>
		  	<br>

		  	<div class="form-group">
				<table class="table">
					<caption>
						<h3>Anticipos de fondos</h3>
						<p>Nómina de anticipo de fondos concedidos a funcionarios y a proveedores.</p>
					</caption>
					<thead>
						<tr>
							<th>Anticipos concedidos</th>
							<th>N° de beneficiarios</th>
							<th>Monto M$</th>

							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="anticipo in anticipos">
							<td>
								<select name="anticipos_concedidos" v-model="anticipo.anticipos_concedidos" class="form-control">
								  <option disabled value="">Seleccione una opción</option>
								  <option value="funcionarios">A funcionarios</option>
								  <option value="proveedores">A proveedores</option>
								  <option value="otro">Otros</option>
								</select>

							</td>
							<td><input type="text" name="numero_beneficiarios" class="form-control" v-model="anticipo.numero_beneficiarios" ></td>
							<td><input type="text" name="monto" class="form-control" v-model="anticipo.etapa"></td>

							<td><button class="btn btn-danger" @click.prevent="borrarAnticipo(anticipo)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4"><button class="btn btn-primary" @click.prevent="agregarAnticipo"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
		

			<!-- SUBMIT -->
			<div class="form-group pull-right">
			<!--<button class="btn btn-success" @click.prevent="setData">Guardar borrador</button>-->
			<button type="submit" class="btn btn-success">Guardar borrador</button>
			</div>
			

			</form>
		</div>
	</div>


@stop
