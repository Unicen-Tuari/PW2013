<form id="formcontacto" method="post" action="">
	<ul>
		<input type="text" id="operacion" name="operacion" hidden value="newC"/>
	    <li>
			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre" required/>
		</li>
		<li>
			<label for="apellido">Apellido:</label>
			<input type="text" id="apellido" name="apellido"  required/>
		</li>
		<li>
			<label for="direccion">Direccion:</label>
			<input type="text" id="direccion" name="direccion"  required/>
		</li>
		<li>
			<label for="telefono">Telefono:</label>
			<input type="telefono" id="telefono"  name="telefono" required/>
		</li>
		<li>
			<label for="provincia">Provincia:</label>
			<input type="text" id="provincia" name="provincia" required/>
		</li>
		<li>
			<label for="localidad">Localidad:</label>
			<input type="text" id="localidad" name="localidad"  required/>
		</li>
		<li>
			<label for="email">Email:</label>
			<input type="text" id="email"name="email"  required/>
		</li>
		<li>
			<label for="tipo_doc">Tipo Documento:</label>
			<input type="text" id="tipo_documento"name="tipo_documento"  required/>
		</li>
		<li>
			<label for="nro_doc">Nro Documento:</label>
			<input type="text" id="nro_documento"name="nro_documento"  required/>
		</li>
		<li>
			<label for="razon_social">Razon Social:</label>
			<input type="text" id="razon_social" name="razon_social"/>
		</li>
		<li>
			<label for="cliente_amigo">Es cliente Amigo? (s/n):</label>
			<input type="text" id="es_cliente_amigo"name="es_cliente_amigo"  required/>
		</li>
		<li>
			<label for="descuento">Descuento/Oferta:</label>
			<input type="text" id="descuento"name="descuento"/>
		</li>
		<li>
			<label for="web">Web:</label>
			<input type="text" id="web" name="web"/>
		</li>
		 <li>
	       <button id="confirmarcliente" class="btn btn-primary" type="button" onClick="insertCliente();">Confirmar</button>
	       <button id="" class="btn btn-primary" type="reset">Reset</button>
	    </li>
	</ul>
</form>	