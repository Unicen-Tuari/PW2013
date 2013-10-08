<form id="formulariocontacto" method="POST" >
	<ul>
	    <li>
	    	<h2>Completa los siguientes datos:</h2>
			</li>
			<li>
				<label for="nombre"><span class="requerido">* </span>Nombre:</label>
				<input type="text" id="nombre" placeholder="Nombre" required autofocus="autofocus" />
			</li>
			<li>
				<label for="apellido"><span class="requerido">* </span>Apellido:</label>
				<input type="text" id="apellido" placeholder="Apellido" required />
			</li>
			<li>
				<label for="direccion"><span class="requerido">* </span>Direccion:</label>
				<input type="text" id="direccion" placeholder="Direccion" required />
			</li>
			<li>
				<label for="telefono"><span class="requerido">* </span>Telefono:</label>
				<input type="text" id="telefono" placeholder="Telefono" required />
			</li>
			<li>
				<label for="provincia"><span class="requerido">* </span>Provincia:</label>
				<input type="text" id="provincia" placeholder="Provincia" required />
			</li>
			<li>
				<label for="localidad"><span class="requerido">* </span>Localidad:</label>
				<input type="text" id="direccion" placeholder="Localidad" required />
			</li>
			<li>
				<label for="email"><span class="requerido">* </span>Email:</label>
				<input type="text" id="email" placeholder="Email" required />
			</li>
			<li>
				<label for="tipodocumento"><span class="requerido">* </span>Tipo Documento:</label>
				<input type="text" id="tipodocumento" placeholder="Tipo Documento" required />
			</li>
			<li>
				<label for="nrodocumento"><span class="requerido">* </span>Nro Documento:</label>
				<input type="text" id="nrodocumento" placeholder="Nro Documento" required />
			</li>
			<li>
				<label for="razonsocial">Razon Social:</label>
				<input type="text" id="razonsocial" placeholder="Razon Social" required />
			</li>
			<li>
				<label for="descuento">Descuento/Oferta?:</label>
				<input type="text" id="descuento" placeholder="% Descuento" required />
			</li>
			<li>
				<label for="clienteamigo"><span class="requerido">* </span>es Cliente Amigo?:</label>
				<input type="text" id="clienteamigo" placeholder="s/n" required />
			</li>
			<li>
				<label for="web">Web:</label>
				<input type="text" id="web" placeholder="Direccion Web" required />
			</li>
			<li>
				<label for="imagen">Imagen:</label>
				<button class="botonsubmit"  type="button" onclick=";">Subir Imagen</button>
			</li>
	    <li>
	       <button class="botonsubmit"  type="button" onclick="cargarcliente();">Cargar Cliente</button>
	    </li>
	</ul>
</form>
