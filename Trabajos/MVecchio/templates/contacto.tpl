<form id="formulariocontacto" action="enviar.php" method="POST" >
	<ul>
	    <li>
	    	<h2>Contactanos!!</h2>
			</li>
			<li>
				<label for="nombre"><span class="requerido">* </span>Nombre y &nbsp;&nbsp;Apellido:</label>
				<input type="text" id="nombre" placeholder="Nombre y Apellido" required autofocus="autofocus" />
			</li>
			<li>
	        <label for="email"><span class="requerido">* </span>Email:</label>
	        <input type="email" id="email" placeholder="Email" required />
	    </li>
	    <li>
	        <label for="telefono">&nbsp;&nbsp;Telefono:</label>
	        <input type="tel" id="telefono" placeholder="Telefono">
	    </li>
	    <li>
				<label for="asunto"><span class="requerido">* </span>Asunto:</label>
				<input type="text" id="asunto" placeholder="Asunto" required />
			</li>
	    <li>
	        <label for="mensaje"><span class="requerido">* </span>Mensaje:</label>
	        <textarea id="mensaje" cols="40" rows="6" required ></textarea>
	    </li>
	    <li>
	       <button class="botonsubmit"  type="button" onclick="verificarFormulario();">Enviar Mensaje</button>
	    </li>
	</ul>
</form>
