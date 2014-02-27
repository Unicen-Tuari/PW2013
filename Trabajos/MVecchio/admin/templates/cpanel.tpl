	{include file="header.tpl" title=foo}
			<nav>
				<ul class="menu">
					<li><a onClick="window.location='../index.php'">Inicio</a></li>
					<li>Clientes
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','insertcliente.php'); return false">Nuevo Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editcliente.php'); return false">Editar Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','getcliente.php'); return false">Listar Clientes</a></li>
							<li><a href="" onClick="getPage('articuloadmin','delcliente.php'); return false">Borrar Cliente</a></li>
						</ul>
					</li>
					<li>Tr&aacute;mites
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','inserttramite.php'); return false">Nuevo Tr&aacutemite</a></li>
							<li><a href="" onClick="getPage('articuloadmin','edittramite.php'); return false">Actualizar Estado</a></li>
							<li><a href="" onClick="getPage('articuloadmin','gettramite.php'); return false">Listar Tr&aacutemites</a></li>
							<li><a href="" onClick="getPage('articuloadmin','deltramite.php'); return false">Borrar Tr&aacutemite</a></li>
						</ul>
					</li>
					<li>Vehiculos
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','insertvehiculo.php'); return false">Nuevo Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','edirvehiculo.php'); return false">Editar Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','getvehiculo.php'); return false">Listar Vehiculos</a></li>
							<li><a href="" onClick="getPage('articuloadmin','delvehiculo.php'); return false">Borrar Vehiculo</a></li>
						</ul>
					</li>
					<li>Estadisticas
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','estadisticaclientes.php'); return false">Por Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','estadisticasautos.php'); return false">Por Vehiculo</a></li>
						</ul>
					</li>
					<li><a id="adminlogout">Salir</a></li>					
				</ul>
			</nav>
			<div class="target"  id="contenedorcentral">
				<h1 class="titulo">Panel de Administrador</h1>
				<article  id="articuloadmin" >
					<div id="inicio">
						<p>Desde este panel vas a poder Administrar:</p>
						<p>Clientes</p>
						<p>Tr&aacute;mites</p>
						<p>Automotores</p><br>
						<p>Adem&aacute;s controla tus Estad&iacute;sticas!</p>
					</div>
					
						<p></p>
				</article>
			</div>	
		</div>		
{include file="footer.tpl"}	

