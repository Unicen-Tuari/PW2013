	<nav>
		<ul class="menu">
			<li><a href="index.php">Inicio</a></li>
			{if isset($usuario)}
				<li>Mi Cuenta
					<ul class="submenu">
						<li><a onClick="getPage('articulo','editardatos.php'); return false">Editar Datos</a></li>
						<li><a onClick="getPage('articulo','agregarautomotor.php'); return false">Agregar Automotor</a></li>
						<li><a onClick="getPage('articulo','estadotramite.php'); return false">Estado de Transferencias</a></li>
						<li><a onClick="getPage('articulo','publicarautomotor.php'); return false">Publicar Automotor</a></li>
					</ul>
				</li>
				<li><a onClick="getPage('articulo','clientes.php'); return false">Clientes Amigos</a></li>
				<li><a onClick="getPage('articulo','links.php'); return false">Links de Inter&eacute;s</a></li>
				<li><a onClick="getPage('articulo','contacto.php'); return false">Contacto</a></li>	
			{else}
				<li><a onClick="getPage('articulo','clientes.php'); return false">Clientes Amigos</a></li>
				<li><a onClick="getPage('articulo','links.php'); return false">Links de Inter&eacute;s</a></li>
				<li><a onClick="getPage('articulo','contacto.php'); return false">Contacto</a></li>
			{/if}
		</ul>
	</nav>				

