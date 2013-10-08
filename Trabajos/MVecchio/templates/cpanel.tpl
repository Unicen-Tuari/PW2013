	{include file="header.tpl" title=foo}
			<nav>
				<ul class="menu">
					<li>Administrar Cliente
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','nuevocliente.php'); return false">Nuevo Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Editar Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Clientes</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Cliente</a></li>
						</ul>
					</li>
					<li>Administrar Tr&aacute;mite
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Nuevo Tr&aacutemite</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Actualizar Estado</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Tr&aacutemites</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Tr&aacutemite</a></li>
						</ul>
					</li>
					<li>Administrar Vehiculo
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Nuevo Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Editar Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Vehiculos</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Vehiculo</a></li>
						</ul>
					</li>
					<li>Estadisticas
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Por Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Por Vehiculo</a></li>
						</ul>
					</li>
					<li><a href="" onClick=";">Salir</a></li>					
				</ul>
			</nav>
			<div class="target"  id="contenedorcentral">
				<article  id="articuloadmin" >
				</article>
			</div>	
		</div>		
{include file="footer.tpl"}	

