<form id="formcontacto" name="formcontacto" method="post" action="">
	<ul>
		<li>
    		<h2>Contactanos!!</h2>
		</li>
		<li>
			<label for="nombre"><span class="requerido">* </span>Nombre Completo:</label>
			<input type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" required autofocus="autofocus" />
		</li>
		<li>
	        <label for="email"><span class="requerido">* </span>Email:</label>
	        <input type="email" id="email" name="email" placeholder="Email" required />
	    </li>
	    <li>
	        <label for="telefono">&nbsp;&nbsp;Telefono:</label>
	        <input type="tel" class="input" id="telefono" name="telefono"placeholder="Telefono">
	    </li>
	    <li>
				<label for="asunto"><span class="requerido">* </span>Asunto:</label>
				<input type="text" id="asunto" name="asunto" placeholder="Asunto" required />
			</li>
	    <li>
	        <label for="mensaje"><span class="requerido">* </span>Mensaje:</label>
	        <textarea id="mensaje" name="mensaje" cols="40" rows="6" required placeholder="Tu Mensaje"></textarea>
	    </li>
	    <li>
	    	<button id="submitcontacto" type="button" class="btn btn-primary" onClick="enviar();">Enviar Mensaje</button><br>
	    	<h4 id="result" class="succes" style="display: none;"></h4>
	    </li>
	</ul>
</form>
	
	    	