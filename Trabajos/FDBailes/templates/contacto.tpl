{include file="header.tpl"}
<div class="elemento_contenedor" id="contacto">
	<form class="formcontacto">
		<fieldset>
			<legend>Formulario Contacto</legend><br>
			<input class="formcontacto" type="text" name="nombre" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre Apellido" required autofocus><br><br>
			{literal}
			<input class="formcontacto" type="email" name="correo" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required><br><br>
			<input class="formcontacto" type="tel" name="telefono" placeholder="Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required><br><br>
			{/literal}
			<textarea name="consulta" placeholder="*Ingrese aqui su consulta" required></textarea><br><br>
			<span class="campoobliga">*Campos Obligatorios</span>
		</fieldset>
		<br><input class="botonesform" type="reset" value="BORRAR">
		<input class="botonesform" type="submit" value="ACEPTAR">
	</form>
</div>
{include file="footer.tpl"}