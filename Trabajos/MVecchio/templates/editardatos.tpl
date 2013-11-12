<!--//Muestro tabla con todos los datos del cliente que esta logueado!-->
	<form class="text-center" id="formcontacto" method="post" action="">
		<ul>
		    <li>
	    		<h2>Tus datos:</h2>
			</li>
			<input type="text" id="id_cliente" name="id_cliente" hidden value="{$datos.id_cliente}"/>
			<li>
				<label for="nombre">Nombre:</label>
				<input type="text" id="nombre" name="nombre" required value="{$datos.nombre}"/>
			</li>
			<li>
				<label for="apellido">Apellido:</label>
				<input type="text" id="apellido" name="apellido"  required value="{$datos.apellido}"/>
			</li>
			<li>
				<label for="direccion">Direccion:</label>
				<input type="text" id="direccion" name="direccion"  required value="{$datos.direccion}"/>
			</li>
			<li>
				<label for="telefono">Telefono:</label>
				<input type="text" id="telefono"  name="telefono" required value="{$datos.telefono}"/>
			</li>
			<li>
				<label for="provincia">Provincia:</label>
				<input type="text" id="provincia" name="provincia" required value="{$datos.provincia}" />
			</li>
			<li>
				<label for="localidad">Localidad:</label>
				<input type="text" id="localidad" name="localidad"  required value="{$datos.localidad}"/>
			</li>
			<li>
				<label for="email">Email:</label>
				<input type="text" id="email"name="email"  required value="{$datos.email}"/>
			</li>
			<li>
				<label for="razonsocial">Razon Social:</label>
				<input type="text" id="razon_social" name="razon_social"  value="{$datos.razon_social}"/>
			</li>
			<li>
				<label for="web">Web:</label>
				<input type="text" id="web" name="web" placeholder="Direccion Web" value="{$datos.web}"/>
			</li>
			 <li>
		       <button id="confirmeditdatos" class="btn btn-primary" type="button" onClick="guardarDatos();">Confirmar</button>
		       <button id="canceleditdatos" class="btn btn-primary" type="button" onClick="getPage('articulo','inicio.php'); return false">Cancelar</button>
		    </li>
		</ul>
	</form>	