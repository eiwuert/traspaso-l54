<!DOCTYPE HTML>
<html lang="en">

</head>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Plataforma Traspaso Gobierno</title>
		<link href="<?= asset('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?=asset('bower_components/modstrap/custom/bootstrap.min.css');?>" rel="stylesheet" />
        <link href="<?= asset('css/common.css') ?>" rel="stylesheet">

	</head>

	<body>
		<nav class="navbar navbar-default">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a href="{{url('')}}" class="navbar-brand"><small>Plataforma Traspaso<br> de Gobierno</small></a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="navbar-main">
					<ul class="nav navbar-nav pull-right">
						<li role="presentation">
							<form action="{{ url('backend/autenticar')}}" method="post">
								<input id="ingresoBtn" class="btn btn-primary" type="submit" alt="Ingreso con ClaveUnica" value="Ingreso a la plataforma"/>
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container-fluid">
			<div id="main-container-public" class="row">
				<div class="col-xs-12">
					<div id="content-container" class="container">

						<div class="row">
							<div class="col-xs-12">

								<div class="btn-group pull-right" role="group" aria-label="...">
									<a class="btn btn-primary btn-lg {{ (URL::current() == url('acerca'))?'active':'' }}" href="#">Acerca de la iniciativa</a>
								</div>

							</div>

						</div>

						<hr/>

						@yield('contenido')

					</div>
				</div>
			</div>
		</div>

		<footer>
	        <div class="area2">
	            <div class="container">
	                <div class="row">
	                    <div class="col-xs-3">
	                        <a href="http://www.minsegpres.gob.cl" target="_blank"><img height="150" src="{{ asset('img/logo-main.png') }}" alt="Ministerio Secretaría General de la Presidencia - Gobierno de Chile"></a>
	                    </div>
	                    <div class="col-xs-5">
	                                        </div>
	                    <div class="col-xs-4">
	                        <div class="politicas">
	                            <a href="{{ url('politica-privacidad') }}">Politicas de Privacidad</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>

	    <script type="text/javascript" src="<?=asset('bower_components/jquery/dist/jquery.min.js');?>"></script>
	    <script type="text/javascript" src="<?=asset('bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>


    	@yield('scripts')
	</body>

</html>