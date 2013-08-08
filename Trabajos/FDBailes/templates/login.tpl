{include file="header.tpl"}
<div class="clear"></div>
<div class="elemento_contenedor" id="contacto">
	<h2>LOGIN</h2>
	<form class="formcontacto">
		<fieldset>
			<legend>Datos Login Administrador</legend><br>
			<input class="formcontacto" type="text" name="usuario" placeholder="Usuario" pattern="[\w-.]+" required autofocus><br><br>
			<input class="formcontacto" type="password" name="password" placeholder="Contraseña" pattern="[\w-.]+" required><br><br>
		</fieldset>
		<br><input class="botonesform" type="reset" value="BORRAR">
		<input class="botonesform" type="submit" value="ACEPTAR">
	</form>
</div>
{include file="footer.tpl"}