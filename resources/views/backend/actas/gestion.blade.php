@extends('layouts.backend')

@section('contenido')

	@include('layouts.header_menu')


	<div class="col-md-12">

		<div class="page-header">
			<h2>1. Entrega Programática, gestión</h2>
		</div>

		
	</div>

	<div class="col-lg-12">

		<br>

		<div class="table-responsive" id="gestion">
			<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="setData">

			<div class="form-group" >
		    	<label for="enlace_marco_normativo">Ley orgánica institucional.</label>
		    	<input type="text" class="form-control" v-model="gestiondata.enlace_marco_normativo" placeholder="Indicar link a “Marco normativo aplicable”, transparencia activa, web del Servicio." />
		  	</div>

		  	<div class="form-group">
		    	<label for="exampleInputEmail1">Misión institucional y objetivos estratégicos 2018.</label>
		    	<input type="text" class="form-control" v-model="gestiondata.enlace_definiciones_estrategicas" placeholder="Indicar link a formulario A1, “Definiciones estratégicas” en sitio web DIPRES.">
		  	</div>

		  	<div class="form-group">
		    	<label for="exampleInputEmail1">Organigrama institucional.</label>
		    	<input type="text" class="form-control" v-model="gestiondata.enlace_estructura_organica" placeholder="Indicar link a “Diagrama de la estructura orgánica” en transparencia activa, web del Servicio.">
		  	</div>

		  	<div class="form-group">
		    	<label for="exampleInputEmail1">Cumplimiento de objetivos institucionales.</label>
		    	<input type="text" class="form-control" v-model="gestiondata.enlace_compromisos_gestion" placeholder="Indicar link banner Compromisos de Gestión Institucional, página web institucional.">
		  	</div>
		  	<br>
		  	<div class="form-group">
				<table class="table">
					<caption><h3>Programas y/o proyectos en preparación</h3></caption>
					<thead>
						<tr>
							<th>Nombre programa / proyecto</th>
							<th>Monto estimado a ejecutar</th>
							<th>Etapa de ejecución</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="programa in programas">
							<td><input type="text" name="nombre" class="form-control" v-model="programa.nombre" ></td>
							<td><input type="text" name="monto" class="form-control" v-model="programa.monto" ></td>
							<td><input type="text" name="etapa" class="form-control" v-model="programa.etapa"></td>
							<td><button class="btn btn-danger" @click.prevent="borrarPrograma(programa)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarPrograma"><i class="fa fa-plus"></i>Agregar registro</button></td>
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
					<caption><h3>Nómina de comités interministeriales en que participa el Ministerio (Completar si corresponde)</h3></caption>
					<thead>
						<tr>
							<th>Nombre Comité</th>
							<th>Calidad en la que participa</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="comite in comites">
							<td><input type="text" name="nombre" class="form-control" v-model="comite.nombre" ></td>
							<td><input type="text" name="calidad_participacion" class="form-control" v-model="comite.calidad_participacion" ></td>
							<td><button class="btn btn-danger" @click.prevent="borrarComite(comite)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarComite"><i class="fa fa-plus"></i>Agregar registro</button></td>
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
					<caption><h3>Nómina de publicaciones relevantes efectuadas de competencia del Servicio.</h3></caption>
					<thead>
						<tr>
							<th>Nombre Publicación</th>
							<th>Link a publicación</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="publicacion in publicaciones">
							<td><input type="text" name="nombre" class="form-control" v-model="publicacion.nombre" ></td>
							<td><input type="text" name="enlace_publicacion" class="form-control" v-model="publicacion.enlace_publicacion"></td>
							<td><button class="btn btn-danger" @click.prevent="borrarPublicacion(publicacion)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarPublicacion"><i class="fa fa-plus"></i>Agregar registro</button></td>
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
					<caption><h3>Nómina de compromisos internacionales y/o participaciones comprometidas en foros internacionales.</h3></caption>
					<thead>
						<tr>
							<th>Nombre compromiso / Participación en foro internacional</th>
							<th>Calidad en la que participa</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="compromiso in compromisos">
							<td><input type="text" name="nombre" class="form-control" v-model="compromiso.nombre" ></td>
							<td><input type="text" name="calidad_participacion" class="form-control" v-model="compromiso.calidad_participacion" ></td>
							<td><button class="btn btn-danger" @click.prevent="borrarCompromiso(compromiso)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarCompromiso"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<br>
			<div class="form-group">
		    	<label for="exampleInputEmail1">Grado de ejecución presupuestaria 2017 y presupuesto aprobado  2018.</label>
		    	<input type="text" class="form-control" v-model="gestiondata.enlace_ejecucion_presupuestaria" placeholder="Indicar link a ejecución presupuestaria trimestral del Servicio en página web de DIPRES y presupuesto aprobado 2018.">
		  	</div>
		  	<br>
		  	<div class="form-group">
				<table class="table">
					<caption><h3>Nómina de licitaciones en preparación y pendientes.</h3></caption>
					<thead>
						<tr>
							<th>Nombre licitación</th>
							<th>Estado de la licitación</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="licitacion in licitaciones">
							<td><input type="text" name="nombre" class="form-control" v-model="licitacion.nombre" ></td>
							<td><input type="text" name="estado" class="form-control" v-model="licitacion.estado" ></td>
							<td><button class="btn btn-danger" @click.prevent="borrarLicitacion(licitacion)">Eliminar</button></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><button class="btn btn-primary" @click.prevent="agregarLicitacion"><i class="fa fa-plus"></i>Agregar registro</button></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>

			<div class="form-group">
		    	<label for="exampleInputEmail1">Balance de logros en objetivos estratégicos y acciones del período 2014 – 2018 y experiencias relevantes de gestión.</label>
		    	<textarea rows="10" class="form-control" v-model="gestiondata.balance_logros" placeholder="Ingresar texto, con balance de logros institucionales, en materia de PMG, Convenio de Desempeño Colectivo, reconocimientos, entre otros logros de gestión."></textarea>
		  	</div>
		  	

			<!-- SUBMIT -->
			<div class="form-group pull-right">
			<!--<button class="btn btn-success" @click.prevent="setData">Guardar borrador</button>-->
			<button type="submit" class="btn btn-success">Guardar borrador</button>
			</div>
			
			</form>
		</div>
	</div>
</div>

@stop
