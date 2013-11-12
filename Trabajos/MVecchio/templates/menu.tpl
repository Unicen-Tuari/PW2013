	<nav>
		<ul class="menu">
			<li><a onClick="getPage('articulo','inicio.php'); return false">Inicio</a></li>
			{if isset($usuario)}
				<li><a onClick="getPage('articulo','clientes.php'); return false">Clientes Amigos</a></li>
				<li><a onClick="getPage('articulo','links.php'); return false">Links de Inter&eacute;s</a></li>
				<li><a onClick="getPage('articulo','contacto.php'); return false">Contacto</a></li>
				<li>Mi Cuenta
					<ul class="submenu">
						<li><a onClick="getPage('articulo','editardatos.php'); return false">Editar Datos</a></li>
						<!--TO DO<li><a onClick="getPage('articulo','agregarautomotor.php'); return false">Agregar Automotor</a></li>-->
						<li><a onClick="getPage('articulo','estadotramite.php'); return false">Estado de Transferencias</a></li>
						<!--TO DO<li><a onClick="getPage('articulo','publicarautomotor.php'); return false">Publicar Automotor</a></li>-->
					</ul>
				</li>
				{if $usuario='admin'}
				<li><a onClick="window.location='./admin/cpanel.php'">Administrador</a></li>
				{/if}
			{else}
				<li><a onClick="getPage('articulo','clientes.php'); return false">Clientes Amigos</a></li>
				<li><a onClick="getPage('articulo','links.php'); return false">Links de Inter&eacute;s</a></li>
				<li><a onClick="getPage('articulo','contacto.php'); return false">Contacto</a></li>
			{/if}
		</ul>
	</nav>				


