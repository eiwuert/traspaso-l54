
<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<nav>
				<ul class="nav nav-justified">
					<li id="menu-gestion" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/gestion/*') || Request::is('backend/actas/gestion') ) ? 'active': ''}}" href="{{isset($acta_id)? url('/backend/actas/gestion/'.$acta_id) : url('/backend/actas/gestion') }}">
							1. Gestión
						</a>
					</li>
					<li id="menu-personal" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/personal/*') || Request::is('backend/actas/personal') ) ? 'active': ''}} " href="{{isset($acta_id)?  url('/backend/actas/personal/'.$acta_id) : url('/backend/actas/personal') }}">
							2. Personal
						</a>
					</li>
					<li id="menu-financiera" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/financiera/*') || Request::is('backend/actas/financiera') ) ? 'active': ''}} " href="{{isset($acta_id)? url('/backend/actas/financiera/'.$acta_id): url('/backend/actas/financiera') }}">
							3. Financiera
						</a>
					</li>
					<li id="menu-inventario" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/inventario/*') || Request::is('backend/actas/inventario') ) ? 'active': ''}}" href="{{isset($acta_id)?  url('/backend/actas/inventario/'.$acta_id) : url('/backend/actas/inventario')}}">
							4. Inventario
						</a>
					</li>
					<li id="menu-legal" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/legal/*') || Request::is('backend/actas/legal') ) ? 'active': ''}}" href="{{isset($acta_id)?  url('/backend/actas/legal/'.$acta_id) : url('/backend/actas/legal') }}">
							5. Legal
						</a>
					</li>
					<li id="menu-administrativa" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/administrativa/*') || Request::is('backend/actas/administrativa') ) ? 'active': ''}}" href="{{isset($acta_id)? url('/backend/actas/administrativa/'.$acta_id) : url('/backend/actas/administrativa')}}">
							6. Administrativa
						</a>
					</li>
					<li id="menu-auditoria" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/auditoria/*') || Request::is('backend/actas/auditoria') ) ? 'active': ''}}" href="{{isset($acta_id)? url('/backend/actas/auditoria/'.$acta_id): url('/backend/actas/auditoria')}}">
							7. Auditoría
						</a>
					</li>
					<li id="menu-participacion" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/participacion/*') || Request::is('backend/actas/participacion') ) ? 'active': ''}}" href="{{isset($acta_id)? url('/backend/actas/participacion/'.$acta_id) : url('/backend/actas/participacion')}}">
							8. Participación
						</a>
					</li>
					<li id="menu-biblioteca" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/biblioteca/*') || Request::is('backend/actas/biblioteca') ) ? 'active': ''}}" href="{{isset($acta_id)? url('/backend/actas/biblioteca/'.$acta_id) : url('/backend/actas/biblioteca')}}">
							9. Biblioteca
						</a>
					</li>
					<li id="menu-otro" role="presentation">
						<a class="btn btn-default {{ (Request::is('backend/actas/otro/*') || Request::is('backend/actas/otro') ) ? 'active': ''}}" href="{{isset($acta_id)? url('/backend/actas/otro/'.$acta_id) : url('/backend/actas/otro')}}">
							10. Otros
						</a>
					</li>
				
				</ul>
			</nav>
		</div>
		
	</div>
</div>	

