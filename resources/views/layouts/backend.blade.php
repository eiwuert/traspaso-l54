<!DOCTYPE html>
<html lang="en">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- Meta, title, CSS, favicons, etc. -->
    	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
		<meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Traspaso</title>

		<!-- Bootstrap core CSS - Modificado Gobstrap -->
		<link href="<?=asset('bower_components/modstrap/custom/bootstrap.min.css');?>" rel="stylesheet" />
		<link href="<?=asset('css/common.css');?>" rel="stylesheet" />


	</head>

	<body>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
	      	<div class="navbar-header">
	          <a href="<?php echo url('backend'); ?>" class="navbar-brand"><small>Plataforma Traspaso <br>de Gobierno</small></a>
	          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>

	      <div class="collapse navbar-collapse" id="navbar-main">

	        <ul class="nav navbar-nav">
            	<li><a role="menuitem" tabindex="-1" href="{{ url('backend/actas/listado') }}">Actas</a></li>
	        </ul>
	        @if(\Auth::user()->perfil == 'root' || \Auth::user()->perfil == 'superadmin')
	        <ul class="nav navbar-nav">
	        	<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('backend/mantenedor/usuarios') }}">Usuarios</a></li>
						<li><a href="{{ url('backend/mantenedor/instituciones') }}">Instituciones</a></li>
						
					</ul>
				</li>
	        </ul>
	        @endif
	        

	        <ul class="nav navbar-nav pull-right">
	          <li class="dropdown">
	            <a id="menu_usuario" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            	Administrador<span class="caret"></span>
	            </a>

	            <ul class="dropdown-menu" role="menu" aria-labelledby="menu_usuario">
	              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Editar perfil</a></li>
	              <li role="presentation" class="divider"></li>
		          <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('logout') }}">Cerrar sesión</a></li>
	            </ul>

	          </li>
	        </ul>
	      </div>
            </div>
	    </nav>

		<div id="main-container" class="container">
			
			@yield('contenido')
	    </div>
        <footer class="footer">
			<div class="col-md-6 col-md-offset-3">
		    	<br>
		        <p style="text-align:center">En caso de consultas envíe un correo electrónico a <a href="mailto:traspaso@minsegpres.gob.cl">traspaso@minsegpres.gob.cl</a></p>
		        <br>
		    </div>
		</footer>


		<script type="text/javascript" src="<?=asset('bower_components/jquery/dist/jquery.min.js');?>"></script>
    	<script type="text/javascript" src="<?=asset('bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
        <script>
            var siteURL = "<?=url()->current();?>";
        </script>

        
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?=asset('js/vue.js');?>"></script>
        <script type="text/javascript" src="<?=asset('js/vue-resource.js');?>"></script>
        <script type="text/javascript" src="<?=asset('js/selectize.js');?>"></script>
		<script type="text/javascript" src="<?=asset('js/backend.js');?>"></script>
		<script type="text/javascript" src="<?=asset('js/personal.js');?>"></script>
		<script type="text/javascript" src="<?=asset('js/financiera.js');?>"></script>
		<script type="text/javascript" src="<?=asset('js/legal.js');?>"></script>
		<script type="text/javascript" src="<?=asset('js/inventario.js');?>"></script>
		<script type="text/javascript" src="<?=asset('js/administrativa.js');?>"></script>
		<script type="text/javascript" src="<?=asset('js/otro.js');?>"></script>
		<script type="text/javascript" src="<?=asset('js/dropzone.js');?>"></script>

		@yield('scripts')
    </body>
</html>
