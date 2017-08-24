<div id="tabpanel">
	@if(Request::is('backend/actas/iniciar/*'))
		<ul class="nav nav-tabs" role="tablist">
			<li class="{{ Request::is('backend/actas/iniciar/*') ? 'active': ''}}"><a href="{{ (isset($acta_id))? url('/backend/actas/iniciar/'.$acta_id) :  url('/backend/actas/gestion')}}">Vista edición</a></li>
			<li class="{{ Request::is('backend/actas/ver/*') ? 'active': ''}}"><a href="{{ (isset($acta_id))? url('/backend/actas/ver/'.$acta_id.'/publica') :  url('/backend/actas/gestion')}}">Vista pública</a></li>
		</ul>
	@endif
</div>